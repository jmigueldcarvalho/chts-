<html>
    <head>
         <?php require "conexao.php"?>
    </head>    
    <body>
    <div align="center">
     <h1>Livros</h1>     
        <table cellpadding="0" cellspacing="8" border="0">
        <td align="center">
            <table cellpadding="3" cellspacing="2" border="0">
                <tr>
                    <td class="cabecalho" width="30" align="center">Id</td>
                    <td class="cabecalho">Nome</td>
                    <td class="cabecalho">data entrada</td>
                    <td class="cabecalho">requisitante</td> 
                    <td class="cabecalho">data autorizacao</td>
                    <td class="cabecalho">data resposta</td>
                    <td class="cabecalho">tipo</td>
                    <td class="cabecalho">Observacoes</td>
                   
                </tr>
                <?php       
                    $sql = "SELECT * FROM pedido ORDER BY ped_id";
                    // Pega nos registos 
                    $sql = "SELECT * FROM pedido";
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
                            $lista .= $coluna.">".$registo["requisitante"]."</td>";
                            $lista .= $coluna.">".$registo["data_autori"]."</td>";
                            $lista .= $coluna.">".$registo["data_resp"]."</td>";
                            $lista .= $coluna.">".$registo["ped_tipo"]."</td>";
                            $lista .= $coluna.">".$registo["observacoes"]."</td>";
                            $lista .= $coluna."align='center'>";
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
               <td width="200"><a target="_blank" href="productos.php" class="btn btn-danger">Exportar a PDF</a></td>
    </tr>    
    </div>
    </div>
 </body>
</html>