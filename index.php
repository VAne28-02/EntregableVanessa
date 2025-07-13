<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
    exit();
}
require_once './CONTROLLER/ClienteController.php';
require_once './CONTROLLER/ProyectoController.php';
require_once './CONTROLLER/AsignacionController.php';



$accion = isset($_GET['accion']) ? $_GET['accion'] : 'cargarclientes';

switch ($accion) {
    case 'guardarcliente':
        $controller = new ClienteController();
        $controller->guardar();
        break;

    case 'cargarclientes':
        $controller = new ClienteController();
        $controller->cargar();
        break;

    case 'borrarcliente':
        $controller = new ClienteController();
        $controller->borrar();
        break;

    case 'modificarcliente':
        $controller = new ClienteController();
        $controller->modificar();
        break;

    case 'guardarproyecto':
        $controller = new ProyectoController();
        $controller->guardar();
        break;

    case 'cargarproyectos':
        $controller = new ProyectoController();
        $controller->cargar();
        break;

    case 'borrarproyecto':
        $controller = new ProyectoController();
        $controller->borrar();
        break;

    case 'modificarproyecto':
        $controller = new ProyectoController();
        $controller->modificar();
        break;

    case 'form_asignacion':
         $controller = new AsignacionController();
         $controller->formulario();
        break;

    case 'guardar_asignacion':
        $controller = new AsignacionController();
        $controller->guardar();
        break;

    case 'ver_asignaciones':
        $controller = new AsignacionController();
        $controller->ver();
        break;
    default:
        $controller = new ClienteController();
        $controller->cargar();
        break;

    }
?>