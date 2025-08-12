<?php

$error = $_GET["paginaError"];
$bandera = false;
if($error==""){
    $bandera = true;
}

$nombre = $_GET["nombre"];
if($nombre==""){
    $bandera = true;
}
$clave = $_GET["clave"];
if($clave==""){
    $bandera = true;
}

$direccion = $_GET["direccion"];
if($direccion==""){
    $direccion = 'Conocida';
}
$nacionalidad = $_GET["nacionalidad"];
$estado = $_GET["estado"];
    
//Valores multiples
if(isset ($_GET["pasatiempos"])==false){
    $bandera = true;
}
if(isset($_GET["idiomas"])==false){
    $bandera = true;
}
//Validamos si existio un error
if($bandera==false){
	header('location: correcto.php');
	exit;
}else{
header('location: error_forma.php');
	exit;	
}
?>