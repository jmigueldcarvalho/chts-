<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>CHTS</title>
        <link href="estilos/estilos.css" type="text/css" rel="stylesheet" media="screen" />        
        
        <!-- Criação de Menus Pull Down -->
        <script src="js/jquery.tools.min.js" type="text/javascript"></script>
        
        <!-- Validação do formulário de administração com javaScript -->
        <script type="text/javascript" src="funcoes/validacao.js"></script>
        
        <!-- Menus e mensagens de alerta em português, 
             dado que a validação é feita por HTML5 -->        
        <script type="text/javascript" src="funcoes/jQfuncoes.js"></script>
    </head>
    <body background="">
        <?php
            
            error_reporting(E_ALL ^ E_DEPRECATED);  
            require "conexao.php";
            require "funcoes/funcoes.php";
                   
            $id=0;
            if(isset($_GET['id'])){
                $id = $_GET['id'];
            }
        ?>
        
        
        
        <table cellpadding="0" cellspacing="0" border="0" class="admin">
            <tr>
                <td class="faixamenu" align="right">
                   
                     <a href="logout.php">Logout</a>
                    &nbsp;&nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td class="faixalogo"><div id="logoDiv"><img src="imagens/logo.jpg" /></div></td>
            </tr>
            <tr>
                <td class="faixamenu faixamenu1">
                    <div id="menuVertical">
                        <ul class="menuVer">
                            <li>
                                <a href="pedido_add.php">Adicionar Pedido</a>           
                            </li>
                          
                                 <li>
                                <a href="listarpedidos.php">Ver Pedidos</a>
                
                            </li>

                            <li>
                            
                            <li>
                                <a href="pesquisarpedidos.php">Pesquisar Pedidos </a></li>                                
                            </li>
                            
                            <li>
                                <a href="pesquisarporpedido.php">Pedido-Tipo </a></li>

                            </li>

                             <li>
                            <a href="estadopedido.php">Estado-Pedido </a></li>                                
                            </li>

                            <li>
                                <a href="add_req.php">Adicionar Requisitante</a>           
                            </li>

                             <li>
                                <a href="listarequisitantes.php">Requisitantes</a>           
                            </li>
                                     

                    </div>                    
                </td>
            </tr>
            <tr>
                <td align="center">
                    <br><br>
                
                </td>
            </tr>
        </table>
        <br><br><br>
        <div align="center">  <img src="imagens/a.jpg" /> </div>
        
    </body>
   
</html>
