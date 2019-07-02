<?php

class DBMySql extends BaseDeDatos{

    protected $conexion; 
    public function __construct($servidor,$usuario,$password,$db,$puerto=3306){
        parent::__construct($servidor,$usuario,$password,$db,$puerto,'mysql');
            $this->conexion = mysqli_connect($this->servidor.':'.$this->puerto,$this->usuario,$this->password);
                mysqli_select_db($this->conexion,$this->db);
    }

    //Funcion que hace la consulta
    public function setQuery($query){
        // $query = mysqli_real_escape_string($this->conexion,$query);
        return $this->idConsulta =mysqli_query($this->conexion,$query);
    }

    //Funcion que nos devuelve la consulta en un array
    public function queryToArray(){
        return mysqli_fetch_assoc($this->idConsulta);
    }

    public function __destruct(){
        mysqli_close($this->conexion);
    }

    // funcion que nos muestra la configuraacion, Está comentada porque no ha hecho falta:
    public function verConfiguracion(){
        parent::verConfiguracion();
    }

    public function consulta($consulta){
        //Comentada porque no se necesita:
        // $this->conexion('localhost','guagua','1234','guaguas',3306);
        $this->setQuery($consulta);
    }




    
}

?>