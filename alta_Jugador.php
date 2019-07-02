<?php

include("funciones.php");
$menu = menu(4);
$resultado = verEquipos();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alta Jugador</title>
    <link rel="stylesheet" href="css.css">
   
</head>
<body>
    <header>
        <h1>
            <img src="images/logo2.jpg" alt="Logo"/>
        </h1>
        <h2>Alta Jugador</h2> 
    </header>
    <nav>
        <ul>
            <?= $menu ?>
        </ul>
    </nav>
    <form method="post" action="funciones.php">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="Nombre"/>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="Apellidos"/>
        <label for="email">Email</label>
        <input type="text" name="email" id="email"/>
        <label for="tfno">Tfno</label>
        <input type="text" name="tfno" id="Tfno"/>
        <label for="idEquipo">IdEquipo</label>
        <input type="text" name="idEquipo" id="IdEquipo"/>
        <input type="submit" value="Dar de Alta" name="altaJugador"/> 
        <div class="clearfix"></div>
    </form>

    <article id="jugador">
            <img src="images/jugador.png" alt="jugador"/>
    </article>
</body>
</html>