<html>
    <head>
    <script src="https://kit.fontawesome.com/cc84fcc5bf.js" crossorigin="anonymous"></script>
    <style>
        body,html{
            background: white;
            font-family:sans-serif;
            padding:0px;
            margin:0px;
        }
        header{
            background: black;
            color: white;
            padding: 10px;
            width:100%;
            height:20px;
        }
        header a{
            color:inherit;
            text-decoration: none;
        }
        table tr:nth-child(odd){
            background:rgb(220,220,220);
            padding:5px;
        }
        table tr td{
            padding:5px;
        }
    </style>
    </head>
    <body></body>
</html>

<?php
session_start();
    if (!isset($_SESSION['pasas']) ||  $_SESSION['pasas'] == false){
        die("Te has intentado colar en el panel de control sin permiso");
    }
    echo"bienvenido, ".$_SESSION['nombre']." ".$_SESSION['apellidos']." - " ;
    echo "<a href='logout.php'>Cerrar sesion</a><br>"
?>


<h1>Gestion de usuarios</h1>

<table cellpadding=0 cellspace = 0>
<tr>
    <th>Usuario</th>
    <th>contraseña</th>
    <th>nombre</th>
    <th>apellidos</th>
</tr>
    <?php
    $enlace = mysqli_connect("localhost", "usuarios", "usuarios", "cursoaplicacionesweb");
    $resultado = mysqli_query($enlace, " SELECT * FROM usuarios
    ");

    while ($fila = $resultado->fetch_assoc()) {
        echo '<tr>
            <td>'.$fila['usuario'].'</td>
            <td>'.$fila['password'].'</td>
            <td>'.$fila['nombre'].'</td>
            <td>'.$fila['apellidos'].'</td>
            <td><a href=""><i class="fa fa-eye" aria-hidden="true"></i></td>
            <td><a href=""><i class="fa fa-refresh" aria-hidden="true"></i></td>
            <td><a href="eliminar.php?id='.$fila['Identificador'].'"><i class="fa fa-trash" aria-hidden="true"></i></td>


            </tr>';
    }

    ?>
    <tr>
    <form action="insertar.php" method="post">
        <td><input type="text" name="usuario" placeholder="usuario"></td>
        <td><input type="text" name="password" placeholder="password"></td>
        <td><input type="text" name="nombre" placeholder="nombre"></td>
        <td><input type="text" name="apellidos" placeholder="apellidos"></td>
        <td><input type="submit" value="Enviar"></td>

    </form>
    </tr>
</table>