<?php
    require "conexao.php";
    //Guardar um novo registo
    if(isset($_POST['registar'])){ 
        // NOVO REGISTO - construção da consulta
            $sql  = "INSERT INTO utilizador";
            $sql .= "(ut_nr,ut_pw) VALUES (";
            $sql .= "'".$_POST['ut_nr']."', '".$_POST['ut_pw']."')";
        // executar a consulta
        $result = mysql_query($sql);
        if($result){
            echo "<script>alert('Conta registada com sucesso.');</script>";
            }
        else{
            echo "<script>alert('ERRO!!!');</script>";
            echo mysql_error();
            }
    }

?>
        <link type="text/css" rel="stylesheet" media="screen" href="estilos.css" />
        <title>Registo de novo Cliente</title>
        <link href="estilos/estilos1.css" type="text/css" rel="stylesheet" media="screen" />       
        
<table cellpadding="0" cellspacing="10" border="0" class="formTable cRedondos">
    <tr>
        <td class="Titulo">Registo</td>
    </tr>
     <tr>
                <td align="center" valign="bottom" height="100">
                    <img src="imagens/logo.jpg" />
                </td>
            </tr>
    <tr>
        <td class="Titulo"><hr size="5" NOSHADE></td>
    </tr>
    <tr>
        <td align="center">
            <form action="" method="post" id="frmADM" name="frmADM" onSubmit="return verificaPreenchimentoADM();">
                <table cellpadding="0" cellspacing="10" border="0">                    
                    <tr>
                        <td class="rotulo">Numero:</td>
                        <td class="view.css"><input type="number" name="ut_nr" id="ut_nr" size="5"  placeholder="Insira o numero" autofocus required></td>
                    </tr>
              
                    <tr>
                        <td class="rotulo">Password:</td>
                        <td class="campo"><input type="password" name="ut_pw" id="ut_pw" size="32" placeholder="Insira a Password" autofocus ></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="right"><input type="submit" name="registar" value="Registar"></td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>    
</table>