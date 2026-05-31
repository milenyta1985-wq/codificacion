<?php

class Usuarios{
    private $id_cliente;
    private $empresa;
    private $telefono;
    private $correo;
    private $tipo;
    private $servicio;

// construtor
public function _construct($id_cliente, $empresa, $telefono, $correo, $tipo, $servicio){

$this->id_cliente = $id_cliente;
$this->empresa = $empresa;
$this->telefono = $telefono;
$this->correo = $correo;
this->tipo = $tipo;
this->servicio = $servicio;

}

// metodo guardar 
public fuction guardar(){
    include "../DB/Conexion.php";
    $con = new Conexion();
    $resultado = $con->conectar();

    $sql = "INSERT INTO clientes (id_cliente, empresa, telefono, correo, tipo, servicio) VALUES (:id_cliente, :empresa, :telefono, :correo, :tipo, :servicio)";
    $row = $resultado->prepare($sql);
    $row->bindParam(':id_cliente', $this->id_cliente);
    $row->bindParam(':empresa', $this->empresa);
    $row->bindParam(':telefono', $this->telefono);s
    $row->bindParam(':correo', $this->correo);
    $row->bindParam(':tipo', $this->tipo);
    $row->bindParam(':servicio', $this->servico);
    $row->excecute();

    


}


}

