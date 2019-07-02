<?php

include("funciones.php");
$menu = menu(5);
$resultado = verJugadores();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="css.css">
     <title>Ver Jugadores</title>
   
</head>
<body>
    <header>
        <h1>
            <img src="images/logo2.jpg" alt="Logo"/>
        </h1>
        <h2>Ver Jugadores</h2>
       
    </header>
    <nav>
        <ul>
            <?= $menu ?>
        </ul>
    </nav>
    <section>
        <?= $resultado ?>
    </section>
    <article id="ver_jugadores">
        <img src="images/jugador.png" alt="jugador">
    </article>
    <div class="nuevojugador">
        <a href="alta_jugador.php">
            <img src="images/nuevojugador.png" alt="Dar de Alta Jugador">
        </a>
    </div>
</body>
</html>