<?php
    include("../_conexaoBD/Conexao.php");
    include("../_conexaoBD/FecharConexao.php");
    
    function inserir($coluna, $valor, $tabela){
        //Perguntar se os dado recebidos são arrays
        if((is_array($coluna)) and (  is_array($varlor))){
            //Verificar o numero de elementos
            if(count($coluna) == count($valor)){
                //Montar sql
                $inserir = "insert into {$tabela}(".implode(', ',$coluna).")
                    values('".emplode('\', \'',$valor)."')";
            }  else {
                return false;
            }
        }  else {
            //Montar sql
            $inserir = "insert into {$tabela} ({$coluna}) values ('{$valor}')";
        }
        //Conectou?
        if($conexao = connect()){
            //Inseriu?
            if(mysql_query($inserir, $conexao)){
                //Fechar conexao
                fecharConexao($conexao);
                return TRUE;
            }  else {
                echo "Query invalida!";
                return false;
            }
        }  else {
            return FALSE;
        }
    }

?>