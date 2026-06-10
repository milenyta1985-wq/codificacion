<?php 
    include 'Model/Ordenes.php';
    include 'Model/Tecnico.php';
    $ordenes = new Ordenes('','','','','','');
    $rows = $ordenes->ordenActiva();
    $rowsx = $ordenes->ordenLista();
    $tecnico = new Tecnico('','','','','');
    $rowsy = $tecnico->tecnicoActivo();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimientos Industriales - Sistema de Gestión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    

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
                <!-- DASHBOARD PAGE -->
                <div id="page-dashboard" class="page-content">
                    <div class="kpi-grid">
                        <div class="kpi-card">
                            <div class="kpi-icon" style="background: var(--azul-rey);">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="kpi-value"><?php echo $rows[0]['total']; ?></div>
                            <div class="kpi-label">Órdenes Activas</div>
                            <div class="kpi-change">
                                <i class="fas fa-arrow-up"></i> +12%
                            </div>
                        </div>
                        
                        <div class="kpi-card">
                            <div class="kpi-icon" style="background: #10B981;">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="kpi-value"><?php echo $rowsx[0]['total']; ?></div>
                            <div class="kpi-label">Órdenes Finalizadas</div>
                            <div class="kpi-change">
                                <i class="fas fa-arrow-up"></i> +8%
                            </div>
                        </div>
                        
                        <div class="kpi-card">
                            <div class="kpi-icon" style="background: var(--amarillo);">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="kpi-value"><?php echo $rowsy[0]['total']; ?></div>
                            <div class="kpi-label">Técnicos Disponibles</div>
                            <div class="kpi-change">
                                <i class="fas fa-check"></i> 100%
                            </div>
                        </div>
                        
                        <div class="kpi-card">
                            <div class="kpi-icon" style="background: #EF4444;">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div class="kpi-value">3</div>
                            <div class="kpi-label">Alertas Críticas</div>
                            <div class="kpi-change" style="color: #EF4444;">
                                <i class="fas fa-arrow-down"></i> -2
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-2">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Mantenimientos por Tipo</h3>
                            </div>
                            <div class="chart-placeholder">
                                <i class="fas fa-chart-pie" style="font-size: 48px;"></i>
                                <p style="margin-left: 12px;">Gráfico de Pastel</p>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Mantenimientos Mensuales</h3>
                            </div>
                            <div class="chart-placeholder">
                                <i class="fas fa-chart-bar" style="font-size: 48px;"></i>
                                <p style="margin-left: 12px;">Gráfico de Barras</p>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Órdenes Recientes</h3>
                            <button class="btn btn-primary">Ver Todas</button>
                        </div>
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Orden</th>
                                        <th>Cliente</th>
                                        <th>Tipo</th>
                                        <th>Estado</th>
                                        <th>Técnico</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong style="color: var(--azul-rey);">ORD-1234</strong></td>
                                        <td>Industrias ABC</td>
                                        <td>Preventivo</td>
                                        <td><span class="badge badge-info">En Proceso</span></td>
                                        <td>Juan Pérez</td>
                                        <td><button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Ver Detalles</button></td>
                                    </tr>
                                    <tr>
                                        <td><strong style="color: var(--azul-rey);">ORD-1235</strong></td>
                                        <td>Fábrica XYZ</td>
                                        <td>Correctivo</td>
                                        <td><span class="badge badge-warning">Pendiente</span></td>
                                        <td>María López</td>
                                        <td><button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Ver Detalles</button></td>
                                    </tr>
                                    <tr>
                                        <td><strong style="color: var(--azul-rey);">ORD-1236</strong></td>
                                        <td>Almacenes DEF</td>
                                        <td>Refrigeración</td>
                                        <td><span class="badge badge-info">En Proceso</span></td>
                                        <td>Carlos Ruiz</td>
                                        <td><button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Ver Detalles</button></td>
                                    </tr>
                                    <tr>
                                        <td><strong style="color: var(--azul-rey);">ORD-1237</strong></td>
                                        <td>Logística GHI</td>
                                        <td>Cableado</td>
                                        <td><span class="badge badge-success">Finalizada</span></td>
                                        <td>Ana Martínez</td>
                                        <td><button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Ver Detalles</button></td>
                                    </tr>
                                    <tr>
                                        <td><strong style="color: var(--azul-rey);">ORD-1238</strong></td>
                                        <td>Manufacturas JKL</td>
                                        <td>Soporte Técnico</td>
                                        <td><span class="badge badge-warning">Pendiente</span></td>
                                        <td>Pedro Sánchez</td>
                                        <td><button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Ver Detalles</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="grid grid-3">
                        <div class="card" style="background: linear-gradient(135deg, var(--azul-rey), var(--azul-hover)); color: white; cursor: pointer;">
                            <div style="display: flex; align-items: center; gap: 16px;">
                                <div style="width: 48px; height: 48px; background: white; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-clipboard-list" style="color: var(--azul-rey); font-size: 24px;"></i>
                                </div>
                                <div>
                                    <h3 style="margin-bottom: 4px;">Crear Orden</h3>
                                    <p style="font-size: 14px; opacity: 0.9;">Nueva orden de trabajo</p>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="background: linear-gradient(135deg, var(--amarillo), var(--amarillo-hover)); cursor: pointer;">
                            <div style="display: flex; align-items: center; gap: 16px;">
                                <div style="width: 48px; height: 48px; background: white; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-users" style="color: var(--amarillo); font-size: 24px;"></i>
                                </div>
                                <div>
                                    <h3 style="margin-bottom: 4px;">Registrar Cliente</h3>
                                    <p style="font-size: 14px; opacity: 0.9;">Nuevo cliente</p>
                                </div>
                            </div>
                        </div>

                        <div class="card" style="background: linear-gradient(135deg, var(--negro), #2a2a2a); color: white; cursor: pointer;">
                            <div style="display: flex; align-items: center; gap: 16px;">
                                <div style="width: 48px; height: 48px; background: white; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-calendar-alt" style="color: var(--negro); font-size: 24px;"></i>
                                </div>
                                <div>
                                    <h3 style="margin-bottom: 4px;">Programar</h3>
                                    <p style="font-size: 14px; opacity: 0.9;">Agendar mantenimiento</p>
                                </div>
                            </div>
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

    <script src="app.js"></script>
</body>
</html>
