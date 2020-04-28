<?php
class TUtil {
   
    function __construct() {
    }
      
    // Métodos estáticos
    public static function validarNome($nome) {
        echo("TUtil->validarNome <br>");
        if(!empty($nome) && is_string($nome) && strlen($nome)>0){
            return TRUE;
        }

        return FALSE;
    }

}
?>