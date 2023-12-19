<?php
    //Estructuras de control en bucle
    for ($i = 0; $i < 30; $i++) {
        echo "Que sepas que hoy es el dia ".$i." del mes <br>" ;   
    }  
    
    //sleep(5);

    $dia = 1;
    while($dia < 30){
        echo"Hoy es el dia".$dia."del mes <br>";
        $dia++;
    }

    $dia = 44;
    do{echo "hola";}while($dia < 30); 

    

?>