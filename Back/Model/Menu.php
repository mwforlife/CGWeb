<?php
class Menu{
    private $id;
    private $nombre;
    private $ubicacion;
    private $estado;

    public function Menu($id, $nombre, $ubicacion, $estado){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->ubicacion = $ubicacion;
        $this->estado = $estado;
    }

    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getUbicacion(){
        return $this->ubicacion;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setUbicacion($ubicacion){
        $this->ubicacion = $ubicacion;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }
}