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

                <!-- REPORTES PAGE -->
                <div id="page-reportes" class="page-content">
                    <div class="card-header" style="margin-bottom: 24px;">
                        <div>
                            <h1 style="font-size: 24px; margin-bottom: 4px;">Reportes y Análisis</h1>
                            <p class="card-description">Genere reportes y visualice estadísticas</p>
                        </div>
                        <select class="form-input" style="width: auto;">
                            <option>Este Mes</option>
                            <option>Este Trimestre</option>
                            <option>Este Año</option>
                            <option>Personalizado</option>
                        </select>
                    </div>

                    <div class="grid grid-3">
                        <div class="card" style="cursor: pointer;">
                            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 16px;">
                                <div class="kpi-icon" style="background: var(--azul-rey); margin: 0;">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div>
                                    <button class="btn btn-primary" style="padding: 6px 12px;">
                                        <i class="fas fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <h3 style="margin-bottom: 8px;">Reporte de Mantenimientos</h3>
                            <p style="font-size: 14px; color: var(--gris-texto); margin-bottom: 12px;">Reporte detallado de todos los mantenimientos realizados</p>
                            <button class="btn btn-primary" style="width: 100%;">Generar Reporte</button>
                        </div>

                        <div class="card" style="cursor: pointer;">
                            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 16px;">
                                <div class="kpi-icon" style="background: var(--azul-rey); margin: 0;">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <div>
                                    <button class="btn btn-primary" style="padding: 6px 12px;">
                                        <i class="fas fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <h3 style="margin-bottom: 8px;">Reporte por Cliente</h3>
                            <p style="font-size: 14px; color: var(--gris-texto); margin-bottom: 12px;">Análisis de servicios prestados por cliente</p>
                            <button class="btn btn-primary" style="width: 100%;">Generar Reporte</button>
                        </div>

                        <div class="card" style="cursor: pointer;">
                            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 16px;">
                                <div class="kpi-icon" style="background: var(--azul-rey); margin: 0;">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div>
                                    <button class="btn btn-primary" style="padding: 6px 12px;">
                                        <i class="fas fa-download"></i>
                                    </button>
                                </div>
                            </div>
                            <h3 style="margin-bottom: 8px;">Reporte Financiero</h3>
                            <p style="font-size: 14px; color: var(--gris-texto); margin-bottom: 12px;">Resumen de costos y facturación</p>
                            <button class="btn btn-primary" style="width: 100%;">Generar Reporte</button>
                        </div>
                    </div>

                    <div class="card">
                        <h3 class="card-title" style="margin-bottom: 16px;">Mantenimientos por Mes</h3>
                        <div class="chart-placeholder">
                            <i class="fas fa-chart-bar" style="font-size: 48px;"></i>
                            <p style="margin-left: 12px;">Gráfico de Barras - Mantenimientos Mensuales</p>
                        </div>
                    </div>

                    <div class="kpi-grid">
                        <div class="kpi-card" style="background: linear-gradient(135deg, var(--azul-rey), var(--azul-hover)); color: white;">
                            <div class="kpi-icon" style="background: white; margin-bottom: 16px;">
                                <i class="fas fa-calendar" style="color: var(--azul-rey);"></i>
                            </div>
                            <div class="kpi-value" style="color: white;">428</div>
                            <div class="kpi-label" style="color: rgba(255,255,255,0.9);">Total Servicios Este Año</div>
                        </div>
                        
                        <div class="kpi-card" style="background: linear-gradient(135deg, var(--amarillo), var(--amarillo-hover));">
                            <div class="kpi-icon" style="background: white; margin-bottom: 16px;">
                                <i class="fas fa-chart-line" style="color: var(--amarillo);"></i>
                            </div>
                            <div class="kpi-value">$250M</div>
                            <div class="kpi-label">Facturación Total</div>
                        </div>
                        
                        <div class="kpi-card" style="background: linear-gradient(135deg, #10B981, #059669); color: white;">
                            <div class="kpi-icon" style="background: white; margin-bottom: 16px;">
                                <i class="fas fa-smile" style="color: #10B981;"></i>
                            </div>
                            <div class="kpi-value" style="color: white;">96%</div>
                            <div class="kpi-label" style="color: rgba(255,255,255,0.9);">Tasa de Satisfacción</div>
                        </div>
                        
                        <div class="kpi-card" style="background: linear-gradient(135deg, var(--negro), #2a2a2a); color: white;">
                            <div class="kpi-icon" style="background: white; margin-bottom: 16px;">
                                <i class="fas fa-users" style="color: var(--negro);"></i>
                            </div>
                            <div class="kpi-value" style="color: white;">58</div>
                            <div class="kpi-label" style="color: rgba(255,255,255,0.9);">Clientes Activos</div>
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
