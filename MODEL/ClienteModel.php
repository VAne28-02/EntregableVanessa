<?php  
    require_once './CONFIG/DB.php';
    require_once 'Cliente.php';

    class ClienteModel{
        private $db;
        public function __construct(){
            $this->db=DB::conectar();
        }

        public function guardar(Cliente $cliente){
            $sql="insert into cliente (nombres,apellidos,dni) values (:nom, :ape, :dni)";
            $ps=$this->db->prepare($sql);
            $ps->bindParam(":nom", $cliente->getNombres());
            $ps->bindParam(":ape", $cliente->getApellidos());
            $ps->bindParam(":dni", $cliente->getDni());
            $ps->execute();
        }

        public function cargar(){
            $sql="select * from cliente";
            $ps=$this->db->prepare($sql);
            $ps->execute();
            $filas=$ps->fetchall();
            $clientes=array();
            foreach($filas as $f){
                $cli=new Cliente();
                $cli->setIdCliente($f[0]);
                $cli->setNombres($f[1]);
                $cli->setApellidos($f[2]);
                $cli->setDni($f [3]); 
                array_push($clientes, $cli);
            }
            return $clientes;
        }
        public function borrar($idcli){
            $sql="delete from cliente where idcliente=:idcli";
            $ps=$this->db->prepare($sql);
            $ps->bindParam(':idcli', $idcli);
            $ps->execute();
        }


        public function modificar(Cliente $cliente){
            $sql = 'UPDATE cliente SET nombres = :nom, apellidos = :ape, dni = :dni WHERE idcliente = :idcli';
            $ps = $this->db->prepare($sql); 
            $ps->bindParam(':nom', $cliente->getNombres());
            $ps->bindParam(':ape', $cliente->getApellidos());
            $ps->bindParam(':dni', $cliente->getDni());
            $ps->bindParam(':idcli', $cliente->getIdCliente());
            $ps->execute();

        }
    }
?>