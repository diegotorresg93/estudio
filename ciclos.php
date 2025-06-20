<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos</title>
</head>
<body>
    <?php
    
    //Ciclo while
    $contador = 0;
    while ($contador<10){
        print "<p>El valor del contador es $contador</p>";
        $contador++;

    }
    print "<p>Fin del ciclo, el valor del contador es $contador</p>";
    
    //Ciclo do while
    $numero = 120;
    $binario = "";
    do {

        $d = $numero % 2;
        $binario = $d.$binario;
        //Calcular nuevo valor de numero
        $numero = intval ($numero /2);


    }while($numero >= 2);
    $binario = $numero.$binario;
    print "<p>El numero binario es $binario</p>";
    
    
    ?>
</body>
</html>