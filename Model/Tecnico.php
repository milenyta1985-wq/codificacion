<?php 

class Tecnico {
    private $id_tecnico;
    private $tecnico;
    private $especialidad;
    private $trab_activos;
    private $trab_completos;

    public function __construct($id_tecnico,$tecnico,$especialidad,$trab_activos,$trab_completos){
        $this->id_tecnico = $id_tecnico;
        $this->tecnico = $tecnico;
        $this->especialidad = $especialidad;
        $this->trab_activos = $trab_activos;
        $this->trab_completos = $trab_completos;
    }

    public function guardar(){
        include '../DB/Conexion.php';
        $con = new Conexion();
        $respuesta = $con->conectar();

        $sql = $respuesta->prepare("INSERT INTO tecnicos (id_tecnico,tecnico,especialidad,trab_activos,trab_completos) VALUES (:id_tecnico,:tecnico,:especialidad,:trab_activos,:trab_completos)");
        $sql->bindParam('id_tecnico', $this->id_tecnico);
        $sql->bindParam('tecnico', $this->tecnico);
        $sql->bindParam('especialidad', $this->especialidad);
        $sql->bindParam('trab_activos', $this->trab_activos);
        $sql->bindParam('trab_completos', $this->trab_completos);
        $row = $sql->execute();
        return $row;
    }

    public function eliminar(){
        include '../DB/Conexion.php';
        $con = new Conexion();
        $respuesta = $con->conectar();

        $sql = $respuesta->prepare("DELETE FROM tecnicos WHERE id_tecnico=:id_tecnico");
        $sql->bindParam('id_tecnico', $this->id_tecnico);
        $row = $sql->execute();
        return $row;
    }

    public function editar(){
        include '../DB/Conexion.php';
        $con = new Conexion();
        $respuesta = $con->conectar();

        $sql = $respuesta->prepare("UPDATE tecnicos SET tecnico=:tecnico,especialidad=:especialidad,trab_activos=:trab_activos,trab_completos=:trab_completos WHERE id_tecnico=:id_tecnico");
        $sql->bindParam('id_tecnico', $this->id_tecnico);
        $sql->bindParam('tecnico', $this->tecnico);
        $sql->bindParam('especialidad', $this->especialidad);
        $sql->bindParam('trab_activos', $this->trab_activos);
        $sql->bindParam('trab_completos', $this->trab_completos);
        $row = $sql->execute();
        return $row;
    }

    public function get(){
    include "DB/Conexion.php";
    $con = new Conexion();
    $resultado = $con->conectar();

        // sentencia sql
        $sql = $resultado->prepare("SELECT * FROM tecnicos");
        $sql->execute();
        $resultados = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $resultados;
}



}

?>
