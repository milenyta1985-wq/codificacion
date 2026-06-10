<?php 

class Ordenes {
    private $orden;
    private $cliente;
    private $tipo;
    private $prioridad;
    private $estado;
    private $reponsable;

    public function __construct($orden,$cliente,$tipo,$prioridad,$estado,$responsable){
        $this->orden = $orden;
        $this->cliente = $cliente;
        $this->tipo = $tipo;
        $this->prioridad = $prioridad;
        $this->estado = $estado;
        $this->responsable = $responsable;
    }

    public function guardar(){
        include '../DB/Conexion.php';
        $con = new Conexion();
        $respuesta = $con->conectar();

        $sql = $respuesta->prepare("INSERT INTO orden (orden,cliente,tipo,prioridad,estado,responsable) VALUES (:orden,:cliente,:tipo,:prioridad,:estado,:responsable)");
        $sql->bindParam('orden', $this->orden);
        $sql->bindParam('cliente', $this->cliente);
        $sql->bindParam('tipo', $this->tipo);
        $sql->bindParam('prioridad', $this->prioridad);
        $sql->bindParam('estado', $this->estado);
        $sql->bindParam('responsable', $this->responsable);
        $row = $sql->execute();
        return $row;
    }

    public function eliminar(){
        include '../DB/Conexion.php';
        $con = new Conexion();
        $respuesta = $con->conectar();

        $sql = $respuesta->prepare("DELETE FROM orden WHERE orden=:orden");
        $sql->bindParam('orden', $this->orden);
        $row = $sql->execute();
        return $row;
    }

    public function editar(){
        include '../DB/Conexion.php';
        $con = new Conexion();
        $respuesta = $con->conectar();

        $sql = $respuesta->prepare("UPDATE orden SET cliente=:cliente,tipo=:tipo,prioridad=:prioridad,estado=:estado,responsable=:responsable WHERE orden=:orden");
        $sql->bindParam('orden', $this->orden);
        $sql->bindParam('cliente', $this->cliente);
        $sql->bindParam('tipo', $this->tipo);
        $sql->bindParam('prioridad', $this->prioridad);
        $sql->bindParam('estado', $this->estado);
        $sql->bindParam('responsable', $this->responsable);
        $row = $sql->execute();
        return $row;
    }

    public function get(){
    include "DB/Conexion.php";
    $con = new Conexion();
    $resultado = $con->conectar();

        // sentencia sql
        $sql = $resultado->prepare("SELECT * FROM orden");
        $sql->execute();
        $resultados = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
    }


    


}

?>
