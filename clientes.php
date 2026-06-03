<?php
    include 'Model/Usuarios.php';
$cliente = new Usuarios('','','','','','','');
$row = $cliente->get();

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimientos Industriales - Sistema de Gestión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <link rel="stylesheet" href="estilo.css">
</head>
<body>

    <!-- LOGIN PAGE -->


    <!-- DASHBOARD -->
    <div id="dashboard" class="dashboard">
        <!-- SIDEBAR -->
        <?php include 'php/menu.php'; ?>

        <!-- MAIN CONTENT -->
        <main class="main-content">
            <!-- HEADER -->
            <?php include 'php/submenu.php'; ?>

            <!-- CONTENT -->
            <div class="content">
                
                <!-- CLIENTES PAGE -->
                <div id="page-clientes" class="page-content">
                    <div class="card-header" style="margin-bottom: 24px;">
                        <div>
                            <h1 style="font-size: 24px; margin-bottom: 4px;">Gestión de Clientes</h1>
                            <p class="card-description">Administre y consulte información de clientes</p>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Clientes" data-bs-whatever="@getbootstrap">
                                <i class="fas fa-plus"></i> Nuevo Cliente
                            </button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Buscar cliente...">
                        </div>

                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Empresa</th>
                                        <th>Teléfono</th>
                                        <th>Email</th>
                                        <th>Tipo</th>
                                        <th>Servicios</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($row as $i){ ?>
                                    <tr>
                                        <td><strong><?php echo $i['empresa']; ?></strong></td>
                                        <td><?php echo $i['telefono']; ?></td>
                                        <td><?php echo $i['correo']; ?></td>
                                        <td><span class="badge badge-info"><?php echo $i['tipo']; ?></span></td>
                                        <td><?php echo $i['servicio']; ?></td>
                                        <td><button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Ver Detalles</button></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- MODALES -->
    <div id="modalCliente" class="modal">
        <div class="modal-content" style="position: relative;">
            <button class="modal-close" onclick="closeModal('modalCliente')">&times;</button>
            <div class="modal-header">
                <h2 class="modal-title">Registrar Nuevo Cliente</h2>
                <p class="modal-description">Complete la información del nuevo cliente</p>
            </div>
            <form>
                <div class="grid grid-2">
                    <div class="form-group">
                        <label class="form-label">Nombre de la Empresa</label>
                        <input type="text" class="form-input" placeholder="Ej: Industrias ABC S.A.">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tipo de Industria</label>
                        <input type="text" class="form-input" placeholder="Ej: Manufacturera">
                    </div>
                </div>
                <div class="grid grid-2">
                    <div class="form-group">
                        <label class="form-label">Nombre del Contacto</label>
                        <input type="text" class="form-input" placeholder="Ej: Juan Pérez">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Teléfono</label>
                        <input type="tel" class="form-input" placeholder="+57 310 234 5678">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-input" placeholder="contacto@empresa.com">
                </div>
                <div class="form-group">
                    <label class="form-label">Dirección</label>
                    <input type="text" class="form-input" placeholder="Calle 123 #45-67, Ciudad">
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cliente</button>
            </form>
        </div>
    </div>

    <div id="modalOrden" class="modal">
        <div class="modal-content" style="position: relative;">
            <button class="modal-close" onclick="closeModal('modalOrden')">&times;</button>
            <div class="modal-header">
                <h2 class="modal-title">Crear Nueva Orden de Trabajo</h2>
                <p class="modal-description">Complete los detalles de la orden de trabajo</p>
            </div>
            <form>
                <div class="grid grid-2">
                    <div class="form-group">
                        <label class="form-label">Cliente</label>
                        <select class="form-input">
                            <option>Seleccione cliente</option>
                            <option>Industrias ABC S.A.</option>
                            <option>Fábrica XYZ Ltda.</option>
                            <option>Almacenes DEF</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Tipo de Servicio</label>
                        <select class="form-input">
                            <option>Seleccione tipo</option>
                            <option>Mantenimiento Preventivo</option>
                            <option>Mantenimiento Correctivo</option>
                            <option>Refrigeración</option>
                            <option>Cableado Estructurado</option>
                            <option>Soporte Técnico</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-2">
                    <div class="form-group">
                        <label class="form-label">Prioridad</label>
                        <select class="form-input">
                            <option>Baja</option>
                            <option>Media</option>
                            <option>Alta</option>
                            <option>Urgente</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Técnico Asignado</label>
                        <select class="form-input">
                            <option>Seleccione técnico</option>
                            <option>Juan Pérez</option>
                            <option>María López</option>
                            <option>Carlos Ruiz</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-2">
                    <div class="form-group">
                        <label class="form-label">Fecha Programada</label>
                        <input type="date" class="form-input">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Ubicación</label>
                        <input type="text" class="form-input" placeholder="Ej: Planta Principal">
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Descripción del Trabajo</label>
                    <textarea class="form-input" rows="4" placeholder="Describa el trabajo a realizar..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Crear Orden</button>
            </form>
        </div>
    </div>

<div id="Clientes" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header btnprimary">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">Nuevo cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                <div class="modal-body">
                    
                    <form action="Controller/Ctl_usuarios.php" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="text-dark">Empresa</label>
                                <input type="text" name="empresa" class="border border-dark" required>
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Telefono</label>
                                <input type="text" name="telefono" class="border border-dark" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Correo</label>
                            <input type="text" name="correo" class="border border-dark" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Tipo</label>
                            <input type="text" name="tipo" class="border border-dark" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Servicio</label>
                            <input type="text" name="servicio" class="border border-dark" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary">Cancelar</button>
                        <button class="btn btn-primary" name="operacion" value="Guardar">Crear Cliente</button>
                    </div>
                </form>
            </div>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <script src="app.js"></script>
</body>
</html>
