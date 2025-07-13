<?php
class Cliente{
        private $idcliente;
        private $nombres;
        private $apellidos;
        private $dni;        
        public function getIdCliente(){
                return $this->idcliente;
        }
        public function setIdCliente($idcliente){
                $this->idcliente = $idcliente;
        }
        
        public function getNombres(){
                return $this->nombres;
        }

        public function setNombres($nombres){
                $this->nombres = $nombres;
        }
        
        public function getApellidos(){
                return $this->apellidos;
        }

        public function setApellidos($apellidos){
                $this->apellidos = $apellidos;
        }

        public function getDni(){
                return $this->dni; 
        }
         
        public function setDni($dni){ 
                $this->dni = $dni; 
         }
}
?>