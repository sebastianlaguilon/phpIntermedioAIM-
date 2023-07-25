<?php

function obtener_palabras($conexion) {
    $sentenciaCate = $conexion->prepare("SELECT * FROM palabras");
    $sentenciaCate->execute();
    $resultado = $sentenciaCate->get_result();

   $palabras = array();
    while ($fila = $resultado->fetch_assoc()) {
        $palabras[] = $fila;
    }

    return $palabras;
}

function obtener_palabra($conexion,$id) {
    $sentenciaCate = $conexion->prepare("SELECT * FROM palabras WHERE id = $id");
    $sentenciaCate->execute();
    $resultado = $sentenciaCate->get_result();

   $palabra = array();
    while ($fila = $resultado->fetch_assoc()) {
        $palabra[] = $fila;
    }

    return $palabra;
}

function eliminar_palabra($conexion, $id){
    $consulta = "DELETE FROM palabras WHERE id = $id";
    $resultado = mysqli_query($conexion, $consulta);

    return $resultado;
}