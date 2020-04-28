<?php
require_once('../entity/Usuario.php');

interface IUsuarioDAO
{
    public function salvar(Usuario $usuario);
    public function alterar(Usuario $usuario);
    public function consultar(Usuario $usuario);
    public function consultarTodos();
    public function excluir(Usuario $usuario);
}
?>