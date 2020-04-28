<?php
// bootstrap.php
require_once "../vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;



// Caminho das entidades mapeadas
$entitiesPath = array("../entity");

$isDevMode = true;

// Parâmetro de configuração do banco
$dbParams = array(
	'driver' => 'pdo_pgsql',
	'host' => 'localhost',
	'port' => '5432',
    'dbname' => 'PHPDB',
    'user' => 'postgres',
    'password' => 'brasil', 
    'charset' => 'utf8', 
);

$config = Setup::createAnnotationMetadataConfiguration($entitiesPath, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);
?>