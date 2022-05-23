<?php
require 'Back/Model/Menu.php';
require 'Back/Model/SubMenu.php';
require 'Back/Model/Admision.php';

class Controller{
    private $mi;

    private function conexion(){
        
        $this->mi = new mysqli("localhost", "root", "", "CG");
        if ($this->mi->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $this->mi->connect_errno . ") " . $this->mi->connect_error;
        }

    }
    
    private function desconexion(){
        $this->mi->close();
    }

    public function Menu(){
        $this->conexion();
        $sql = "SELECT * FROM menu where id_est=1";
        $resultado = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($resultado)) {
            $id = $rs['id_men'];
            $nombre = $rs['nombre'];
            $ubicacion = $rs['ubicacion'];
            $estado = $rs['id_est'];
            $m = new Menu($id, $nombre, $ubicacion, $estado);
            $lista[] = $m;
        }
        $this->desconexion();
        return $lista;
    }

    public function SubMenu(){
        $this->conexion();
        $sql = "SELECT * FROM submenu where id_est=1";
        $resultado = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($resultado)) {
            $id = $rs['id_sub'];
            $nombre = $rs['nombre'];
            $menu = $rs['id_men'];
            $ubicacion = $rs['ubicacion'];
            $tipo = $rs['id_tip'];
            $estado = $rs['id_est'];
            $m = new SubMenu($id, $nombre,$menu, $ubicacion, $tipo, $estado);
            $lista[] = $m;
        }
        $this->desconexion();
        return $lista;
    }

    public function Admision(){
        $this->conexion();
        $sql = "SELECT * FROM admision order by id_ad desc";
        $resultado = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($resultado)) {
            $id = $rs['id_ad'];
            $fecha_inicio = $rs['fecha_inicio'];
            $fecha_termino = $rs['fecha_termino'];
            $periodo = $rs['periodo'];
            $estado = $rs['id_est'];
            $m = new Admision($id, $fecha_inicio,$fecha_termino,$periodo, $estado);
            $lista[] = $m;
        }
        $this->desconexion();
        return $lista;
    }

}