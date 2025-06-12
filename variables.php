<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Variables en PHP</title>
</head>
<body>
    <?php
    //Cadena
    $cadena = "<p>Hola mundo</p>";
    $anios12 = 12;
    $nombre = "Diego";
    $apellido = "Torres";
    // Cadenas enteras integer
    $edad = 12;
    $deuda = -150000;
    // Dobles o decimales
    $ingreso = 1000.50;
    // Variables booleanas
    $casado = true;

    print $cadena;
    echo  "<p>$anios12</p>";

    //Concatenacion
    print $nombre." ".$apellido;

    print "<p>El nombre completo es: $nombre $apellido</p>";
    //Secuencias de escape | se pueden ver las comillas o cualquier simbolo por ejemplo un $
    print "<p>El nombre completo es: \"$nombre $apellido\"</p>";    
    //HTML5
    print ("<p>El nombre completo es: $nombre $apellido</p>");
    echo ("<p>Y soy el esposo de Gabriela</p>");
    
    //Variables numericas
    print $edad + $anios12;
    print "<br></br>";
    print $edad - $anios12;
    print "<br></br>";
    print $edad * $anios12;
    print "<br></br>";
    print $edad / $anios12;
    print "<br></br>";
    print $edad % $anios12;
    //Presedencia de operadores
    print "<br></br>";
    print 4 + 5 * 3 ;
    print "<br></br>";
    //Cambiar la presedencia
    print (4 + 5) * 3 ;
    print "<br></br>";

    //Atajos u operadores abreviados
    print $edad = $edad + 5;
    print "<br></br>";
    print $edad += 5;
    print "<br></br>";
    print $edad =- 7;
    print "<br></br>";
    print $edad /= 2;
    print "<br></br>";
    print $edad *= 3;
    print "<br></br>";
    print $edad %= 2;
    print "<br></br>";
    print $edad++;
    print "<br></br>";
    print $edad--;
    print "<br></br>";
    $edad = 10;
    $edad++;
    print $edad;
    print "<br></br>";



    ?>
</body>
</html>