<?php 
     include "DB/Conexion.php";
    $con = new Conexion();
    $resultado = $con->conectar();

        // sentencia sql
        $sql = $resultado->prepare("SELECT * FROM tecnicos");
        $sql->execute();
        $resultados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
// Evitar que se envíe contenido antes de las cabeceras
header("Content-Type: application/vnd.ms-excel; charset=UTF-8");
header("Content-Disposition: attachment; filename=reporte_tecnicos.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "\xEF\xBB\xBF";
?>

    <table class="table table-bordered" width="70%">
    <thead style="background:gray;">
        <tr>
            <th colspan="4" style="text-align:center;">Reporte de Tecnicos y labor</th>
        </tr>
        <tr>
            <th>Tecnico</th>
            <th>Especialidad</th>
            <th>Trabajos activos</th>
            <th>Trabajos completos</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($resultados as $r) { ?>

            <tr>
                <td class="text-dark"><?php echo $r['tecnico'] ?></td>
                <td class="text-dark"><?php echo $r['especialidad'] ?></td>
                <td class="text-dark"><?php echo $r['trab_activos'] ?></td>
                <td class="text-dark"><?php echo $r['trab_completos'] ?></td>
            </tr>
            
        <?php }  ?>
    </tbody>
</table>