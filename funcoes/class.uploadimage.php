<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of uploadimage
 *
 * @author rlinhares
 */
class uploadimage {

    //-------------------------- VERIFICA SE EXISTE MEMORIA SUFICIENTE
    function enoughmem ($width, $height, $rgb=3){
        $MAXMEM = (32*1024*1024);  //--- memory limit (32M) ---
        return ( $width * $height * $rgb * 1.7 < $MAXMEM - memory_get_usage() );
    }

       
    //------------------------------------------- ENCONTRAR A EXTENSAO
    function findexts($filename){
         $filename = strtolower($filename) ;
         $exts = preg_split("/[\s]*[.][\s]*/", $filename) ;
         $n = count($exts)-1;
         $exts = $exts[$n];
         return $exts;
     }

    //----------------------------------------------- RESIZE DA IMAGEM
    function upload($imagem, $Max_comp, $Max_alt, $nome, $pasta){

        if (list($width, $height, $type, $attr) = getimagesize($imagem)){
            if ($this->enoughmem($width,$height)) {
                $img = @imagecreatefromjpeg ($imagem);
               
                if ($width > $height) {
                    $tx = $Max_comp;  
                    $ty = round($Max_comp / $width * $height);
                } else {
                    $tx = round($Max_alt / $height * $width);
                    $ty = $Max_alt;
                }
                if ($this->enoughmem($tx,$ty)) {
                    $thb = imagecreatetruecolor ($tx, $ty);
                    imagecopyresampled ($thb, $img, 0,0, 0,0, $tx,$ty, $width,$height);                    
                    $name = $nome.".jpg";
                    $pasta= "$pasta/$name";
                    imagejpeg ($thb, $pasta, 80);
                    imagedestroy ($thb);
                }
                imagedestroy ($img);
            }
        }
        return $name;
    }
}
?>
