<?php

include '../model/Ordenes.php';

$operacion = $_REQUEST['operacion'];

switch ($operacion) {
    case 'Guardar':guardar();break;
    case 'Eliminar':eliminar();break;
}

function guardar(){
    $orden = $_REQUEST['orden'];
    $cliente = $_REQUEST['cliente'];
    $tipo = $_REQUEST['tipo'];
    $prioridad = $_REQUEST['prioridad'];
    $estado = 1;
    $responsable = $_REQUEST['responsable'];

    $ordenes = new Ordenes($orden,$cliente,$tipo,$prioridad,$estado,$responsable);
    $pre = $ordenes->guardar();

    if($pre){
        echo '<script>alert("exitoso");
            window.location = "../ordenes.php";
        </script>';
    }else{
        echo '<script>alert("Error");
            window.location = "../ordenes.php";
        </script>';
    }

    
}

function eliminar(){
    $orden = $_REQUEST['orden'];

    $ordenes = new Ordenes($orden,'','','','','');
    $pre = $ordenes->eliminar();

    if($pre){
        echo '<script>alert("exitoso");
            window.location = "../ordenes.php";
        </script>';
    }else{
        echo '<script>alert("Error");
            window.location = "../ordenes.php";
        </script>';
    }


}

?>
