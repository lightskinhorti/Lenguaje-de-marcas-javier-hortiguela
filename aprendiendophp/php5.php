<?php


 $edad = 32;
if ($edad < 30) {
    echo"eres una persona joven<br>";
} else {
    echo "ya no eres una persona joven<br>";
}

$dia = "ss";
switch ($dia) {
        case "lunes":echo"hoy es el peor dia de la semana";break;
        case "martes":echo"hoy es el segundo peor dia de la semana";break;
        case "miercoles":echo"hoy es el medio de la semana";break;
        case "jueves":echo"Ya casi es viernes!!";break;
        case "viernes":echo"Por fin es viernes!!";break;
        case "sabado":echo"hoy es el mejor dia de la semana";break;
        case "domingo":echo"Que horrible que mañana sea lunes";break;
        default: echo"Lo que has escrito no es un dia de la semana";
}




?>