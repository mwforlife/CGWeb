<?php
require "../../Controller/Controllerinterno.php";

$c = new Controller();

$name = $_POST['team-name'];
$lastname = $_POST['team-lastname'];
$email = $_POST['team-email'];
$phone = $_POST['team-phone'];
$place = $_POST['team-place'];
$group = $_POST['team-group'];

//Sacar nombre de la Imagen
$image_name = "TeamImage".date("dHis").".".pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

//Definir la ruta de la imagen
$destino = $_SERVER['DOCUMENT_ROOT'] . "/img/Docentes/";

//Mover la imagen del directorio temporal al directorio escogido
move_uploaded_file($_FILES['foto']['tmp_name'], $destino . $image_name);

