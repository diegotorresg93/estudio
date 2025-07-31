<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valida</title>
</head>
<body>
<?php

$error = $_GET["paginaError"];
if($error==""){
    print "<p>Error: no recibi la variable secreta</p>";
}else {
    print "<p>Recibi correctamente la variable secreta</p>";
}

$nombre = $_GET["nombre"];
if($nombre==""){
    print "<p>Error: no escribiste tu nombre</p>";
}else {
    print "<p>Bienvenido, $nombre, a nuestra página</p>";
}
$clave = $_GET["clave"];
if($clave==""){
    print "<p>Error: no escribiste tu clave</p>";
}else {
    print "<p>La clave es: $clave</p>";
}
$direccion = $_GET["direccion"];
if($direccion==""){
    print "<p>Error: no escribiste tu dirección</p>";
}else {
    print "<p>Su dirección es: $direccion</p>";
}
$nacionalidad = $_GET["nacionalidad"];
$estado = $_GET["estado"];
    print "<p>Su nacionalidad es: $nacionalidad</p>";
    print "<p>Su estado civil es: $estado</p>";
//Valores multiples
if(isset ($_GET["pasatiempos"])){
    $pasatiempos = $_GET["pasatiempos"];
    $numPasatiempos = count($pasatiempos);
print "<p>El numero de pasatiempos que tienes es: $numPasatiempos</p>";
print "<ol>";
foreach($pasatiempos as $pasatiempo){
    print "<li>$pasatiempo</li>";
}
print "</ol>";
}else {

    print "<p>Error: Necesitamos que nos indiques al menos uno de tus pasatiempos<p/>";
}
if(isset($_GET["idiomas"])){
    $idiomas = $_GET["idiomas"];
    //
    $numIdiomas = count($idiomas);
    print "<p>El numero de idiomas que hablas es: $numIdiomas</p>";
    print "<ol>";
    foreach($idiomas as $idioma){
        print "<li>$idioma</li>";
    }
    print "</ol>";
}else{
    print "<p>¿Acaso no hablas ningun idioma?</p>";
}
?>    
</body>
</html>