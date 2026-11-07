<?php 
     include "DB/Conexion.php";
    $con = new Conexion();
    $resultado = $con->conectar();

        // sentencia sql
        $sql = $resultado->prepare("SELECT * FROM inventario");
        $sql->execute();
        $resultados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
// Evitar que se envíe contenido antes de las cabeceras
header("Content-Type: application/vnd.ms-excel; charset=UTF-8");
header("Content-Disposition: attachment; filename=reporte_inventario.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "\xEF\xBB\xBF";
?>

    <table class="table table-bordered" width="70%">
    <thead style="background:gray;">
        <tr>
            <th colspan="7" style="text-align:center;">Reporte de Inventario</th>
        </tr>
        <tr>
             <th>Código</th>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Cantidad</th>
            <th>Ubicación</th>
            <th>Costo</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
<?php $total=0; foreach ($resultados as $i) { $total = $total + ($i['costo']*$i['cantidad']); ?>

            <tr>
               <td><strong><?php echo $i['codigo']; ?></strong></td>
                <td><?php echo $i['nombre']; ?></td>
                <td><?php echo $i['categoria']; ?></td>
                <td><span class="badge badge-info"><?php echo $i['cantidad']; ?></span></td>
                <td><?php echo $i['ubicacion']; ?></td>
                <td><?php echo '$'. number_format($i['costo']*$i['cantidad']); ?></td>
                <td><span class="badge badge-success"><?php if($i['estado'] == 1){ echo 'Activo'; }else{ echo 'Agotado'; } ?></span></td>
            </tr>
            
        <?php }  ?>
    </tbody>
     <tfooter>
         <tr>
             <th>Total: <?php echo '$'. number_format($total); ?></th>
         </tr>
     </tfooter>
         
</table>