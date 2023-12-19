<?php

//Abro la conexion con la base de datos
$enlace = mysqli_connect("localhost", "usuarios", "usuarios", "cursoaplicacionesweb");
//Le pido algo a la base de datos
$resultado = mysqli_query($enlace, "

INSERT INTO usuarios
VALUES(
    NULL,
    '".$_POST['usuario']."',
    '".$_POST['password']."',
    '".$_POST['nombre']."',
    '".$_POST['apellidos']."',
    '".$_POST['email']."',
    '".$_POST['direccion']."',
    '".$_POST['telefono']."')

");

//Cierro los recursos que haya abierto
mysqli_close($enlace);

echo"el registro se ha metido en la base de datos";

?>