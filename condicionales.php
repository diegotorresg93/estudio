<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales en PHP</title>
</head>
<body>
   <?php
//Mayor que >
//Menor que <
//Menor o igual <=
//Mayor o igual >=
//Igualdad ==
$edad = "18";
if ($edad == 18) {
print "<p>Tienes dieciocho años</p>";

}
//Igualdad extricta ===
$edad = "18";
if ($edad === 18) {
print "Tienes dieciocho años";

}else{
   print "<p>Posiblemente tienes dieciocho, pero debe ser valor numérico</p>";
}

//Diferencia
$edad = "18";
if ($edad != 18) {
print "No T
tienes dieciocho años";

}else{
   print "<p>Si tienes 18 años, pasa por tu credencial para votar.</p>";
}


   
   ?> 
</body>
</html>