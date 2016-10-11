<div style="position:relative; background-color: #fff;"><br><br>
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

                    $sql = mysql_query("SELECT pedido.ped_nome,pedido.ped_id,pedido.ped_tipo FROM pedido
                        WHERE pedido.ped_tipo = tema.tema_id and tema.tema_nome LIKE '%$busca%' or livro.livro_nome LIKE '%$busca%' ");

                    echo '<table class="table table-striped table-condensed table-hover">
                                <tr>
                                <th width="300">ID</th>
                                    <th width="300">Nome</th>
                                    <th width="200">Tema </th>
                                     
                                </tr>';
                    if(mysql_num_rows($sql)>0){
                        while($registo = mysql_fetch_array($sql)){
                            echo '<tr>
                            <td>'.$registo['livro_id'].'</td>
                                <td>'.$registo['livro_nome'].'</td>
                                <td>'.$registo['tema_nome'].'</td>
                              

                                
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

                    <ul>
                                    <li>1-Infantis</a></li>
                                   <li>2-Cientifico</a></li>
                                    <li>3-Historia</a></li>
                                     <li>4-Poesia</a></li>
                                      <li>5-Desporto</a></li>
                                       
                                

                                </ul>


                     <form method="post">
                           <input type="text" name="busca" size="20">
                           <input type="submit" id="buscar" name="buscar" value="Buscar">
                           <link class='active'><a href=' menu.php'>voltar</a></li>
                        </form>
                        <br><br>
</div>