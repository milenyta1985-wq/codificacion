<?php 

class Inventario {
    private $codigo;
    private $nombre;
    private $categoria;
    private $cantidad;
    private $ubicacion;
    private $costo;
    private $estado;

    public function __construct($codigo,$nombre,$categoria,$cantidad,$ubicacion,$costo,$estado){
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->cantidad = $cantidad;
        $this->ubicacion = $ubicacion;
        $this->costo = $costo;
        $this->estado = $estado;
    }

    public function guardar(){
        include '../DB/Conexion.php';
        $con = new Conexion();
        $respuesta = $con->conectar();

        $sql = $respuesta->prepare("INSERT INTO inventario (codigo,nombre,categoria,cantidad,ubicacion,costo,estado) VALUES (:codigo,:nombre,:categoria,:cantidad,:ubicacion,:costo,:estado)");
        $sql->bindParam('codigo', $this->codigo);
        $sql->bindParam('nombre', $this->nombre);
        $sql->bindParam('categoria', $this->categoria);
        $sql->bindParam('cantidad', $this->cantidad);
        $sql->bindParam('ubicacion', $this->ubicacion);
        $sql->bindParam('costo', $this->costo);
        $sql->bindParam('estado', $this->estado);
        $row = $sql->execute();
        return $row;
    }

    public function eliminar(){
        include '../DB/Conexion.php';
        $con = new Conexion();
        $respuesta = $con->conectar();

        $sql = $respuesta->prepare("DELETE FROM inventario WHERE codigo=:codigo");
        $sql->bindParam('codigo', $this->codigo);
        $row = $sql->execute();
        return $row;
    }

    public function editar(){
        include '../DB/Conexion.php';
        $con = new Conexion();
        $respuesta = $con->conectar();

        $sql = $respuesta->prepare("UPDATE orden SET nombre=:nombre,categoria=:categoria,cantidad=:cantidad,ubicacion=:ubicacion,costo=:costo,estado=:estado WHERE codigo=:codigo");
        $sql->bindParam('codigo', $this->codigo);
        $sql->bindParam('nombre', $this->nombre);
        $sql->bindParam('categoria', $this->categoria);
        $sql->bindParam('cantidad', $this->cantidad);
        $sql->bindParam('ubicacion', $this->ubicacion);
        $sql->bindParam('costo', $this->costo);
        $sql->bindParam('estado', $this->estado);
        $row = $sql->execute();
        return $row;
    }

    public function get(){
    include "DB/Conexion.php";
    $con = new Conexion();
    $resultado = $con->conectar();

        // sentencia sql
        $sql = $resultado->prepare("SELECT * FROM inventario");
        $sql->execute();
        $resultados = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
}


}

?>
