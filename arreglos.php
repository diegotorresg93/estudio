<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos</title>
</head>
<body>
<?php
$aMeses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

$dias[] = "Lunes";
$dias[] = "Martes";
$dias[] = "Miercoles";
$dias[] = "Jueves";
$dias[] = "Viernes";
$dias[] = "Sabado";
$dias[] = "Domingo";

$alumnos[0] = "Paola";
$alumnos[1] = "Fernando";
$alumnos[2] = "Alejandro";
$alumnos[3] = "Malcon";
$alumnos[4] = "Brian";
$alumnos[5] = "Lili";
$alumnos[6] = "Eduardo";

print "<p>El primer alumno es $alumnos[0]</p>";
print "<p>Los alumnos inscritos al curso son ".count($alumnos)."</p>";
print "<ul>";
for($i=0; $i<count($alumnos); $i++){

print "<li> $alumnos[$i] </li>";

}
print "</ul>";

?>


    
</body>
</html>