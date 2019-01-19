<?php 
if( is_uploaded_file($_FILES["subir"]["tmp_name"]) ){
    $nombre = time();
    copy($_FILES["subir"]["tmp_name"], "fotos/$nombre.jpg");
}
header("Location: http://localhost/9.ServidorImagenes/");
?>