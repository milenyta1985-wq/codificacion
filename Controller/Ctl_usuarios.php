<?php
    include '../Model/Usuarios.php';
    
    // pasamos la variable que biene des de el boton del formulario
$operacion = $_REQUEST['operacion'];

// usamos un switch

switch ($operacion) {
    // clase que llama a la funcion fuardar y egecuta el metodo guardar
    case 'Guardar':guardar();break;
    case 'Eliminar':eliminar();break;
    case 'Editar':editar();break;
}

// funcion guardar del controlador
function guardar(){
    $empresa = $_REQUEST['empresa'];
    $telefono = $_REQUEST['telefono'];
    $correo = $_REQUEST['correo'];
    $tipo = $_REQUEST['tipo'];
    $servicio = $_REQUEST['servicio'];

       // instanciamos la clase clientes del modelo
    $cliente = new Usuarios(null,$empresa,$telefono,$correo,$tipo,$servicio);
    $row = $cliente->guardar();

    // validamos si la funcion guadar es exitosa 
    if($row){
        echo '<script>alert("exitoso");
        window.location = "../clientes.php";
        </script>';
    }else{
        echo '<script>alert("Error intentelo de nuevo");
        window.location = "../clientes.php";
        </script>';
    }

}

// funcion para elieminar del controlador 
function eliminar(){
    $id_cliente = $_REQUEST['id_cliente'];

    // instanciamos la clase clientes del modelo
    $cliente = new Clientes($id_cliente,'','','','','','');
    $row = $cliente->eliminar();

    // validamos si la funcion guadar es exitosa 
    if($row){
        echo '<script>alert("exitoso");
        window.location = "../clientes.php";
        </script>';
    }else{
        echo '<script>alert("Error intentelo de nuevo");
        window.location = "../clientes.php";
        </script>';
    }
}

function editar(){
   $id_cliente = $_REQUEST['id_cliente'];
    $empresa = $_REQUEST['empresa'];
    $telefono = $_REQUEST['telefono'];
    $correo = $_REQUEST['correo'];
    $tipo = $_REQUEST['tipo'];
    $servicio = $_REQUEST['servicio'];

    $tecnico = new Usuarios($id_cliente,$empresa,$telefono,$correo,$tipo,$servicio);
    $pre = $tecnico->editar();

    if($pre){
        echo '<script>alert("exitoso");
            window.location = "../clientes.php";
        </script>';
    }else{
        echo '<script>alert("Error");
            window.location = "../clientes.php";
        </script>';
    }

    
}

?>
