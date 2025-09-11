<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
	<?php
	//Numero de segundos transcurridos desde el 1 de enero de 1970
/*	$t = time();
	print "<p> $t </p>";
	$fecha = date("d/m/Y",$t);
	print "<p> $fecha </p>";
	$hora = date("H:i:s",$t);
	print "<p>La hora es:  $hora </p>";
	//
	$diaSemana = date("l",$t);
	$diaMes = date("j",$t);
	$mes = date("F",$t);
	$anio = date("Y",$t);
	$ampm = date("A",$t);
	$min = date("i",$t);
	$m = "Hoy es $diaSemana del mes $mes a $diaMes del año $anio y son las $hora y $min minutos";
	print "<p> $m </p>";
	*/
	
	/*$aMeses = array("void","Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
	$aDias = array("void", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
	//
	$fecha = getdate();
	//
	$dia = $aDias[$fecha["wday"]];
	$mes = $aMeses[$fecha["mon"]];
	//
	$m = "Hoy es $dia ".$fecha["mday"]." de ".$mes." de ".$fecha["year"]." y son las ".$fecha["hours"]." con ".$fecha["minutes"]." minutos";
	print "<p> $m </p>";*/
	
	/*$cumple = mktime(0,0,0,5,14,93);
	$hoy = time();
	$edad = $hoy - $cumple;
	
	print "<p>Tu naciste un ".date("l",$cumple)."</p>";
	print "<p>Has vivido aproximadamente ".($edad/60/60/24)." dias</p>";
	print "<p>Tu edad es aproximadamente de ".($edad/60/60/24/365)." años</p>";
	*/

//Ejemplo de checkdate
$fecha = "27/10/99";

//Arreglo con la fecha
$aFecha = explode("/", $fecha);

if(count($aFecha) != 3){
	header("location: error_forma.php");
	exit;
}

foreach($aFecha as $valor){
	$valor = intval($valor);
	if($valor<1){
		header("location: error_forma.php");
	exit;
	}
}

if(checkdate($aFecha[1], $aFecha[0], $aFecha[2])==false){
      header("location: error_forma.php");
	exit;
}

print "<p>La fecha $fecha es correcta</p>";
	?>
</body>
</html>