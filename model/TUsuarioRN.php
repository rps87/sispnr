<?php
require_once('../entity/Usuario.php');
require_once('../util/TUtil.php');
require_once("../dao/TInterfaceDAO.php");

class TUsuarioRN{
    private $interfaceDAO;
   
    function __construct() {
        $this->interfaceDAO = TInterfaceDAO::getInstance();
    }

    public function salvarUsuario(Usuario $usuario){
        echo("TUsuarioRN->salvarUsuario: ".$usuario->getNome()."<br>");
        return $this->interfaceDAO->salvarUsuario($usuario);
    }
    
    public function consultarUsuario(Usuario $usuario){
        echo("TUsuarioRN->consultarUsuario: ".$usuario->getNome()."<br>");
        return $this->interfaceDAO->consultarUsuario($usuario);
    }
}
?>