<?php
include ("conexao.php");
include_once("classe.php"); 

$ped= new book();
$ped->openDB("localhost","chts","root","");
 print_r($_POST);
       if(isset($_POST['guardar'])){ 
        // NOVO REGISTO - construção da consulta
            $sql  = "INSERT INTO requisitante";
            $sql .= "(req_nome) VALUES (";
            $sql .= "'".$_POST['req_nome']."')";
            $a=mysql_query($sql);
            if ($a){
                echo "<script>alert('requisitante registado com sucesso')</script>";
            }
            else{
                echo mysql_error();
            }
       }
            
$ped= new book();
$ped->startForm();
$ped->openDB();
$ped->endForm();

        
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Requisitantes</title>
        <link href="estilos/estilos.css" type="text/css" rel="stylesheet" media="screen" /> 
    </head>
<div align="center" class="">

 <form class="pedform" action="" method="post" id="ped" name="ped" >
    <img src="imagens/logo.jpg">
    <br>
    <?php $ped->addText6("Insira o nome:","req_nome","required"); ?>
    <br>
    <?php $ped->addSubmit("guardar","guardar"); ?>
    <br>
    <link class='active'><a href='menu.php'>voltar</a></li>
    </link>

    </form> 
</div>
 
    

<body background="imagens/background2.jpg">

<div id='cssmenu'>

</div>

</body>




