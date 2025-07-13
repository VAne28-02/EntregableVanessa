<?php
    require_once './MODEL/ProyectoModel.php';
    require_once './MODEL/ClienteModel.php';
    class ProyectoController{
        public function cargar(){
            $model=new ProyectoModel();
            $proyectos=$model->cargar();
            $model=new ClienteModel(); 
            $clientes=new ClienteModel(); 
            require_once './VIEW/viewCargarProyectos.php';
        }

        public function guardar(){
            $model=new ClienteModel();
            $clientes=$model->cargar();
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $model=new ProyectoModel();
                $proyecto=new Proyecto();
                $proyecto->setNombre($_POST['txtNom']);
                $proyecto->setDescripcion($_POST['txtDes']); 
                $proyecto->setFecha(date('Y-m-d'));
                $proyecto->setIdcliente($_POST['cbxIdCli']);
                $model->guardar($proyecto);
                header('Location: index.php?accion=cargarproyectos');
            }
            else{
                require_once './VIEW/viewGuardarProyecto.php';
            }

        }

        public function borrar(){
            if(isset($_GET['idpro'])){
                $model=new ProyectoModel();
                $model->borrar($_GET['idpro']);
                header('Location: index.php?accion=cargarproyectos');
            }
        }
        public function modificar(){
            $modelProyecto = new ProyectoModel();
            $modelCliente = new ClienteModel();
            $clientes = $modelCliente->cargar(); 
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $proyecto = new Proyecto();
                $proyecto->setIdProyecto($_POST['txtId']);
                $proyecto->setNombre($_POST['txtNom']);
                $proyecto->setDescripcion($_POST['txtDes']);
                $proyecto->setFecha($_POST['txtfecha']);
                $proyecto->setIdCliente($_POST['cbxIdCli']);
                $modelProyecto->modificar($proyecto);
                header('Location: index.php?accion=cargarproyectos');
            } else if (isset($_GET['idpro'])) {
                $id = $_GET['idpro'];
                $proyectos = $modelProyecto->cargar();
                foreach ($proyectos as $p) {
                    if ($p->getIdProyecto() == $id) {
                        $proyecto = $p;
                        break;
                    }
                }
                require './VIEW/viewModificarProyecto.php';
            }
      }     
    }
?>