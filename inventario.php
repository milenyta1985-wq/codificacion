<?php
    include 'Model/Inventario.php';
$inventario = new Inventario('','','','','','','');
$row = $inventario->get();

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

                <!-- INVENTARIO PAGE -->
                <div id="page-inventario" class="page-content">
                    <div class="card-header" style="margin-bottom: 24px;">
                        <div>
                            <h1 style="font-size: 24px; margin-bottom: 4px;">Inventario y Equipos</h1>
                            <p class="card-description">Gestione repuestos y equipos registrados</p>
                        </div>
                        <div>
                            <button class="btn btn-primary" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Clientes" data-bs-whatever="@getbootstrap">
                                <i class="fas fa-plus"></i> Nuevo Item
                            </button>
                        </div>
                    </div>

                    <div class="kpi-grid">
                        <div class="kpi-card">
                            <div class="kpi-icon" style="background: var(--azul-rey);">
                                <i class="fas fa-boxes"></i>
                            </div>
                            <div class="kpi-value">148</div>
                            <div class="kpi-label">Items en Inventario</div>
                        </div>
                        
                        <div class="kpi-card">
                            <div class="kpi-icon" style="background: #EF4444;">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="kpi-value">12</div>
                            <div class="kpi-label">Stock Bajo</div>
                        </div>
                        
                        <div class="kpi-card">
                            <div class="kpi-icon" style="background: var(--amarillo);">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="kpi-value">$85.3M</div>
                            <div class="kpi-label">Valor Total</div>
                        </div>
                        
                        <div class="kpi-card">
                            <div class="kpi-icon" style="background: #10B981;">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div class="kpi-value">24</div>
                            <div class="kpi-label">Equipos Registrados</div>
                        </div>
                    </div>

                    <div class="card" style="background: #FEE2E2; border-left: 4px solid #EF4444;">
                        <div style="display: flex; gap: 12px;">
                            <i class="fas fa-exclamation-triangle" style="color: #EF4444; font-size: 20px;"></i>
                            <div>
                                <h3 style="color: #991B1B; margin-bottom: 8px;">Alerta de Stock Bajo</h3>
                                <p style="color: #7F1D1D; font-size: 14px; margin-bottom: 8px;">
                                    12 items tienen stock por debajo del mínimo establecido.
                                </p>
                                <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                                    <span class="badge" style="background: white;">Compresor de Refrigeración</span>
                                    <span class="badge" style="background: white;">Gas Refrigerante R410A</span>
                                    <span class="badge" style="background: white;">Breaker 100A</span>
                                    <span class="badge" style="background: white;">+9 más</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="tabs">
                            <div class="tab-list">
                                <button class="tab-button active">Repuestos y Materiales</button>
                                <button class="tab-button">Equipos Industriales</button>
                            </div>
                        </div>

                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Buscar por nombre o código...">
                        </div>

                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Categoría</th>
                                        <th>Cantidad</th>
                                        <th>Ubicación</th>
                                        <th>Costo</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($row as $i){ ?>
                                    <tr>
                                        <td><strong><?php echo $i['codigo']; ?></strong></td>
                                        <td><?php echo $i['nombre']; ?></td>
                                        <td><?php echo $i['categoria']; ?></td>
                                        <td><span class="badge badge-info"><?php echo $i['cantidad']; ?></span></td>
                                        <td><?php echo $i['ubicacion']; ?></td>
                                        <td><?php echo $i['costo']; ?></td>
                                        <td><span class="badge badge-success"><?php echo $i['estado']; ?></span></td>
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
                    <h5 class="modal-title text-dark" id="exampleModalLabel">Nuevo producto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                <div class="modal-body">
                    
                    <form action="Controller/Ctl_inventario.php" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="text-dark">Codigo</label>
                                <input type="text" name="codigo" class="border border-dark" required>
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Nombre</label>
                                <input type="text" name="nombre" class="border border-dark" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Categoria</label>
                            <input type="text" name="categoria" class="border border-dark" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Cantidad</label>
                            <input type="text" name="cantidad" class="border border-dark" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Ubicacion</label>
                            <input type="text" name="ubicacion" class="border border-dark" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Costo</label>
                            <input type="text" name="costo" class="border border-dark" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary">Cancelar</button>
                        <button class="btn btn-primary" name="operacion" value="Guardar">Crear producto</button>
                    </div>
                </form>
            </div>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>



    <script src="app.js"></script>
</body>
</html>
