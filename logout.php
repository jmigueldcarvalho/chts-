	<?php

//DestrÃ³    
session_destroy();
 
    //Limpa
    unset ($_SESSION['ut_nr']);
    unset ($_SESSION['ut_pw']);
   
    //Redireciona para a pÃ¡gina de autenticaÃ§Ã£o
  print "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
?>