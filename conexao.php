<?php
    $servidor="localhost";            // SERVIDOR E PORTA UTILIZADA
    $nomebd="chts";             // BASE DE DADOS
    $utilizador="root";               // UTILIZADOR DO MYSQL
    $pass="12345";                         // PASSWORD DO MYSQL

    $conexao=mysql_connect($servidor, $utilizador, $pass);
    if ($conexao) {
            if(!mysql_select_db($nomebd, $conexao)){
                    echo "Erro ao abrir Base de Dados";
                    }
            }
    else{
            echo "Erro ao ligar ao Servidor";
            }
?>