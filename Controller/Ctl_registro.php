<?php
    include '../Model/Registro.php';
    
$operacion = $_REQUEST['operacion'];

// usamos un switch

switch ($operacion) {
    case 'Guardar':guardar();break;
}

// funcion guardar del controlador
function guardar(){
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $telefono = $_REQUEST['telefono'];
    $correo = $_REQUEST['correo'];
    $clave = md5($_REQUEST['clave']);

       // instanciamos la clase clientes del modelo
    $cliente = new Registro(null,$nombre,$apellido,$telefono,$correo,$clave,1);
    $row = $cliente->guardar();

    // validamos si la funcion guadar es exitosa 
    if($row){
        echo 'ok';
    }else{
        echo 'error';
    }

}



?>
