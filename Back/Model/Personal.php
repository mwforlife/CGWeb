<?php
class Personal{
    private $id;
    private $nombre;
    private $apellido;
    private $correo;
    private $telefono;
    private $grupo;
    private $cargo;
    private $foto;
    private $fecha;

    public function Personal($id, $nombre, $apellido, $correo, $telefono, $grupo, $cargo, $foto, $fecha) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->telefono = $telefono;
        $this->grupo = $grupo;
        $this->cargo = $cargo;
        $this->foto = $foto;
        $this->fecha = $fecha;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getGrupo() {
        return $this->grupo;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function setGrupo($grupo) {
        $this->grupo = $grupo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }
}