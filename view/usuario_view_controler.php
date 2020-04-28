<?php

require_once "../control/TUsuarioCT.php";

$nome = (String)$_POST['nome'];

$userCT = new TUsuarioCT();
$userCT->enviarUsuario($nome);
?>