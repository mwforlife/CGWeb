<?php
require "../../Controller/ControllerInsert.php";

$c = new Controller();

$titulo = $_POST['titulo'];

//Sacar nombre de la Imagen
$document_name = "document".date("dHis").".".pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

//Definir la ruta de la imagen
$destino = $_SERVER['DOCUMENT_ROOT'] . "/media/documentos/Informativos/";

//Mover la imagen del directorio temporal al directorio escogido
move_uploaded_file($_FILES['file']['tmp_name'], $destino . $document_name);

$resultado = $c->registraDocumentos($titulo, 5,"media/documentos/Informativos/".$document_name,1,1);
if ($resultado==true) {
    echo 1;
}else{
    echo $resultado;
}
