<?php session_start();?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login administrcao</title>
        <link href="estilos/estilos1.css" type="text/css" rel="stylesheet" media="screen" /> 
        
        <!-- Menus e mensagens de alerta em portuguÃªs, 
             dado que a validaÃ§Ã£o Ã© feita por HTML5 -->    
        <script src="js/jquery.tools.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="funcoes/jQfuncoes.js"></script>
        
    </head>
    <body>
        <?php
            if(isset($_POST["entrar"])){           
                //liga Ã  base de dados
                require_once ('conexao.php');   
                
                //cria as variÃ¡veis com os valores do formulÃ¡rio	
                $numero   = $_POST['ut_nr'];
                $passw  = $_POST['ut_pw'];

                //procura utilizador na base de dados
                $resultado = mysql_query("SELECT * FROM utilizador WHERE ut_nr = '$numero'"); 

                //retorna o nÃºmero de registos encontrados
                $contagem = mysql_num_rows($resultado); 

                //se o valor retornado for igual a um, significa que encontrou o utilizador
                if ( $contagem == 1 ) {
                    //passa o registo para variÃ¡veis - estas tÃªm o nome dos campos da tabela sistema
                    $manel = mysql_fetch_assoc ($resultado);
                    extract($manel);
                    //verifica se a password estÃ¡ correta
                    if (($passw)==$ut_pw){
                            //Inicializa a variÃ¡vel de sessÃ£o
                            $_SESSION["login"]=$ut_nr;
                            //redireciona para a pÃ¡gina do menuadmin.php
                            print "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=menu.php'>"; 
                        }
                    //password incorreta	
                    else{
                        echo "<script>alert('Password Incorreta.');</script>"; //se a senha estÃ¡ incorreta mostra essa mensagem
                        }                
                    } 
                //nÃ£o encontrou o utilizador    
                else {
                    echo "<script>alert('Utilizador Invalido.');</script>"; //se a senha estÃ¡ incorreta mostra essa mensagem
                    }                  
                }
        ?>
        <table cellpadding="0" cellspacing="0" border="0" width="100" height="80">
            <tr>
                <td align="center" valign="bottom" height="100">
                    <img src="imagens/logo.jpg" />
                </td>
            </tr>
            <tr>
                <td align="center" valign="top">
                     <table cellpadding="5" cellspacing="" border="0" class="login">
                        <tr>
                            <td class="login">
                                <br /><br /><br /><br /><br />
                                <div class="wrapper">
                                    <div class="content">
                                        <div id="logoDiv"></div>
                                            <div id="form_wrapper" class="form_wrapper">                             
                                                <form class="login active" name="myform" id="myform" action="" method="post">
                                                    <h3>CHTS</h3>
                                                    <div>
                                                            <label>Utilizador:</label>
                                                            <input type="text" name="ut_nr" required/>
                                                            <span class="error">Houve um erro</span>
                                                    </div>
                                                    <div>
                                                            <label>Password:
                                                            <input type="password" name="ut_pw" required/>
                                                            <span class="error">Houve um erro</span>
                                                    </div>
                                                    <div class="bottom">
                                                            
                                                            <input type="submit" name="entrar" value="Login"></input>
                                                            <div class="clear"></div>
                                                    </div>
                                                </form>                            
                                            </div>
                                            <div class="clear"></div>
                                    </div>    
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        
    </body>
</html>