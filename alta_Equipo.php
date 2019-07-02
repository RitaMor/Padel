<?php

include("funciones.php");
$menu = menu(2);
$resultado = verEquipos();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alta Equipo</title>
    <link rel="stylesheet" href="css.css">
   
</head>
<body>
    <header>
        <h1>
            <img src="images/logo2.jpg" alt="Logo"/>
        </h1>
        <h2>Alta Equipo</h2> 
    </header>
    <nav>
        <ul>
            <?= $menu ?>
        </ul>
    </nav>
    <form method="post" action="funciones.php">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="Nombre"/>
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" id="Categoria"/>
        <label for="nivel">Nivel</label>
        <input type="text" name="nivel" id="Nivel"/>
        <input type="submit" value="Dar de Alta" name="alta"/> 
        <div class="clearfix"></div>
    </form>

    <article id="equipo">
            <img src="images/bola.png" alt="bola"/>
    </article>
</body>
</html>