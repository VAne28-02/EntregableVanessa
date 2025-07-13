<?php
require_once './CONFIG/DB.php';
require_once 'Asignacion.php';

class AsignacionModel {
    private $db;

    public function __construct() {
        $this->db = DB::conectar();
    }

    public function guardar(Asignacion $a) {
        $sql = "INSERT INTO asignacion (idproyecto, idcliente, fecha_asignacion)
                VALUES (:idpro, :idcli, :fecha)";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(':idpro', $a->getIdProyecto());
        $ps->bindParam(':idcli', $a->getIdCliente());
        $ps->bindParam(':fecha', $a->getFechaAsignacion());
        $ps->execute();
    }

    public function cargar() {
        $sql = "SELECT * FROM asignacion";
        $ps = $this->db->prepare($sql);
        $ps->execute();
        return $ps->fetchAll(PDO::FETCH_ASSOC);
    }
}