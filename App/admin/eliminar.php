<?php
    $enlace = mysqli_connect("localhost", "usuarios", "usuarios", "cursoaplicacionesweb");
    $resultado = mysqli_query($enlace, " DELETE FROM usuarios WHERE Identificador = ".$_GET['id']."");
    echo '<meta http-equiv="refresh"content="5; url=paneldecontrol.php">';


    

    ?>