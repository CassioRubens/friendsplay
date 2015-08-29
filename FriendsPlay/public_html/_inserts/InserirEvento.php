<?php 

include ("../_Funcoes/FuncaoInserir.php");



$nome = $_REQUEST['nome'];
$modalidade = $_REQUEST['modalidade'];
$local = $_REQUEST['local'];
$data = $_REQUEST['data'];
$hora = $_REQUEST['hora'];	
$privacidade = $_REQUEST['privacidade'];
$descricao = $_REQUEST['descricao'];

$local = $_REQUEST['local'];
$numero = $_REQUEST['numeroDoLocal'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['cEstado'];


inserir(array("nome_evento","local_evento","data_evento","horario_evento","privacidade_evento",
	"descricao_evento", "logradouro", "numero", "cidade", "estado"),
	array($nome,$local,$data,$hora,$privacidade,$descricao,$local,$numero,$cidade,$estado), "Evento");

 ?>