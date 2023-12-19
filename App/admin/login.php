<?php
session_start();


//Abro la conexion con la base de datos
$enlace = mysqli_connect("localhost", "usuarios", "usuarios", "cursoaplicacionesweb");
//Le pido algo a la base de datos
$resultado = mysqli_query($enlace, "
SELECT * FROM usuarios
WHERE
usuario = '".$_POST['usuario']."'
AND
password = '".$_POST['contrasena']."'
LIMIT 1
");

$pasas = false;
$_SESSION['pasas'] = false;

//Devuelvo por pantalla lo que me de
if ($fila = $resultado->fetch_assoc()) {
   // echo $fila['nombre']." ".$fila['apellidos']."<br>";
        $pasas = true;
    $_SESSION['nombre'] = $fila['nombre'];
    $_SESSION['apellidos'] = $fila['apellidos'];


}else{
    //echo "No hay ningun usuario que cumpla con las caracteristicas";
        $pasas = false;
}

//Validamos
if ($pasas) {
    echo "Te voy a dar acceso a la aplicacion";
$_SESSION['pasas'] = true;


    echo '<meta http-equiv="refresh" content="3; url=paneldecontrol.php">';
}else{
    $_SESSION['pasas'] = false;
    echo "No te voy a dar acceso a la aplicacion";
    echo '<meta http-equiv="refresh" content="3; url=index.html">';


}
//Cierro los recursos que haya abierto
mysqli_close($enlace);



?>