<?php
function fecharConexao($coneect){
        $fecha = mysql_close($coneect);
        if(!$fecha){
            echo "Impossivel fechar a conexão!";
            return false;
        }  else {
            return TRUE;
        }
} 
?>