<link href="estilos/estilos1.css" type="text/css" rel="stylesheet" media="screen" />  
<img src="imagens/logo.jpg"/>
<br><br><br>
Nome do Pedido:
<?php
                   if(isset($_POST['buscar'])){ 
                                //conexao a bd 
                            $host = 'localhost'; // endereço do seu mysql
                            $user = 'root'; // usuário
                            $pass = '12345'; // senha
                            $con = mysql_connect($host,$user,$pass); // função de conexão
                            $db = 'chts'; // nome do banco de dados

                    mysql_select_db($db,$con) or print mysql_error(); // seleção do banco de dados

                    $busca=$_POST['busca'];

                    $sql = mysql_query("SELECT * FROM pedido,tipo,requisitante,estado WHERE ped_nome LIKE '%$busca%' AND pedido.ped_tipo=tipo.tipo_id=estado.estado_id ");

                    echo '<table class="table table-striped table-condensed table-hover">
                                <tr>
                                    <th  width="10">Id</td>
                                    <th width="90">Nome</th>
                                    <th width="90">Data Entrada</th>
                                    <th width="90">Requisitante</th>
                                    <th width="90">Data Autorizacao</th>
                                    <th width="90">Data Resposta</th>
                                    <th width="10">Tipo</th>
                                    <th width="90">Observacoes</th>
                                    <th width="90">Estado</th>
                                    
                                    
                                </tr>';
                    if(mysql_num_rows($sql)>0){
                        while($registo = mysql_fetch_array($sql)){
                            echo '<tr>
                                <td>'.$registo['ped_id'].'</td>
                                <td>'.$registo['ped_nome'].'</td>
                                <td>'.$registo['data_entrada'].'</td>
                                <td>'.$registo['req_nome'].'</td>
                                <td>'.$registo['data_autori'].'</td>
                                <td>'.$registo['data_resp'].'</td>
                                <td>'.$registo['tipo_descricao'].'</td>
                                <td>'.$registo['observacoes'].'</td>
                                <td>'.$registo['estado_descricao'].'</td>
                              
                                    </tr>';
                        }
                    }else{
                        echo '<tr>
                                    <td colspan="5">Nao se encontraram resultados</td>
                                </tr>';
                    }
                    echo '</table>';
                }
                    ?>
                     <form method="post">
                           <input type="text" name="busca" size="20">
                           <input type="submit" id="buscar" name="buscar" value="Buscar">
                           <link class='active'><a href='menu.php'>voltar</a></li>
                        </form>