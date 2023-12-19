<?php
session_start();



$enlace = mysqli_connect("localhost", "usuarios", "usuarios", "cursoaplicacionesweb");

$resultado = mysqli_query($enlace, "
INSERT INTO
usuarios
VALUES
(NULL,
'".$_POST['usuario']."',
'".$_POST['password']."',
'".$_POST['nombre']."',
'".$_POST['apellidos']."',
'',
'',
'')
");
echo '<meta http-equiv="refresh"content="5; url=paneldecontrol.php">';


?>