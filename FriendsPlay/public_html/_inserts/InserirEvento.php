<?php 

include ("../_Funcoes/FuncaoInserir.php");



$nome = $_REQUEST['nome'];
$modalidade = $_REQUEST['modalidade'];
$local = $_REQUEST['local'];
$data = $_REQUEST['data'];
$hora = $_REQUEST['hora'];	
$privacidade = $_REQUEST['privacidade'];
$descricao = $_REQUEST['descricao'];

inserir(array("nome_evento","local_evento","data_evento","horario_evento","privacidade_evento","descricao_evento"),
	array($nome,$local,$data,$hora,$privacidade,$descricao), "Evento");



 ?>