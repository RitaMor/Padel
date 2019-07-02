<?php

class DBMsSql extends BaseDeDatos{

    protected $conexion; 
    public function __construct($servidor,$usuario,$password,$db,$puerto=3306){
        parent::__construct($servidor,$usuario,$password,$db,$puerto,'mysql');
            $this->conexion = mysqli_connect($this->servidor.':'.$this->puerto,$this->usuario,$this->password);
                mssqli_select_db($this->db);
    }

    public function setQuery($query){
        $query = mssqli_real_escape_string($query);
        return $this->idConsulta =mssqli_query($query);
    }

    public function queryToArray(){
        return mssqli_fetch_assoc($this->idConsulta);
    }

    public function __destruct(){
        mssqli_close($this->conexion);
    }

    public function verCofiguracion(){
        parent::verConfiguracion();
    }

    public function consulta($consulta){
        $this->conexion('localhost','guagua','1234','guaguas'.3306);
        $this->setQuery($consulta);
    }


    
}

?>