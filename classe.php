<?php
class book {
  
     public function openDB(){
        $server="localhost";    
        $nomebd="chts";
        $utilizador="root";
        $pw="12345";

        $conexao=  mysql_connect($server,$utilizador,$pw);
        if($conexao) {
            if(!mysql_select_db($nomebd,$conexao)){
        echo "Erro ao abrir Base de dados";
    }
}
    else{
            echo "Erro ao ligar ao servidor";
    }
}
 
    public function startForm (){
        echo "<form method='post' action=''>";
    } 
     
   public function addText ($rotulo,$nome, $required=''){
       echo "<br>"; 
       echo "$rotulo <input  type='text' id='$nome' name='$nome' $required >";          
        echo "<br>";
    } 
  public function addText1 ($rotulo,$requisitante){
      echo"<br>";  
      echo "$rotulo <input name='$requisitante' type='text' id='$requisitante'>";          
        echo "<br>";
    }
    
       public function addText2 ($rotulo,$observacoes){
        echo"<br>";  
      echo "$rotulo <input name='$observacoes' type='text' id='$observacoes'>";          
        echo "<br>";
    }

  public function  AddSelectummmm($imput, $campo, $tabela, $id, $descricao, $select = '', $required = '', $class){
        $sql = mysql_query("SELECT * FROM $tabela ORDER BY $descricao ASC");
        $combo = "
                    <label>$imput</label><select name='$campo' $required class='$class'>";
                        if(mysql_num_rows($sql)){
                            $combo .= "<option value=''>Selecione...</option>";
                            while ($myrow = mysql_fetch_array($sql)){
                                if ($myrow[$id]==$select){ 
                                    $combo .= "<option value=".$myrow[$id]." selected>".$myrow[$descricao]."</option>";
                                    }
                                else{
                                    $combo .= "<option value=".$myrow[$id].">".$myrow[$descricao]."</option>";
                                    }
                                }
                            }
                        else
                            {
                                $combo .= "<option value='0'>Sem Temas...</option>";
                        }
        $combo .= "
                    </select><br>";
        echo $combo;                      
     }

 public function addText3 ($rotulo,$dataentrada){
     echo"<br>";   
     echo "$rotulo<input name='data_entrada' type='date' value='data'>";          
        echo "<br>";
    }

     public function addText4 ($rotulo,$data_autori){
     echo"<br>";   
     echo "$rotulo<input name='data_autori' type='date' value='data'>";          
        echo "<br>";
    }
 
 public function addText5 ($rotulo,$data_resp){
     echo"<br>";   
     echo "$rotulo<input name='data_resp' type='date' value='data'>";          
        echo "<br>";
    }

  public function addText6 ($rotulo,$req_nome){
     echo"<br>";   
     echo "$rotulo<input type='text' name='req_nome' type='text'>";          
        echo "<br>";
    }

     public function addSelect ($rotulo,$tipo){
           echo"<br>";
           echo "$rotulo<select name='$tipo'>
       <option value='1'>Mapa</option>
       <option value='2'>Query</option>
               </select> ";
        echo "<br>";
    } 
       

    public function addRadioButton ($id, $rotulo,$valor){
           echo "<input name='$id' type='radio' value='$valor'>$rotulo <br>";
    }

  
      
  public function addSubmit ($nome,$value){
      echo "<br>";  
      echo "<input type='submit' name='$nome' value='$value'>";
        echo "<br>";
    }


  public function Delete ($tabela, $where, $iqual){
        $where!= "" ? $condicao = " WHERE $where = $iqual" : $condicao = "";
        $sql  ="DELETE FROM $tabela $condicao";
        $result = mysql_query($sql); echo mysql_error();
        return $result ;
       }
    

    public function endForm (){
        echo "</form>";
    }
    
   
    
    
}
 
?>

