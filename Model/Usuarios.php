<?php

class Usuarios{
    private $id_cliente;
    private $empresa;
    private $telefono;
    private $correo;
    private $tipo;
    private $servicio;

// construtor
public function __Construct($id_cliente, $empresa, $telefono, $correo, $tipo, $servicio){

$this->id_cliente = $id_cliente;
$this->empresa = $empresa;
$this->telefono = $telefono;
$this->correo = $correo;
$this->tipo = $tipo;
$this->servicio = $servicio;

}

// metodo guardar 
public function guardar(){
    include "../DB/Conexion.php";
    $con = new Conexion();
    $resultado = $con->conectar();

    $row = $resultado->prepare("INSERT INTO clientes (id_cliente, empresa, telefono, correo, tipo, servicio) VALUES (:id_cliente, :empresa, :telefono, :correo, :tipo, :servicio)");
    // $row = $resultado->prepare($sql);
    $row->bindParam(':id_cliente', $this->id_cliente);
    $row->bindParam(':empresa', $this->empresa);
    $row->bindParam(':telefono', $this->telefono);
    $row->bindParam(':correo', $this->correo);
    $row->bindParam(':tipo', $this->tipo);
    $row->bindParam(':servicio', $this->servicio);
    $sql = $row->execute();
    return $sql;


}

public function get(){
    include "DB/Conexion.php";
    $con = new Conexion();
    $resultado = $con->conectar();

        // sentencia sql
        $sql = $resultado->prepare("SELECT * FROM clientes");
        $sql->execute();
        $resultados = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
}

public function eliminar(){
        include '../DB/Conexion.php';
        $con = new Conexion();
        $respuesta = $con->conectar();

        $sql = $respuesta->prepare("DELETE FROM clientes WHERE id_cliente=:id_cliente");
        $sql->bindParam('id_cliente', $this->id_cliente);
        $row = $sql->execute();
        return $row;
    }

    

    public function editar(){
        include '../DB/Conexion.php';
        $con = new Conexion();
        $respuesta = $con->conectar();

        $sql = $respuesta->prepare("UPDATE clientes SET empresa=:empresa,telefono=:telefono,correo=:correo,tipo=:tipo,servicio=:servicio WHERE id_cliente=:id_cliente");
        $sql->bindParam('id_cliente', $this->id_cliente);
        $sql->bindParam('empresa', $this->empresa);
        $sql->bindParam('telefono', $this->telefono);
        $sql->bindParam('correo', $this->correo);
        $sql->bindParam('tipo', $this->tipo);
        $sql->bindParam('servicio', $this->servicio);
        $row = $sql->execute();
        return $row;
    }



}

