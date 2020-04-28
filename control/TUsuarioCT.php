<?php
require_once('../entity/Usuario.php');
require_once('../util/TUtil.php');
require_once('../model/TUsuarioRN.php');

class TUsuarioCT{
    private $usuarioRN;
    private $nome;
   
    function __construct() {
        $this->usuarioRN = new TUsuarioRN();
    }

    public function enviarUsuario($nome){
        echo("TUsuarioCT->enviarUsuario: ".$nome."<br>");
        $this->nome = trim($nome);

        // Chama a função para verificação dos campos
        $this->validarCampos();

        // Cria novo Usuário
        $novoUsuario = new Usuario();
        $novoUsuario->setId(0);
        $novoUsuario->setNome($this->nome);

        // Consulta Usuário
        if(!empty($this->usuarioRN->consultarUsuario($novoUsuario))){
            // Usuário já existe
            echo("Usuário não retornou vazio!");
        }

        // Salva Usuário no DB
        $this->usuarioRN->salvarUsuario($novoUsuario);
        
        echo("Operação realizada com sucesso!");
    }
      
    private function validarCampos() {
        echo("TUsuarioCT->validarCampos <br>");
        /* Valida campo nome */
        if(!TUtil::validarNome($this->nome)){
            return FALSE;
        }
        return TRUE;
    }

}
?>