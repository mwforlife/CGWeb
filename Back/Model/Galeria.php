<?php
class Galeria{
    private $id;
    private $nombre;
    private $ubicacion;
    private $tipo;
    private $fecha;
    
    public function __construct($id, $nombre, $ubicacion, $tipo, $fecha){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->ubicacion = $ubicacion;
        $this->tipo = $tipo;
        $this->fecha = $fecha;
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
    
    public function getTipo(){
        return $this->tipo;
    }
    
    public function getFecha(){
        return $this->fecha;
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

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }
}