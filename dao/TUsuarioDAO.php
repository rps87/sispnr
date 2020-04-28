<?php
require_once('../dao/IUsuarioDAO.php');
require_once('../dao/TDBCon.php');
require_once('../entity/Usuario.php');

class TUsuarioDAO implements IUsuarioDAO {
    private $db;

    function __construct() {
        $this->db = TDBCon::getInstance();
    }
      
    public function salvar(Usuario $usuario) {
        echo("TUsuarioDAO->salvar: ".$usuario->getNome()."<br>");
        $this->db->salvar($usuario);
        return;
    }

    public function alterar(Usuario $usuario) {
    }

    public function consultar(Usuario $usuario) {
        // Simula usuário não encontrado
        echo("TUsuarioDAO->consultar: ".$usuario->getNome()."<br>");
        return null;
    }

    public function consultarTodos() {
    }

    public function excluir(Usuario $usuario) {
    }
}
?>