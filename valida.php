<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valida</title>
</head>
<body>
<?php

$nombre = $_GET["nombre"];
$clave = $_GET["clave"];
$direccion = $_GET["direccion"];
$nacionalidad = $_GET["nacionalidad"];
$estado = $_GET["estado"];
//
print "<p>Bienvenido, $nombre, a nuestra página</p>";
print "<p>La clave es: $clave</p>";
print "<p>Su direccion es: $direccion</p>";
print "<p>Su nacionalidad es: $nacionalidad</p>";
print "<p>Su estado civil es: $estado</p>";



?>    
</body>
</html>