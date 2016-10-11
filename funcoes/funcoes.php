<?php

    function geraNomeFicheiro(){
        $data = date ("j/m/Y");
        $hora = date ("H:i:s");

        $nome = $data.$hora;
        $nome = str_replace("/", "", $nome);
        $nome = str_replace(":", "", $nome);
        $nome = str_replace(" ", "", $nome);

        return $nome;
    }
    
    function uploadImagem($ficheiro, $nome, $X, $Y, $pasta = ''){
        require_once('class.uploadimage.php');

        $upload_image = new uploadimage;
        $upload_name = $ficheiro;

        $imagem = stripslashes($_FILES[$upload_name]['name']);
        $ext = $upload_image->findexts($_FILES[$upload_name]['name']);
        move_uploaded_file($_FILES[$upload_name]["tmp_name"], "../imagens/_temp/imgtemp.".$ext);

        $imagem  = "../imagens/_temp/imgtemp.".$ext;
        $pasta   = "../imagens/$pasta";
        $nomeimg = $upload_image->upload($imagem, $X, $Y, $nome, $pasta);
        return $nomeimg;
    }
    
    function CriaTXTFile($ficheiro, $texto){
        $fh = fopen($ficheiro, 'w') or die("Impossível abrir ficheiro...");
        if (fwrite($fh, $texto));
        fclose($fh);

        return;
        }
    
    function LeTXTFile($ficheiro){        
        $a="";
        if (file_exists($ficheiro)){
            $fh = fopen("".$ficheiro, "r") or die("");
            while(true){
                $line = fgets($fh);
                if($line == null)break;
                $a.= $line;
                }
            fclose($fh);
            }
        return $a;
        }
        
    function criaCombo($tabela, $id, $descricao, $select = '', $required = ''){
        $sql = mysql_query("SELECT * FROM $tabela ORDER BY $descricao ASC");
        $combo = "
                    <select name='$tabela' $required>";
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
                    </select>";
        
        return $combo;
    }
    
?>
