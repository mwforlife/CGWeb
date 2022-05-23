<?php
require "../../Controller/ControllerInsert.php";

$c = new Controller();

$titulo ="";
$valor = "";
$tipo = $_POST['tipo_content'];
if($tipo==0){
    echo "Seleccione una opcion";
}else if($tipo==1){
    $titulo = $_POST['title-img'];
    //Sacar nombre de la Imagen
$image_name = "GaleryImage".date("dHis").".".pathinfo($_FILES['contenido_img']['name'], PATHINFO_EXTENSION);

//Definir la ruta de la imagen
$destino = $_SERVER['DOCUMENT_ROOT'] . "/CGWeb/media/uploads/galery/";

//Mover la imagen del directorio temporal al directorio escogido
move_uploaded_file($_FILES['contenido_img']['tmp_name'], $destino . $image_name);

    $result = $c->InsertGalery($titulo, $tipo, $image_name);
    if($result==true){
        echo 1;
    }else{
        echo $result;
    }
}else{
    $titulo = $_POST['title-video'];
    $valor = $_POST['contenido_video'];
    
    $result = $c->InsertGalery($titulo, $tipo, $valor);
    if($result==true){
        echo 1;
    }else{
        echo $result;
    }
}