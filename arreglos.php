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

print "<ol>";
foreach ($aMeses as $mes){
    print "<li> $mes </li>";

}
print "</ol>";

$mesesDias = array_merge($aMeses, $dias);
print "<p> Los elementos en el nuevo arreglo es de ".count($mesesDias). "</p>";

$numAlumnos = array_push($alumnos, "Lucia", "Alejandro", "Gabriela");
print "<p>Los alumnos inscritos al curso son ".count($alumnos)."</p>";
print "<ul>";
for($i=0; $i<count($alumnos); $i++){

print "<li> $alumnos[$i] </li>";

}
print "</ul>";

$baja = $alumnos[2];
unset($alumnos[2]);
print "<p> El alumno dado de baja es $baja</p>";
print "<p>Ahora los alumnos incritos son ".count($alumnos)."</p>";

$busca = "Paulina";
$exito = in_array($busca, $alumnos);
if($exito){

    print "<p>Si hay un alumno llamado $busca en el grupo</p>";

}else {
    print "<p>No hay un alumno llamado $busca en el grupo</p>";
}

//Ordenar un arreglo
sort($alumnos);
print "<p>Los alumnos ordenados alfabeticamente son: ".count($alumnos)."</p>";
print "<ul>";
for($i=0; $i<count($alumnos); $i++){

print "<li> $alumnos[$i] </li>";

}
print "</ul>";

$frutas = array("Naranja1", "naranja2", "Naranja3", "naranja20", "naranja100");
sort($frutas);
foreach ($frutas as $clave => $valor) {

    echo "frutas[" .$clave. "] = " .$valor. "\n";

}
print "<p>Ordenado con banderas</p>";
sort($frutas, SORT_NATURAL | SORT_FLAG_CASE);
foreach ($frutas as $clave => $valor) {

    echo "frutas[" .$clave. "] = " .$valor. "\n";

}

$alumno  = array (

    "nombre"=>"Paco",
    "apellido"=>"Bond",
    "edad"=>"18",
    "promedio"=>6);

    print "<p>El alumno se llama $alumno[nombre], $alumno[apellido]</p>";
    print "<p>Su edad es de ".$alumno["edad"]." años</p>";

    foreach($alumno as $key=>$valor){
        print "<p>El campo $key tiene un valor de $valor</p>";
    }
print "<p>Los campos ordenados son:</p>";
asort($alumno);
 foreach($alumno as $key=>$valor){
        print "<p>El campo $key tiene un valor de $valor</p>";
    }

?>


    
</body>
</html>