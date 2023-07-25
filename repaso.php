<?php

require 'admin/config.php';
require 'functions.php';

$conexion =  Database::connect();




if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $repaso =  obtener_palabra($conexion, $id);

    $repaso = $repaso[0];

    require 'views/repaso_view.php';
}

// Obtener la fecha actual en el formato día/mes/año
$fecha_actual = date("d/M/Y");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
// Crear el texto con la información ingresada por el usuario
$texto = "<h3 class='text-center' >La palabra elegida fue: " . $_POST['espanol'] .
         "</h3><h3 class='text-center'>En inglés se escribé: " . $_POST['inglesBd'] .
         "</h3><h3 class='text-center'>Tu escritura en inglés fue: " . $_POST['ingles'] . "</h3>" .
         "<h5 class='text-center' >Fecha de repaso: " . $fecha_actual . "</h5>";

// Verificar si la escritura en inglés coincide con la palabra correcta
if (strtolower($_POST['inglesBd']) == strtolower(  $_POST['ingles'])) {
    // Texto para mostrar si la palabra fue escrita correctamente
    $textoif = "<h5 class='text-center'>¡La palabra fue escrita correctamente! Felicitaciones.</h5>";

    // Combinar el texto principal con el mensaje de escritura correcta
    $textofinal = $texto . $textoif;

    // Guardar el texto en un archivo de registro (repaso.txt)
    $archivo = fopen('repaso.txt', 'a');
    fputs($archivo, $textofinal);
    fclose($archivo);
}else{
    $textoElse =    "<h5 class='text-center'>" . "la palabra fue mal escrita" . "</h5>";

    $textofinal = $texto . $textoElse;
    $archivo = fopen('repaso.txt', 'a');
    fputs($archivo, $textofinal);
}
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user input from the form
    $userInput = $_POST['ingles'];
    $userInput = strtolower($userInput);
    $id = $_POST['id'];

    // Assuming you have a function to retrieve the English word from the database based on $id
    $englishWordFromDB = obtener_palabra($conexion, $id);

    $englishWordFromDB = $englishWordFromDB[0];

    $palabraBD = $englishWordFromDB['ingles'];
    $palabraBD = strtolower($palabraBD);
    // Compare the user input with the word from the database
    if ($userInput === $palabraBD) {

        $status = "OK";
      
        
        $repaso =  obtener_palabra($conexion, $id);

        $repaso = $repaso[0];
    } else {
        $status = "ERROR";
      
        $repaso =  obtener_palabra($conexion, $id);

        $repaso = $repaso[0];
    }

    require 'views/repaso_view.php';
}

