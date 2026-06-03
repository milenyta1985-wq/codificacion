<?php

include '../model/Tecnico.php';

$operacion = $_REQUEST['operacion'];

switch ($operacion) {
    case 'Guardar':guardar();break;
    case 'Eliminar':eliminar();break;
}

function guardar(){
    
    $tecnico = $_REQUEST['tecnico'];
    $especialidad = $_REQUEST['especialidad'];
    $trab_activos = $_REQUEST['trab_activos'];
    $trab_completos = $_REQUEST['trab_completos'];

    $tecnico = new Tecnico(Null,$tecnico,$especialidad,$trab_activos,$trab_completos);
    $pre = $tecnico->guardar();

    if($pre){
        echo '<script>alert("exitoso");
          window.location = "../tecnicos.php";
        </script>';
    }else{
        echo '<script>alert("Error");
            window.location = "../tecnicos.php";
        </script>';
    }

    
}

function eliminar(){
    $id_tecnico = $_REQUEST['id_tecnico'];

    $tecnico = new Tecnico($id_tecnico,'','','','','');
    $pre = $tecnico->eliminar();

    if($pre){
        echo '<script>alert("exitoso");
            window.location = "../tecnicos.php";
        </script>';
    }else{
        echo '<script>alert("Error");
            window.location = "../tecnicos.php";
        </script>';
    }


}

?>
