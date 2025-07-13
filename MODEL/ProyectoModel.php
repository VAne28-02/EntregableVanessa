<?php
    require_once './CONFIG/DB.php';
    require_once 'Proyecto.php';
    class ProyectoModel{
        private $db;
        public function __construct(){
            $this->db=DB::conectar();
        }

        public function guardar(Proyecto $proyecto){
            $sql="insert into proyecto (nombre, descripcion, fecha, idcliente) values (:nom, :des, :fec, :idcli)";
            $ps=$this->db->prepare($sql);
            $ps->bindParam(":nom", $proyecto->getNombre());
            $ps->bindParam(":des",$proyecto->getDescripcion()); 
            $ps->bindParam(":fec",$proyecto->getFecha());
            $ps->bindParam(":idcli", $proyecto->getIdCliente());
            $ps->execute();
        }

        public function cargar(){
            $sql="select * from proyecto";
            $ps=$this->db->prepare($sql);
            $ps->execute();
            $filas=$ps->fetchall();
            $proyectos=array();
            foreach($filas as $f){
                $pro=new Proyecto();
                $pro->setIdProyecto($f[0]);
                $pro->setNombre($f[1]);
                $pro->setDescripcion($f[2]);
                $pro->setFecha($f[3]);
                $pro->setIdCliente($f[4]); 
                array_push($proyectos, $pro );
            }
            return $proyectos;
        }

        public function borrar($idpro){
            $sql="delete from proyecto where idproyecto=:idpro";
            $ps=$this->db->prepare($sql);
            $ps->bindParam(':idpro', $idpro);
            $ps->execute();
        }

        public function modificar(Proyecto $proyecto){
            $sql = "UPDATE proyecto 
            SET nombre = :nom, descripcion = :des, fecha = :fec, idcliente = :idcli 
            WHERE idproyecto = :idpro";
            $ps = $this->db->prepare($sql);
            $ps->bindParam(':nom', $proyecto->getNombre());
            $ps->bindParam(':des', $proyecto->getDescripcion());
            $ps->bindParam(':fec', $proyecto->getFecha());
            $ps->bindParam(':idcli', $proyecto->getIdCliente());
            $ps->bindParam(':idpro', $proyecto->getIdProyecto());
            $ps->execute();
        }
    }
?>