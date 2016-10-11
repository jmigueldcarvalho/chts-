<?php require "conexao.php" ?>
<?php
    require_once("classe.php"); 

    /* Elimina o registo */
    $classe= new book();
    $result = $classe-> Delete("pedido","ped_id", $_GET['idc']);
    
    /* Verifica se deu erro ao eliminar o registo */ 
    if (mysql_error()){
        echo "<script type='text/javascript'>";
        echo 'alert ("Erro ao eliminar...");';
        echo "</script>";
    }
    
    /* Volta à página inicial */ 
    print "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=listarpedidos.php'>";


?>