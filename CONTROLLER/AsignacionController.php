<?php
    require_once './MODEL/AsignacionModel.php';
    require_once './MODEL/ProyectoModel.php';
    require_once './MODEL/ClienteModel.php';

class AsignacionController {
    public function formulario() {
        $proModel = new ProyectoModel();
        $cliModel = new ClienteModel();
        $proyectos = $proModel->cargar();
        $clientes = $cliModel->cargar();

        require './VIEW/viewGuardarAsignacion.php';
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $asig = new Asignacion();
            $asig->setIdProyecto($_POST['cbxProyecto']);
            $asig->setIdCliente($_POST['cbxCliente']);
            $asig->setFechaAsignacion($_POST['txtFecha']);

            $model = new AsignacionModel();
            $model->guardar($asig);

            header('Location: index.php?accion=ver_asignaciones');
        }
    }
    public function ver() {
        $model = new AsignacionModel();
        $asignaciones = $model->cargar();
        require './VIEW/viewVerAsignaciones.php';
    }
}