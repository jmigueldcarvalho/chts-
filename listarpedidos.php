<html>
    <head>
         <?php require "conexao.php"?>
    </head>
     <link href="estilos/estilos1.css" type="text/css" rel="stylesheet" media="screen" />     
    <body>
    <div align="center">
     <h1>Pedidos</h1>
     <img src="imagens/logo.jpg" />     
        <table cellpadding="0" cellspacing="8" border="0" >
        <td align="center">
            <table cellpadding="3" cellspacing="2" border="0" >
                <tr>
                    <td style="cabecalho" width="30" align="center">Id</td>
                    <td class="cabecalho">Nome</td>
                    <td class="cabecalho">Data Entrada</td>
                    <td class="cabecalho">Requisitante</td>
                    <td class="cabecalho">Data Autorizacao</td>
                    <td class="cabecalho">Data Resposta</td>
                    <td class="cabecalho">Tipo</td>
                    <td class="cabecalho">Observacoes</td>
                     <td class="cabecalho">Estado</td>
                    <td width="200" align="center"><a target="_blank" href="productos.php" class="btn btn-danger"><img src='imagens/print.png'</a></td>
                    
                    
                </tr>
                <?php       
                    $sql = "SELECT * FROM pedido,requisitante,tipo,estado  WHERE req_id=requisitante AND pedido.ped_tipo=tipo.tipo_id=estado.estado_id ORDER BY ped_id";
                    // Pega nos registos 
                   
                    $result = mysql_query($sql); // executa a consulta
                    if (mysql_num_rows($result)!= 0){ // encontrou o registo
                        // lista os valores da tabela
                        $linha = 0;
                        $lista = "";
                        while($registo = mysql_fetch_array($result)){
                            $lista .= "<tr>";
                            if (($linha % 2)==0)
                                $coluna = "<td class='linha1' ";
                            else
                                $coluna = "<td class='linha2' ";
                            $lista .= $coluna." align='center'>".$registo["ped_id"]."</td>";
                            $lista .= $coluna.">".$registo["ped_nome"]."</td>";
                            $lista .= $coluna.">".$registo["data_entrada"]."</td>";
                            $lista .= $coluna.">".$registo["req_nome"]."</td>";
                            $lista .= $coluna.">".$registo["data_autori"]."</td>";
                            $lista .= $coluna.">".$registo["data_resp"]."</td>";
                            $lista .= $coluna.">".$registo["tipo_descricao"]."</td>";
                            $lista .= $coluna.">".$registo["observacoes"]."</td>";
                            $lista .= $coluna.">".$registo["estado_descricao"]."</td>";
                            $lista .= $coluna."align='center'>";
                            $lista .= "&nbsp;<a href='ped_del.php?idc=".$registo["ped_id"]."' alt='Eliminar' onclick=\"return (confirm('Quer realmente eliminar?'))\"><img src='imagens/delete.png' alt='Eliminar' title='Eliminar' border='0'/></a>";
                            $lista .= "&nbsp;<a href='editar.php?id=".$registo["ped_id"]."' alt='Eliminar' onclick=\"return (confirm('Editar pedido '))\"><img src='imagens/editar.png' alt='Eliminar' title='Eliminar' border='0'/></a>";
                            $lista .= "</td>";
                            $lista .= "</tr>";
                            $linha +=1;
                        }
                        echo $lista;
                        }
                    else{ // não encontrou o registo

                    }        

                ?>
            </table>
               <link class='active'><a href='menu.php'>voltar</a></li>
                     
   </link>
        </td>
    </tr>    
    </div>
    </div>
 </body>
</html>