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

echo "<br><h1> el nombre del producto es: " .$nom_prod. "</h1>";
echo "<br><h1> el precio del producto es: " .$precio. "</h1>";
echo "<br><h1> Los ingredientes son: " .$ingredientes. "</h1>";
echo "<br>";
echo "<br><h1> la imagen es: ". $ruta. "</h1>";
$sql1 = mysqli_query ($conexion, "insert into 'productos'('imagen', 'nombre_producto' , 'precio'. 'descripcion') values ('ruta','nom_prod','precio', 'ingredientes')");
mysqli_query ($conexion,$sqli) or die (mysqli_error($conexion));