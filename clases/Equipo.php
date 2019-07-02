<?php
        
    class Equipo{
        private $nombre;
        private $categoria;
        private $nivel;
        
        function __construct($nombre,$categoria,$nivel){
            $this->nombre = $nombre;
            $this->categoria = $categoria;
            $this->nivel = $nivel;
        }
        
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        
        public function getNombre(){
            return $this->nombre;
        }
        
        public function setCategoria($categoria){
            $this->categoria = $categoria;
        }
        
        public function getCategoria(){
            return $this->categoria;
        }
        
        public function setNivel($nivel){
            $this->nivel = $nivel;
        }
        
        public function getNivel(){
            return $this->nivel;
        }
        
        public function toString(){
            $resultado = 'Nombre: '.$this->nombre;
            $resultado .= '<br/>';
            $resultado .= 'categoria: '.$this->categoria;
            $resultado .= '<br/>';
            $resultado .= 'nivel: '.$this->nivel;
            $resultado .= '<br/>';
            return $resultado;
        }
        public function darDeAlta(){
            $consulta = "INSERT INTO equipos(nombre,categoria,nivel) VALUES 
                        ('".$this->nombre."','".$this->categoria."','".$this->nivel."')";
            return $consulta;
        }
    }
        
?>