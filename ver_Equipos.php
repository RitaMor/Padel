<?php

include("funciones.php");
$menu = menu(3);
$resultado = verEquipos();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="css.css">
     <title>Ver Equipos</title>
   
</head>
<body>
    <header>
        <h1>
            <img src="images/logo2.jpg" alt="Logo"/>
            
        </h1>
        <h2>Ver Equipos</h2>
       
    </header>
    <nav>
        <ul>
            <?= $menu ?>
        </ul>
    </nav>
    <section>
        <?= $resultado ?>
    </section>
    <article id="ver_equipos">
        <img src="images/bola.png" alt="bola">
    </article>
    <div class="nuevoequipo">
        <a href="alta_equipo.php">
            <img src="images/nuevoequipo.png" alt="Dar de Alta Equipo">
        </a>
    </div>
</body>
</html>