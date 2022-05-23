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
}