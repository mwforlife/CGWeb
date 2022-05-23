<?php
class Admision{
    
    private $id, $fechainicio, $fechafin, $periodo, $estado;

    public function Admision($id, $fechainicio, $fechafin, $periodo, $estado){
        $this->id = $id;
        $this->fechainicio = $fechainicio;
        $this->fechafin = $fechafin;
        $this->periodo = $periodo;
        $this->estado = $estado;
    }

    public function getId(){
        return $this->id;
    }

    public function getFechainicio(){
        return $this->fechainicio;
    }

    public function getFechafin(){
        return $this->fechafin;
    }

    public function getPeriodo(){
        return $this->periodo;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setFechainicio($fechainicio){
        $this->fechainicio = $fechainicio;
    }

    public function setFechafin($fechafin){
        $this->fechafin = $fechafin;
    }

    public function setPeriodo($periodo){
        $this->periodo = $periodo;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }


}