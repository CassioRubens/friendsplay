<?php 

include ("../_Funcoes/FuncaoInserir.php");


//Perfil
$nome = $_REQUEST['nome'];


//Logradouro
$local = $_REQUEST['local'];
$numeroDoLocal = $_REQUEST['numeroDoLocal'];
$cidade = $_REQUEST['cidade'];
$estado = $_REQUEST['tEstado'];

//Caracteristicas e data
$data = $_REQUEST['data'];
$hora = $_REQUEST['hora'];	
$numeroMaximo = $_REQUEST['cNumMax'];
$numeroMinimo = $_REQUEST['NumMin'];
$privacidade = $_REQUEST['privacidade'];

//Descrição
$descricao = $_REQUEST['descricao'];




inserir(array("nome_evento","local_evento", "numero", "cidade", "estado", "data_evento","horario_evento","privacidade_evento",
	"descricao_evento"),
	array($nome,$local,$data,$hora,$privacidade,$descricao,$local,$numero,$cidade,$estado), "Evento");

 ?>