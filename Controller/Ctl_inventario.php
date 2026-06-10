<?php

include '../model/Inventario.php';

$operacion = $_REQUEST['operacion'];

switch ($operacion) {
    case 'Guardar':guardar();break;
    case 'Eliminar':eliminar();break;
    case 'Editar':editar();break;
}

function guardar(){
    $codigo = $_REQUEST['codigo'];
    $nombre = $_REQUEST['nombre'];
    $categoria = $_REQUEST['categoria'];
    $cantidad = $_REQUEST['cantidad'];
    $ubicacion = $_REQUEST['ubicacion'];
    $costo = $_REQUEST['costo'];
    $estado = 1;

    $inventario = new Inventario($codigo,$nombre,$categoria,$cantidad,$ubicacion,$costo,$estado);
    $pre = $inventario->guardar();

    if($pre){
        echo '<script>alert("exitoso");
            window.location = "../inventario.php";
        </script>';
    }else{
        echo '<script>alert("Error");
            window.location = "../inventario.php";
        </script>';
    }

    
}

function eliminar(){
    $codigo = $_REQUEST['codigo'];

    $inventario = new Inventario($codigo,'','','','','','');
    $pre = $inventario->eliminar();

    if($pre){
        echo '<script>alert("exitoso");
            window.location = "../inventario.php";
        </script>';
    }else{
        echo '<script>alert("Error");
            window.location = "../inventario.php";
        </script>';
    }


}

function editar(){
    $codigo = $_REQUEST['codigo'];
    $nombre = $_REQUEST['nombre'];
    $categoria = $_REQUEST['categoria'];
    $cantidad = $_REQUEST['cantidad'];
    $ubicacion = $_REQUEST['ubicacion'];
    $costo = $_REQUEST['costo'];
    $estado = 1;

    $inventario = new Inventario($codigo,$nombre,$categoria,$cantidad,$ubicacion,$costo,$estado);
    $pre = $inventario->editar();

    if($pre){
        echo '<script>alert("exitoso");
            window.location = "../inventario.php";
        </script>';
    }else{
        echo '<script>alert("Error");
            window.location = "../inventario.php";
        </script>';
    }

    
}

?>
