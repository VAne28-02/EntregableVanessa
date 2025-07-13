<?php
class Asignacion {
    private $idasignacion;
    private $idproyecto;
    private $idcliente;
    private $fecha_asignacion;
    public function getIdAsignacion() { 
        return $this->idasignacion; 
    }
    public function setIdAsignacion($id) {
         $this->idasignacion = $id; 
    }

    public function getIdProyecto() {
         return $this->idproyecto;
    }
    public function setIdProyecto($id) {
         $this->idproyecto = $id;
    }

    public function getIdCliente() {
         return $this->idcliente;
    }
    public function setIdCliente($id) {
         $this->idcliente = $id;
    }

    public function getFechaAsignacion() { 
        return $this->fecha_asignacion;
    }
    public function setFechaAsignacion($fecha) {
         $this->fecha_asignacion = $fecha;
    }
}
?>