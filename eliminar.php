<?php
require 'admin/config.php';
require 'functions.php';


$conexion = Database::connect();


if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $eliminada = eliminar_palabra($conexion,$id);

    if ($eliminada) {
        // Redireccionar a la página después de eliminar
        header('Location: index.php');
        exit();
    } else {
        // Manejar el error, si es necesario
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
}


?>