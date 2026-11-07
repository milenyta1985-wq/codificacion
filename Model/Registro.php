<?php

class Registro{
    private $id_usuario;
    private $nombre;
    private $apellido;
    private $telefono;
    private $correo;
    private $clave;

// construtor
public function __Construct($id_usuario, $nombre, $apellido, $telefono, $correo, $clave){

$this->id_usuario = $id_usuario;
$this->nombre = $nombre;
$this->apellido = $apellido;
$this->telefono = $telefono;
$this->correo = $correo;
$this->clave = $clave;

}

// metodo guardar 
public function guardar(){
    include "../DB/Conexion.php";
    $con = new Conexion();
    $resultado = $con->conectar();

    $row = $resultado->prepare("INSERT INTO usuarios (id_usuario, nombre, apellido, telefono, correo, clave) VALUES (:id_usuario, :nombre, :apellido, :telefono, :correo, :clave)");
    // $row = $resultado->prepare($sql);
    $row->bindParam(':id_usuario', $this->id_usuario);
    $row->bindParam(':nombre', $this->nombre);
    $row->bindParam(':apellido', $this->apellido);
    $row->bindParam(':telefono', $this->telefono);
    $row->bindParam(':correo', $this->correo);
    $row->bindParam(':clave', $this->clave);
    $sql = $row->execute();
    return $sql;


}


}

