<?php
require_once 'config.php';
$conexion = Database::connect();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_per = $_POST['espanol'];
    $apellido_per = $_POST['ingles'];
    $imagen_per = $_POST['imagen'];
    $descripcion_per = $_POST['fonetica']; 
    $thumb = $_FILES['thumb']['tmp_name'];

    $carpeta_destino = '../img/';
    $nombre_archivo =  $_FILES['thumb']['name']; // Nombre real del archivo

    $archivo_subido = $carpeta_destino . $nombre_archivo;
    move_uploaded_file($thumb, $archivo_subido);

    mysqli_query($conexion, "INSERT INTO palabras VALUES (DEFAULT, '$nombre_per', '$apellido_per', '$nombre_archivo', '$descripcion_per')");

    mysqli_close($conexion);
}

require '../views/nuevo_views.php';



?>


