<?php

include ("../_Funcoes/FuncaoSelectInsert.php");

$consulta = select("evento","*","where id_evento = 4",null,null);

if ($consulta == TRUE) {
	
	for ($i=0; $i <= count($consulta) ; $i++) { 
		echo $consulta[$i]["nome"]."<br>";
		echo $consulta[$i]["data"]."<br>";
		
	}
}else{
            echo	"Nenhum dado foi retornado";
}

?>