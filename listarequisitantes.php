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
                   
      
      
                    
                    
                </tr>
                <?php       
                    $sql = "SELECT * FROM requisitante ORDER BY req_id";
                    // Pega nos registos 
                    $sql = "SELECT * FROM requisitante";
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
                            $lista .= $coluna." align='center'>".$registo["req_id"]."</td>";
                            $lista .= $coluna.">".$registo["req_nome"]."</td>";
                            $lista .= $coluna."align='center'>";
                            $lista .= "&nbsp;<a href='req_del.php?idc=".$registo["req_id"]."' alt='Eliminar' onclick=\"return (confirm('Quer realmente eliminar?'))\"><img src='imagens/delete.png' alt='Eliminar' title='Eliminar' border='0'/></a>";
                            
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