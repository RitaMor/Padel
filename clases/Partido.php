<?php
        
    class Partido{
        private $nombre;
        private $jornada;
        private $fecha;
        
        function __construct($nombre,$jornada,$fecha){
            $this->nombre = $nombre;
            $this->jornada = $jornada;
            $this->fecha = $fecha;
        }
        
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        
        public function getNombre(){
            return $this->nombre;
        }
        
        public function setJornada($jornada){
            $this->jornada = $jornada;
        }
        
        public function getJornada(){
            return $this->jornada;
        }
        
        public function setFecha($fecha){
            $this->fecha = $fecha;
        }
        
        public function getFecha(){
            return $this->fecha;
        }
        
        public function toString(){
            $resultado = 'Nombre: '.$this->nombre;
            $resultado .= '<br/>';
            $resultado .= 'jornada: '.$this->jornada;
            $resultado .= '<br/>';
            $resultado .= 'fecha: '.$this->fecha;
            $resultado .= '<br/>';
            return $resultado;
        }
        public function darDeAlta(){
            $consulta = "INSERT INTO partidos(nombre,jornada,fecha) VALUES 
                        ('".$this->nombre."','".$this->jornada."','".$this->fecha."')";
            return $consulta;
        }
    }
        
?>