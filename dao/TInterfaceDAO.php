<?php
require_once('../entity/Usuario.php');
require_once('../util/TUtil.php');
require_once('../dao/TUsuarioDAO.php');

class TInterfaceDAO{
    private static $instance;
    private $usuarioDAO;

    // Utiliza padrão Singleton
    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new self;
        }
        return self::$instance;
    }
 
    private function __construct() {
        $this->usuarioDAO = new TUsuarioDAO();
    }

    public function salvarUsuario(Usuario $usuario){
        echo("TInterfaceDAO->salvarUsuario: ".$usuario->getNome()."<br>");
        return $this->usuarioDAO->salvar($usuario);
    }
    
    public function consultarUsuario(Usuario $usuario){
        echo("TInterfaceDAO->consultarUsuario: ".$usuario->getNome()."<br>");
        return $this->usuarioDAO->consultar($usuario);
    }
}
?>

