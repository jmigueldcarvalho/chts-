<?php
include ("conexao.php");
include_once("classe.php"); 

$ped= new book();
$ped->openDB("localhost","chts","root","");
 print_r($_POST);
       if(isset($_POST['guardar'])){ 
        // NOVO REGISTO - construção da consulta
            $sql  = "INSERT INTO pedido";
            $sql .= "(ped_nome,data_entrada,requisitante,data_autori,data_resp,ped_tipo,observacoes,ped_estado) VALUES (";
            $sql .= "'".$_POST['nome']."', '".$_POST['data_entrada']."',
                     '".$_POST['requisitantep']."',  '".$_POST['data_autori']."',
                     '".$_POST['data_resp']."', '".$_POST['tipo']."',
                     '".$_POST['observacoes']."','".$_POST['ped_estado']."')";
            $a=mysql_query($sql);
            if ($a){
                echo "<script>alert('pedido registado com sucesso')</script>";
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
        <title>Pedidos</title>
        <link href="estilos/estilos.css" type="text/css" rel="stylesheet" media="screen" /> 
    </head>
<div align="center" class="">

 <form class="pedform" action="" method="post" id="ped" name="ped" >
    <img src="imagens/logo.jpg">
    <br>
    <?php $ped->addText("Insira o nome:","nome","required"); ?>
    <br>
    <?php $ped->addText3("Insira a data de entrada:","dataentrada","required"); ?>
    <br>

<?php $ped->AddSelectummmm("Inserir Requisitante ","requisitantep","requisitante","req_id","req_nome","","required","coiso");echo"<br>"; ?>

    
    <br>
    <?php $ped->addText4 ("insira a data de autorizacao:","data_autori","required"); ?>
    <br>
    <?php $ped->addText5 ("insira a data de resposta:","data_resp","required"); ?>
    <br>
    <?php $ped->addSelect("tipo : ","tipo","required"); ?>
    <br>
    <?php $ped->addText("Observacoes:","observacoes","required"); ?>
    <br>

<?php $ped->AddSelectummmm("Inserir estado","ped_estado","estado","estado_id","estado_descricao","","required","coiso");echo"<br>"; ?>
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




