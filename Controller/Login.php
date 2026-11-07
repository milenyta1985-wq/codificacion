<?php
session_start();

       // if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
            $correo = $_POST["correo"];
            $clave = md5($_POST["clave"]);
            // $clave = md5($_POST["clave"]);


            include '../DB/Conexion.php';
            // instanciar la conexion
            $con = new Conexion();
            $conexion = $con->conectar();

          $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE correo = :correo AND clave = :clave");
                $stmt->bindParam(":correo", $correo);
                $stmt->bindParam(":clave", $clave);
                $stmt->execute();

            //obtener el usuario de la base de datos
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);


            // echo json_encode($usuario);
            
            if (isset($usuario['correo']) || isset($usuario['clave'])) {

                    $_SESSION["id_usuario"] = $usuario["id_usuario"];
                    $_SESSION["nombre"] = $usuario["nombre"];
                    $_SESSION["apellido"] = $usuario["apellido"];
                    $_SESSION["telefono"] = $usuario["telefono"];
                    $_SESSION["correo"] = $usuario["correo"];
                    $_SESSION["clave"] = $usuario["clave"];
                    $_SESSION["rol"] = $usuario["rol"];
                    
                    
                    if($_SESSION['rol']==1){
                        echo 'rolUno';
                    }else if($_SESSION['rol']==2){ 
                        echo 'rolDos';
                    }else{
                        echo 'Error';
                    }

            }else{
                echo 'error';
            }
                
        //}

?>