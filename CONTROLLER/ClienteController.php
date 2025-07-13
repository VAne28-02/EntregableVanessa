<?php
    require_once './MODEL/ClienteModel.php';
    class ClienteController{
        public function cargar(){
            $model=new ClienteModel();
            $clientes=$model->cargar ();
            require_once './VIEW/viewCargarClientes.php';
        }
        public function guardar(){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $model=new ClienteModel();
                $cliente=new Cliente();
                $cliente->setNombres($_POST['txtNom']);
                $cliente->setApellidos($_POST['txtApe']);
                $cliente->setDni($_POST['txtDni']);
                $model->guardar($cliente);
                header('Location: index.php');
            }
            else{
                require_once './VIEW/viewGuardarCliente.php';
            }
        }
        public function borrar(){
            if(isset($_GET['idcli'])){
                $model=new ClienteModel();
                $model->borrar($_GET['idcli']);
                header('Location: index.php');
            }
        }
        public function modificar() {
            $model = new ClienteModel();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $cliente = new Cliente();
                $cliente->setIdCliente($_POST['txtId']);
                $cliente->setNombres($_POST['txtNom']);
                $cliente->setApellidos($_POST['txtApe']);
                $cliente->setDni($_POST['txtDni']);
                $model->modificar($cliente);
                header('Location: index.php?accion=cargarclientes');
            } elseif (isset($_GET['idcli'])) {
        $clientes = $model->cargar();
        foreach ($clientes as $cli) {
            if ($cli->getIdCliente() == $_GET['idcli']) {
                $cliente = $cli;
                break;
            }
        }
        require './VIEW/viewModificarCliente.php';
        }
     }
    }
?>