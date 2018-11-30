<?php
if (!isset($_FILES['foto'])) {
	header('location:index.php');
    
}

include_once 'connect_db.php';


$registro = mysqli_query($mysqli, "SELECT * FROM galeria ORDER BY id_galeria DESC");
$result = mysqli_fetch_array($registro);
$valor = $result['id_galeria'];
$id = $valor+1;

        
        // Primero, hay que validar que se trata de un JPG/GIF/PNG
        $allowedExts = array("jpg", "jpeg", "gif", "png", "JPG", "JPEG", "GIF", "PNG");
        $extension = end(explode(".", $_FILES["foto"]["name"]));
        if ((($_FILES["foto"]["type"] == "image/gif")
                || ($_FILES["foto"]["type"] == "image/jpeg")
                || ($_FILES["foto"]["type"] == "image/png")
                || ($_FILES["foto"]["type"] == "image/pjpeg"))
                && in_array($extension, $allowedExts)) {
            // el archivo es un JPG/GIF/PNG, entonces...
            
            $extension = end(explode('.', $_FILES['foto']['name']));
            $foto = "foto".$id.".".$extension;
            $directorio = "images/portfolio/"; // directorio de tu elección
            
            // almacenar imagen en el servidor
            move_uploaded_file($_FILES['foto']['tmp_name'], $directorio.'/'.$foto);
            $resFoto = 'res_'.$foto;
            resizeImagen($directorio.'/', $foto, 1200, 1200,$resFoto,$extension);
            unlink($directorio.'/'.$foto);
            
        } else { // El archivo no es JPG/GIF/PNG
            $malformato = $_FILES["foto"]["type"];
        
            exit;
          }
        
   
        

####
## Función para redimencionar las imágenes
## utilizando las liberías de GD de PHP
####

function resizeImagen($ruta, $nombre, $alto, $ancho,$nombreN,$extension){
    $rutaImagenOriginal = $ruta.$nombre;
    if($extension == 'GIF' || $extension == 'gif'){
    $img_original = imagecreatefromgif($rutaImagenOriginal);
    }
    if($extension == 'jpg' || $extension == 'JPG'){
    $img_original = imagecreatefromjpeg($rutaImagenOriginal);
    }
    if($extension == 'png' || $extension == 'PNG'){
    $img_original = imagecreatefrompng($rutaImagenOriginal);
    }
    $max_ancho = $ancho;
    $max_alto = $alto;
    list($ancho,$alto)=getimagesize($rutaImagenOriginal);
    $x_ratio = $max_ancho / $ancho;
    $y_ratio = $max_alto / $alto;
    if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho 
    $ancho_final = $ancho;
    $alto_final = $alto;
  } elseif (($x_ratio * $alto) < $max_alto){
    $alto_final = ceil($x_ratio * $alto);
    $ancho_final = $max_ancho;
  } else{
    $ancho_final = ceil($y_ratio * $ancho);
    $alto_final = $max_alto;
  }
    $tmp=imagecreatetruecolor($ancho_final,$alto_final);
    imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
    imagedestroy($img_original);
    $calidad=100;
    imagejpeg($tmp,$ruta.$nombreN,$calidad);
    
}

mysqli_query($mysqli, "INSERT INTO galeria (descripcion, nombre_img, fecha_subida)VALUES('','$resFoto',now())");

header('location:vistas/galeria.php');

?>