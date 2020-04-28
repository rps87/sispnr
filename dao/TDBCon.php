<?php
require_once "../vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

class TDBCon{
    private static $instance;
    private $entitiesPath;
    private $isDevMode;
    private $dbParams;
    private $config;
    private $entityManager;
 

    // Utiliza padrão Singleton
    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }
 
    private function __construct() {
        $this->entitiesPath = array("../entity");
        $this->isDevMode = true;
        $this->dbParams = array(
	        'driver' => 'pdo_pgsql',
	        'host' => 'localhost',
	        'port' => '5432',
            'dbname' => 'PHPDB',
            'user' => 'postgres',
            'password' => '', 
            'charset' => 'utf8', 
        );

        $this->config = Setup::createAnnotationMetadataConfiguration($this->entitiesPath, $this->isDevMode);
        $this->entityManager = EntityManager::create($this->dbParams, $this->config);
    }

    public function salvar($entity){
        echo("TDBCon->salvar() <br>");
        $this->entityManager->persist($entity);
        $this->entityManager->flush();
    }

    public function excluir($entity){
        $this->entityManager->remove($entity);
        $this->entityManager->flush();
    }

    public function consultar($entityname, $id){
        $this->entityManager->find($entityname, $id);
    }
}
?>