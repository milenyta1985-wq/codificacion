<?php 
     include "DB/Conexion.php";
    $con = new Conexion();
    $resultado = $con->conectar();

        // sentencia sql
        $sql = $resultado->prepare("SELECT * FROM clientes");
        $sql->execute();
        $resultados = $sql->fetchAll(PDO::FETCH_ASSOC);
    
// Evitar que se envíe contenido antes de las cabeceras
header("Content-Type: application/vnd.ms-excel; charset=UTF-8");
header("Content-Disposition: attachment; filename=reporte_usuarios.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "\xEF\xBB\xBF";
?>

    <table class="table table-bordered" width="70%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:center;">Reporte de clientes</th>
        </tr>
        <tr>
            <th>Empresa</th>
            <th>Telefono</th>
            <th>E-mail</th>
            <th>Tipo</th>
            <th>Servicio</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($resultados as $r) { ?>

            <tr>
                <td class="text-dark"><?php echo $r['empresa'] ?></td>
                <td class="text-dark"><?php echo $r['telefono'] ?></td>
                <td class="text-dark"><?php echo $r['correo'] ?></td>
                <td class="text-dark"><?php echo $r['tipo'] ?></td>
                <td class="text-dark"><?php echo $r['servicio'] ?></td>
            </tr>
            
        <?php }  ?>
    </tbody>
</table>