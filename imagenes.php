<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Imagenes de los Dioses griegos</title>
</head>
<?php
	
	$dios = $_GET["dios"];
	$path = "imagenes/";
	$dioses = array("","afrodita","atenea","hades","poseidon","zeuz");
	$archivo = $path.$dioses[$dios].".jpg";
	?>
	<img src="<?php print $archivo; ?>" /><p><?php print $dioses[$dios];?></p>
<body>
</body>
</html>