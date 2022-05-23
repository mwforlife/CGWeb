<?php
require "../../Controller/ControllerInsert.php";

$c = new Controller();

$name = $_POST['team-name'];
$lastname = $_POST['team-lastname'];
$email = $_POST['team-email'];
$phone = $_POST['team-phone'];
$place = $_POST['team-place'];
$group = $_POST['team-group'];

if (strlen($name) > 0 && strlen($lastname) > 0 && strlen($email) > 0 && strlen($phone) > 0 && strlen($place) > 0 && strlen($group) > 0) {

//Sacar nombre de la Imagen
$image_name = "TeamImage".date("dHis").".".pathinfo($_FILES['team-foto']['name'], PATHINFO_EXTENSION);

//Definir la ruta de la imagen
$destino = $_SERVER['DOCUMENT_ROOT'] . "/CGWeb/img/Docentes/";

//Mover la imagen del directorio temporal al directorio escogido
move_uploaded_file($_FILES['team-foto']['tmp_name'], $destino . $image_name);

$resultado = $c->registraPersonal($name, $lastname, $email, $phone,$group,  $place, $image_name);
if ($resultado==true) {
    echo 1;
}else{
    echo $resultado;
}

}else{
    echo "Faltan datos";
}