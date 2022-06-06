<?php
require '../../Model/Menu.php';
require '../../Model/SubMenu.php';
require '../../Model/Admision.php';
require '../../Model/TipoPersonal.php';

class Controller{
    private $mi;

    private function conexion(){
        
        $this->mi = new mysqli("localhost", "colegi38_informatica", "informatica2022", "colegi38_colegio");
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

    public function listartipoPersonal(){
        $this->conexion();
        $sql = "SELECT * FROM tipoPersonal order by nombre asc";
        $resultado = $this->mi->query($sql);
        $lista = array();
        while ($rs = mysqli_fetch_array($resultado)) {
            $id = $rs['id_tip'];
            $nombre = $rs['nombre'];
            $m = new TipoPersonal($id, $nombre);
            $lista[] = $m;
        }
        $this->desconexion();
        return $lista;
    }

    public function registraPersonal($nombre, $apellido, $correo, $telefono, $grupo, $cargo, $foto){
        $this->conexion();
        $sql = "INSERT INTO personal values (null, '$nombre', '$apellido', '$correo', '$telefono', '$grupo', '$cargo', '$foto', now())";
        $resultado = $this->mi->query($sql);
        $this->desconexion();
        return json_encode($resultado);
    }

    public function InsertGalery($titulo,$tipo,$valor){
        $this->conexion();
        $sql = "INSERT INTO galeria values (null, '$titulo', '$valor',$tipo, now())";
        $resultado = $this->mi->query($sql);
        $this->desconexion();
        return json_encode($resultado);
    }

    public function registraDocumentos($titulo, $menu, $Ubicacion, $tipo, $estado){
        $this->conexion();
        $sql = "insert into submenu values (null, '$titulo', '$menu', '$Ubicacion', '$tipo', '$estado')";
        $resultado = $this->mi->query($sql);
        $this->desconexion();
        return json_encode($resultado);
    }

    public function registraReglamento($titulo, $menu, $Ubicacion, $tipo, $estado){
        $this->conexion();
        $sql = "insert into submenu values (null, '$titulo', '$menu', '$Ubicacion', '$tipo', '$estado')";
        $resultado = $this->mi->query($sql);
        $this->desconexion();
        return json_encode($resultado);
    }
}