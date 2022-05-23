<?php
class SubMenu{
    private $id;
    private $nombre;
    private $menu;
    private $ubicacion;
    private $tipo;
    private $estado;

    public function SubMenu($id, $nombre, $menu, $ubicacion,$tipo, $estado){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->menu = $menu;
        $this->ubicacion = $ubicacion;
        $this->tipo = $tipo;
        $this->estado = $estado;
    }


    public function getId(){
        return $this->id;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getMenu(){
        return $this->menu;
    }

    public function getUbicacion(){
        return $this->ubicacion;
    }

    public function getTipo(){
        return $this->tipo;
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

    public function setMenu($menu){
        $this->menu = $menu;
    }

    public function setUbicacion($ubicacion){
        $this->ubicacion = $ubicacion;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }
}