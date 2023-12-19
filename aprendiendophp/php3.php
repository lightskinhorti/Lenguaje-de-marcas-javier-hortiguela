<?php
    
    $o1 = 4;
    $o2 = 3;
    $o3 = "3";    
    
    echo"la suma de los operadores es ".($o1+$o2)."<br>";
    echo"la resta de los operadores es ".($o1-$o2)."<br>";
    echo"la multiplicacion de los operadores es ".($o1*$o2)."<br>";
    echo"la division de los operadores es ".($o1/$o2)."<br>";
    echo"la suma de los operadores es ".($o1%$o2)."<br>";

    echo "Es cierto que los dos operandos son iguales? ".($o1==$o2)."<br>";
    echo "Es cierto que los dos operandos son exactamente iguales? ".($o2===$o3)."<br>";
    echo "Es cierto que los dos operandos NO son iguales? ".($o1!=$o2)."<br>";

    $dia = "miercoles";
    $mes = "agosto";

    echo "Es cierto que las dos son ciertas ".($dia == "miercoles" && $mes == "agosto")."<br>";
    echo "Es cierto que las dos son ciertas ".($dia == "miercoles" && $mes == "octubre")."<br>";
    echo "Es cierto que alguna de las dos son ciertas ".($dia == "miercoles" || $mes == "agosto")."<br>";
    echo "Es cierto que las dos son ciertas ".($dia == "martes" || $mes == "octubre")."<br>";
    

?>