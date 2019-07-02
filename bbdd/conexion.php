<?php

include("BaseDeDatos.php");
include("DBMySql.php");
// include("DBMsSql,php");

//$prueba = new BaseDeDatos('localhost','padel','1234','padel','3306','mysql');

//$prueba->verConfiguracion();

// echo'<pre>';
// print_r($prueba);
// echo'</pre>';

$dbLocal = new DBMySql('localhost','padel','1234','padel',3306);
$dbLocal->setQuery('SELECT * FROM equipos');
$dbLocal->verConfiguracion();
echo '<pre>';
print_r($dbLocal->queryToArray());
echo '</pre>';

?>