<?php

$banco="frendsplay";
$usuario="root";
$senha="";
$localhost="localhost";

$conexao= mysql_connect($localhost, $usuario, $senha);
mysql_select_db($banco) or die("Não foi possivel conectar ao banco");

if(!$conexao){
    echo "Não foi possivel conectar ao banco de dados"; exit;
}  else {
    echo "Conexão Realizada";
}
mysql_close();
?>