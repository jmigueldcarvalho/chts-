<?php require "conexao.php";?>
<?php

    //Guardar um novo registo
    if(isset($_POST['guardar'])){        
            // ATUALIZA REGISTO - construção da consulta
            $sql  = "UPDATE pedido SET ";
            $sql .= "ped_nome      = '".$_POST['ped_nome']."',
                     data_entrada      = '".$_POST['data_entrada']."',
                     requisitante      = '".$_POST['requisitante']."',
                     data_autori      = '".$_POST['data_autori']."',
                     data_resp      = '".$_POST['data_resp']."',
                     ped_tipo    = '".$_POST['ped_tipo']."',
                     observacoes     = '".$_POST['observacoes']."'
                    WHERE ped_id       = ".$_GET['id'];
            // executar a consulta
            $result = mysql_query($sql);
            if($result){
                echo "<script>alert('Dados guardados com sucesso.');</script>";
                }
            else{
                echo "<script>alert('ERRO!!!');</script>";
                echo mysql_error();
                echo $sql;
                }
        }
        
        // Pega no registo número 1 (UM)
        $sql = "SELECT * FROM pedido WHERE ped_id = ".$_GET['id'];
        $result = mysql_query($sql); // executa a consulta
        if (mysql_num_rows($result)!= 0){ // encontrou o registo
            // pega nos valores do registo
            $registo = mysql_fetch_assoc($result);
            extract($registo);
            }
        else{ // não encontrou o registo
            
        }        
echo mysql_error();
?>
<table cellpadding="0" cellspacing="10" border="0" class="formTable cRedondos">
    <tr>
        <td class="Titulo">Editar</td>
    </tr>
    <tr>
        <td class="Titulo"><hr size="5" NOSHADE></td>
    </tr>
    <tr>
        <td align="center">
            <form action="" method="post" id="frmADM" name="frmADM" onSubmit="return verificaPreenchimentoADM();">
                <table cellpadding="0" cellspacing="10" border="0">                    
                    <tr>
                        <td class="rotulo">Nome:</td>
                        <td class="campo"><input type="text" name="ped_nome" id="ped_nome" value="<?php echo $ped_nome; ?>" size="50" placeholder="Insira um novo nome" autofocus required></td>
                    </tr>
                    <tr>
                        <td class="rotulo">Data entrada:</td>
                        <td class="campo"><input type="text" name="data_entrada" id="data_entrada" value="<?php echo $data_entrada; ?>" size="50" placeholder="Insira uma nova data" autofocus required></td>
                    </tr>
                    <tr>
                        <td class="rotulo">Requisitante:</td>
                        <td class="campo"><input type="text" name="requisitante" id="requisitante" value="<?php echo $requisitante; ?>" size="50" placeholder="Insira um novo requisitante" autofocus required></td>
                    </tr>                 
                    <tr>
                        <td class="rotulo">Data autorizacao:</td>
                        <td class="campo"><input type="text" name="data_autori" id="data_autori" value="<?php echo $data_autori; ?>" size="50" placeholder="Insira uma nova data de requisicao" autofocus required></td>
                    </tr>  

                    <tr>
                        <td class="rotulo">Data resposta:</td>
                        <td class="campo"><input type="text" name="data_resp" id="data_resp" value="<?php echo $data_resp; ?>" size="50" placeholder="Insira uma nova data de resposta" autofocus required></td>
                    </tr> 

                    <tr>
                        <td class="rotulo"> Tipo:</td>
                        <td class="campo"><input type="text" name="ped_tipo" id="ped_tipo" value="<?php echo $ped_tipo; ?>" size="50" placeholder="Insira o tipo" autofocus required></td>
                    </tr>           
                    
                    <tr>
                        <td class="rotulo">Observacoes:</td>
                        <td class="campo"><input type="text" name="observacoes" id="observacoes" value="<?php echo $observacoes; ?>" size="50" placeholder="Insira observacoes" autofocus required></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2" align="right"><input type="submit" name="guardar" value="Guardar"></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="left"><a href="menu.php?id=5" class="voltar">Voltar</a></td>
                    </tr>
                </table>
            </form>
        </td>
    </tr>    
</table>
