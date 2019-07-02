<?php

include("funciones.php");
$menu = menu(1);

//SELECT EQUIPOS
$resultadoEquipos = selectEquipos();
$longitudEquipos = count($resultadoEquipos);
$select_equipos = '<select name ="equipo" id="equipos" class="especial">';
for ($n=0; $n<$longitudEquipos; $n++) { 
    $select_equipos .='<option value="'.$resultadoEquipos[$n].'">'.
    $resultadoEquipos[$n].'</option>';
}
$select_equipos .='</select>';

//SELECT JUGADORES
$resultadoJugadores = selectJugadores();
$longitudJugadores = count($resultadoJugadores);
$select_jugadores = '<select name ="jugador" id="jugadores" class="especial">';
for ($n=0; $n<$longitudJugadores; $n++) { 
    $select_jugadores .='<option value="'.$resultadoJugadores[$n].'">'.
    $resultadoJugadores[$n].'</option>';
}
$select_jugadores .='</select>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alta partido</title>
    <link rel="stylesheet" href="css.css">
   
</head>
<body>
    <header>
        
        <h1>
            <img src="images/logo2.jpg" alt="Logo"/>
        </h1>
        <h2>Alta Partido</h2> 
    </header>
    <nav>
        <ul>
            <?= $menu ?>
        </ul>
    </nav>
    <form method="post" action="funciones.php">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="Nombre"/>
        <label for="jornada">Jornada</label>
        <input type="text" name="jornada" id="jornada"/>
        <label for="equipos">Equipos</label>
        <?= $select_equipos ?>
        <label for="Jugadores">Jugadores</label>
        <?= $select_jugadores ?>
        <label for="fecha">Fecha</label>
        <input type="text" name="fecha" id="fecha"/>
        <input type="submit" value="Dar de Alta" name="altaPartido"/> 
        <div class="clearfix"></div>
    </form>

   
</body>
</html>