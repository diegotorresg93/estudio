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
    
    
    //Ciclo for
    $numElementos = 10;
    for ($i = 0; $i<$numElementos; $i+=2)/*$i+=2 en vez de $i++ para aumentar de 2 en 2*/ {
    print "<p>El valor del indice es $i</p>";


    }
print "<p>Fin del ciclo, el valor de i es de $i</p>";

     //Ejemplo del comando break
     $elemento = 10;
     for ($a=0; $a<$elemento; $a++){
     if($a == 7){
         print "<p>Con el siete, termino el ciclo</p>";
         break;

    }
print "<p>El indice es $a</p>";


     }
print "Fin del ciclo";

//Ejemplo del comando continue
     $elemento = 10;
     for ($a=0; $a<$elemento; $a++){
     if($a%2 == 1){
         continue;

    }
print "<p>El indice es $a</p>";


     }
print "Fin del ciclo";


    ?>
</body>
</html>