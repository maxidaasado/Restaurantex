<?php
include "conexion-php";
$nom_prod = $_POST['nom_prod'];
$precio = $_POST['precio'];
$ingredientes = $_POST['ingredientes'];
$imagen = $_FILES['foto1']['name'];
$temporal = $_FILES ['foto1']['tmp_name'];
$carpeta_destino = 'img';
$ruta4 = 'img/' .$imagen;
move_uploaded_file($temporal, $carpeta_destino. '/'. $imagen);