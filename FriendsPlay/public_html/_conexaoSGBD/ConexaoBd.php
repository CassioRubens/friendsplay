<?php

//Dados de acesso ao servidor mysql
$MySQL = array(
    'servidor' => '127.0.0.1',// Endereço do servidor
    'usuario' => 'root',         //Usuário
    'senha' => '',                  //Senha
    'banco' => 'meubd'        //Nome do banco de dados
    
);

$MySQL = new mysqli($MySQL['servidor'], $MySQL['usuario'], $MySQL['senha'], $MySQL['banco']);

//Verificar se ocorreu um erro e exibir mensagem
if(mysql_connect_erro()){
    trigger_error(mysql_connect_erro(), E_USER_ERROR);
}
