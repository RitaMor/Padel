<?php

include("bbdd/BaseDeDatos.php");
include("bbdd/DBMySql.php");
include("clases/Equipo.php");
include("clases/Jugador.php");
include("clases/Partido.php");

if(isset($_POST['alta'])){
    altaEquipo();
}
if(isset($_POST['altaJugador'])){
    altaJugador();
}
if(isset($_POST['altaPartido'])){
    altaPartido();
}
if(isset($_POST['editar'])){
    editarEquipo();
}
if(isset($_POST['editarJugador'])){
    editarJugador();
}

if(isset($_GET['borrar'])){
    borrarEquipo($_GET['borrar']);
}
if(isset($_GET['borrarJugador'])){
    borrarJugador($_GET['borrarJugador']);
}


function conexionBD($consulta){
    $dbLocal = new DBMySql('localhost','padel','1234','padel',3306);
    $valor = $dbLocal->setQuery($consulta);
    return $valor;
}
function menu($numero){
    $class1='';$class2='';$class3='';$class4='';$class5='';
        
        switch($numero){
            case 1:
                $class1='active';
                break;
            case 2:
                $class2='active';
                break;
            case 3:
                $class3='active';
                break;
            case 4:
             $class4='active';
                break;
            case 5:
                $class5='active';
                break;
        }

        $menu = '<li><a href="index.php" class="'.$class1.'">Inicio</a></li>
        <li><a href="alta_Equipo.php" class="'.$class2.'">Alta Equipo</a></li>
        <li><a href="ver_Equipos.php" class="'.$class3.'">Ver Equipos</a></li>
        <li><a href="alta_Jugador.php" class="'.$class4.'">Alta Jugador</a></li>
        <li><a href="ver_Jugadores.php" class="'.$class5.'">Ver Jugadores</a></li>';
        return $menu;
    }
    
    function altaEquipo(){
        $nombre = $_POST['nombre'];
        $categoria = $_POST['categoria']; 
        $nivel = $_POST['nivel'];
        $equipo = new Equipo($nombre,$categoria,$nivel);
        
        conexionBD($equipo->darDeAlta());
        header ('Location:ver_Equipos.php');
      }

      function altaJugador(){
          
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos']; 
        $email = $_POST['email'];
        $tfno = $_POST['tfno'];
        $idEquipo = $_POST['idEquipo'];
        $jugador = new Jugador($nombre,$apellidos,$email,$tfno,$idEquipo);
        
        //Para comprobar que funciona correctamente
        //echo $jugador->toString();
        conexionBD($jugador->darDeAlta());
        header ('Location:ver_Jugadores.php');
      }

      function altaPartido(){
          
        $nombre = $_POST['nombre'];
        $jornada = $_POST['jornada']; 
        $fecha = $_POST['fecha'];
        $partido = new Partido($nombre,$jornada,$fecha);
        
        //Para comprobar que funciona correctamente
        // echo $jugador->toString();
        conexionBD($partido->darDeAlta());
        header ('Location:index.php');
      }
function verEquipos(){
        $consulta = "SELECT * FROM equipos";
        $valor = conexionBD($consulta);

        $resultado ='';
        while($row = mysqli_fetch_assoc($valor)){
            $resultado .= '<h3>Nombre: 
                                <span>'.$row['nombre'].'</span>
                                <a href="editar_Equipo.php?id='.$row['id'] .'"class="editar">
                                    <img src="images/editar.png">
                                </a>
                            </h3>';
            $resultado .= '<h4>Categoria: <span>'.$row['categoria'].'</span></h4>';
            $resultado .= '<h4>Nivel: <span>'.$row['nivel'].'</span></h4>';
        }
        return $resultado;
    }

    function verJugadores(){
        $consulta = "SELECT * FROM jugadores";
        $valor = conexionBD($consulta);

        $resultado ='';
        while($row = mysqli_fetch_assoc($valor)){
            $resultado .= '<h3>Nombre: 
                                <span>'.$row['nombre'].'</span>
                                <a href="editar_Jugadores.php?id='.$row['id'] .'"class="editar">
                                    <img src="images/editar.png">
                                </a>
                            </h3>';
            $resultado .= '<h4>Apellidos: <span>'.$row['apellidos'].'</span></h4>';
            $resultado .= '<h4>Email: <span>'.$row['email'].'</span></h4>';
            $resultado .= '<h4>Tfno: <span>'.$row['tfno'].'</span></h4>';
            $resultado .= '<h4>IdEquipo: <span>'.$row['idEquipo'].'</span></h4>';
        }
        return $resultado;
    }

function cargarEquipo($id){
    $consulta = "SELECT * FROM equipos WHERE id='$id'";
    $valor = conexionBD($consulta);
    // while($row = mysqli_fetch_assoc($valor)){
    //     $nombre = $row['nombre'];
    //     $categoria = $row['categoria']; 
    //     $nivel = $row['nivel'];
        
    // }
    // $resultado = Array($nombre, $categoria, $nivel);
    // return $resultado;
    return mysqli_fetch_assoc($valor);
}

function cargarJugador($id){
    $consulta = "SELECT * FROM jugadores WHERE id='$id'";
    $valor = conexionBD($consulta);
    // while($row = mysqli_fetch_assoc($valor)){
    //     $nombre = $row['nombre'];
    //     $categoria = $row['categoria']; 
    //     $nivel = $row['nivel'];
        
    // }
    // $resultado = Array($nombre, $categoria, $nivel);
    // return $resultado;
    return mysqli_fetch_assoc($valor);
}


function editarEquipo(){
    $id= htmlentities($_POST['id']);
    $nombre = htmlentities($_POST['nombre']);
    $categoria = htmlentities($_POST['categoria']); 
    $nivel = htmlentities($_POST['nivel']);

    $consulta = "UPDATE equipos SET Nombre='$nombre', Categoria='$categoria',
     Nivel='$nivel' WHERE ID='$id'";

    conexionBD($consulta);
    header ('Location:ver_Equipos.php?id='.$id);
}

function editarJugador(){
    $id= htmlentities($_POST['id']);
    $nombre = htmlentities($_POST['nombre']);
    $apellidos = htmlentities($_POST['apellidos']); 
    $email = htmlentities($_POST['email']);
    $tfno = htmlentities($_POST['tfno']);
    $idEquipo = htmlentities($_POST['idEquipo']);
    $consulta = "UPDATE jugadores SET Nombre='$nombre', Apellidos='$apellidos',
     Email='$email', Tfno='$tfno', IdEquipo ='$idEquipo' WHERE ID='$id'";

    conexionBD($consulta);
    header ('Location:ver_Jugadores.php?id='.$id);
}
function borrarEquipo($id){
    $consulta = "DELETE FROM equipos WHERE id='$id'";
    conexionBD($consulta);
    header ('Location:ver_Equipos.php');
}

function borrarJugador($id){
    $consulta = "DELETE FROM jugadores WHERE id='$id'";
    conexionBD($consulta);
    header ('Location:ver_Jugadores.php');
}

function selectEquipos(){
    $consulta = "SELECT * FROM equipos";
    $valor = conexionBD($consulta);
    $n=0;
    $resultado = Array();
    while($row = mysqli_fetch_assoc($valor)){
        $resultado[$n] = $row['nombre'];
        $n++;
   
    }
    return $resultado;
}

function selectJugadores(){
    $consulta = "SELECT * FROM jugadores";
    $valor = conexionBD($consulta);
    $n=0;
    $resultado = Array();
    while($row = mysqli_fetch_assoc($valor)){
        $resultado[$n] = $row['nombre'];
        $n++;
   
    }
    return $resultado;
}

?>