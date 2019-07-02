<?php
        
    class Jugador{
        private $nombre;
        private $apellidos;
        private $email;
        private $tfno;
        private $idEquipo;
        
        function __construct($nombre,$apellidos,$email,$tfno,$idEquipo){
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->email = $email;
            $this->tfno = $tfno;
            $this->idEquipo = $idEquipo;
            
        }
        
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        
        public function getNombre(){
            return $this->nombre;
        }
        
        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }
        
        public function getApellidos(){
            return $this->apellidos;
        }
        
        public function setEmail($email){
            $this->email = $email;
        }
        
        public function getEmail(){
            return $this->email;
        }

        public function setTfno($tfno){
            $this->tfno = $tfno;
        }
        
        public function getTfno(){
            return $this->tfno;
        }
        

        public function setIdEquipo($idEquipo){
            $this->idEquipo = $emidEquipoail;
        }
        
        public function getIdEquipo(){
            return $this->idEquipo;
        }
        
        
        public function toString(){
            $resultado = 'Nombre: '.$this->nombre;
            $resultado .= '<br/>';
            $resultado .= 'Apellidos: '.$this->apellidos;
            $resultado .= '<br/>';
            $resultado .= 'Email: '.$this->email;
            $resultado .= '<br/>';
            $resultado .= 'Tfno: '.$this->tfno;
            $resultado .= '<br/>';
            $resultado .= 'IdEquipo: '.$this->idEquipo;
            $resultado .= '<br/>';
            return $resultado;
        }
        public function darDeAlta(){
            $consulta = "INSERT INTO jugadores(nombre,apellidos,email,tfno,idEquipo) VALUES 
                        ('".$this->nombre."','".$this->apellidos."','".$this->email."','".$this->tfno."','".$this->idEquipo."')";
            return $consulta;
        }
    }
        
?>