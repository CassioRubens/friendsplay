<?php

include ("../_Funcoes/FuncaoSelect.php");

$consulta = select("Usuario");
if ($consulta == TRUE) {
	
	for ($i=0; $i <count($consulta) ; $i++) { 
		echo $consulta[$i]["id_usuario"]."<br>";
		echo $consulta[$i]["nome_usuario"]."<br>";
	}
}else{
            echo	"Nenhum dado foi retornado";
}

?>