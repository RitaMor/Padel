<?php

include("funciones.php");
$menu = menu(00);

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$resultado = cargarJugador($id);

$nombre = $resultado['nombre'];
$apellidos = $resultado['apellidos']; 
$email = $resultado['email'];
$tfno = $resultado['tfno'];
$idEquipo = $resultado['idEquipo'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Jugador</title>
    <link rel="stylesheet" href="css.css">
   
</head>
<body>
    <header>
        <h1>
            <img src="images/logo2.png" alt="Logo"/>
        </h1>
        <h2>Editar Jugador</h2> 
    </header>
    <nav>
        <ul>
            <?= $menu ?>
        </ul>
    </nav>
    <form method="post" action="funciones.php">
        <input type="hidden" name="id" value="<?= $id ?>"/>    
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="Nombre" value="<?= $nombre?>"/>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="Apellidos" value="<?= $apellidos?>"/>
        <label for="email">Email</label>
        <input type="text" name="email" id="Email" value="<?= $email?>"/>
        <label for="tfno">Tfno</label>
        <input type="text" name="tfno" id="Tfno" value="<?= $tfno?>"/>
        <label for="idEquipo">IdEquipo</label>
        <input type="text" name="idEquipo" id="IdEquipo" value="<?= $idEquipo?>"/>

        <input type="submit" value="Guardar" name="editarJugador" class="boton_editar"/> 
        <a href="funciones.php?borrarJugador= <?= $id ?>" class="borrarJugador">Eliminar</a> 
        <div class="clearfix"></div>
    </form>

    <article id="jugador">
            <img src="images/jugador.png" alt="jugador"/>
    </article>
</body>
</html>