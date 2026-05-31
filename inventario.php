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

                <!-- INVENTARIO PAGE -->
                <div id="page-inventario" class="page-content">
                    <div class="card-header" style="margin-bottom: 24px;">
                        <div>
                            <h1 style="font-size: 24px; margin-bottom: 4px;">Inventario y Equipos</h1>
                            <p class="card-description">Gestione repuestos y equipos registrados</p>
                        </div>
                        <div>
                            <button class="btn btn-primary">
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
                                    <tr>
                                        <td><strong style="color: var(--azul-rey);">REP-001</strong></td>
                                        <td>Motor Eléctrico 5HP</td>
                                        <td><span class="badge badge-info">Motores</span></td>
                                        <td>5 / 3</td>
                                        <td style="font-size: 12px; color: var(--gris-texto);">Bodega A - Estante 12</td>
                                        <td>$450,000</td>
                                        <td><span class="badge badge-success">Normal</span></td>
                                        <td><button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Editar</button></td>
                                    </tr>
                                    <tr>
                                        <td><strong style="color: var(--azul-rey);">REP-002</strong></td>
                                        <td>Compresor de Refrigeración</td>
                                        <td><span class="badge badge-info">Refrigeración</span></td>
                                        <td style="color: #EF4444; font-weight: 600;">2 / 3</td>
                                        <td style="font-size: 12px; color: var(--gris-texto);">Bodega B - Estante 5</td>
                                        <td>$1,200,000</td>
                                        <td><span class="badge badge-danger">Stock Bajo</span></td>
                                        <td><button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Editar</button></td>
                                    </tr>
                                    <tr>
                                        <td><strong style="color: var(--azul-rey);">REP-003</strong></td>
                                        <td>Cable UTP Cat 6</td>
                                        <td><span class="badge badge-info">Cableado</span></td>
                                        <td>150 / 50</td>
                                        <td style="font-size: 12px; color: var(--gris-texto);">Bodega A - Estante 3</td>
                                        <td>$2,500</td>
                                        <td><span class="badge badge-success">Normal</span></td>
                                        <td><button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Editar</button></td>
                                    </tr>
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

    <script src="app.js"></script>
</body>
</html>
