<?php
class Proyecto{
        private $idproyecto;
        private $nombre;
        private $descripcion;

        private $fecha;

        private $idcliente;
        
        public function getIdProyecto(){
                return $this->idproyecto;
        }
        public function setIdProyecto($idproyecto){
                $this->idproyecto = $idproyecto;
        }
        
        public function getNombre(){
                return $this->nombre;
        }

        public function setNombre($nombre){
                $this->nombre = $nombre;
        }
        
        public function getDescripcion(){
                return $this->descripcion;
        }

        public function setDescripcion($descripcion){
                $this->descripcion = $descripcion;
        }

        public function getFecha(){ 
                return $this->fecha;
        }

        public function setFecha($fecha){
                $this->fecha = $fecha;
        }

        public function getIdcliente(){ 
                return $this->idcliente; 
        }

        public function setIdcliente($idcliente){
                $this->idcliente = $idcliente; 
        }

        
    }
?>