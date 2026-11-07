<?php
header("Content-Type: aplication/vnd.ms-excel; charset=utf-8");
    // header("Content-Type: aplication/xls");
    header("Content-Disposition: attachment; filename=Reporte_cliente.xls");

include '../Modelo/Usuarios.php';
$cliente = new Usuarios('','','','','','','');
$rowG = $cliente->get();

?>

    <table>
    <thead>
        <tr>
            <th colspan="4" style="text-align:center;">Reporte de clientes</th>
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
<?php foreach ($rowG as $r) { ?>

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