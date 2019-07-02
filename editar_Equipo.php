<?php

include("funciones.php");
$menu = menu(0);

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$resultado = cargarEquipo($id);

$nombre = $resultado['nombre'];
$categoria = $resultado['categoria']; 
$nivel = $resultado['nivel'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Equipo</title>
    <link rel="stylesheet" href="css.css">
   
</head>
<body>
    <header>
        <h1>
            <img src="images/logo2.png" alt="Logo"/>
        </h1>
        <h2>Editar Equipo <?= $id ?> </h2> 
    </header>
    <nav>
        <ul>
            <?= $menu ?>
        </ul>
    </nav>
    <form method="post" action="funciones.php">
        <input type="hidden" name="id" value="<?= $id ?>"/>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="Nombre" value="<?= $nombre ?>"/>
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" id="Categoria" value="<?= $categoria ?>"/>
        <label for="nivel">Nivel</label>
        <input type="text" name="nivel" id="Nivel" value="<?= $nivel ?>"/>
        
        <input type="submit" value="Guardar" name="editar" class="boton_editar"/> 
        <a href="funciones.php?borrar= <?= $id ?>" class="borrar">Eliminar</a>
        <div class="clearfix"></div>
    </form>

    <article id="equipos">
            <img src="images/bola.png" alt="bola"/>
    </article>
</body>
</html>