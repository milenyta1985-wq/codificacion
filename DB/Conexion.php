<?php

class Conexion{
    private $host = "localhost"; 
    private $usuario = "root";
    private $password = "";
    private $db = "industrial";

    public function conectar(){
        try {
            $conexion = new PDO("mysql:host=$this->host;dbname=$this->db", $this->usuario, $this->password);
            // $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
            // echo "Conexion exitosa";
        } catch (PDOException $e) {
            echo "Error de conexion" . $e->getMessage();
            // return null;

        }
    }
}

// $con = new Conexion();
//     $resultado = $con->conectar();
//     echo $resultado;





?>