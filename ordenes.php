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

                <!-- ORDENES PAGE -->
                <div id="page-ordenes" class="page-content">
                    <div class="card-header" style="margin-bottom: 24px;">
                        <div>
                            <h1 style="font-size: 24px; margin-bottom: 4px;">Órdenes de Trabajo</h1>
                            <p class="card-description">Gestione y dé seguimiento a las órdenes</p>
                        </div>
                        <div>
                            <button class="btn btn-primary" onclick="openModal('modalOrden')">
                                <i class="fas fa-plus"></i> Nueva Orden
                            </button>
                        </div>
                    </div>

                    <div class="card">
                        <div style="display: flex; gap: 12px; margin-bottom: 20px; flex-wrap: wrap;">
                            <div class="search-box" style="flex: 1; min-width: 250px; margin: 0;">
                                <i class="fas fa-search"></i>
                                <input type="text" placeholder="Buscar orden o cliente...">
                            </div>
                            <select class="form-input" style="width: auto;">
                                <option>Todas</option>
                                <option>Pendiente</option>
                                <option>En Proceso</option>
                                <option>Finalizada</option>
                                <option>Cancelada</option>
                            </select>
                            <button class="btn btn-primary">
                                <i class="fas fa-download"></i> Exportar
                            </button>
                        </div>

                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Orden</th>
                                        <th>Cliente</th>
                                        <th>Tipo</th>
                                        <th>Prioridad</th>
                                        <th>Estado</th>
                                        <th>Técnico</th>
                                        <th>Fecha</th>
                                        <th>Progreso</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong style="color: var(--azul-rey);">ORD-1234</strong></td>
                                        <td>Industrias ABC S.A.</td>
                                        <td>Preventivo</td>
                                        <td><span style="width: 12px; height: 12px; background: #F59E0B; border-radius: 50%; display: inline-block;"></span></td>
                                        <td><span class="badge badge-info">En Proceso</span></td>
                                        <td>Juan Pérez</td>
                                        <td>2026-02-13</td>
                                        <td>
                                            <div class="progress-bar">
                                                <div class="progress-fill" style="width: 65%;"></div>
                                            </div>
                                        </td>
                                        <td><button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Ver</button></td>
                                    </tr>
                                    <tr>
                                        <td><strong style="color: var(--azul-rey);">ORD-1235</strong></td>
                                        <td>Fábrica XYZ Ltda.</td>
                                        <td>Correctivo</td>
                                        <td><span style="width: 12px; height: 12px; background: #EF4444; border-radius: 50%; display: inline-block;"></span></td>
                                        <td><span class="badge badge-warning">Pendiente</span></td>
                                        <td>María López</td>
                                        <td>2026-02-14</td>
                                        <td>
                                            <div class="progress-bar">
                                                <div class="progress-fill" style="width: 0%;"></div>
                                            </div>
                                        </td>
                                        <td><button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Ver</button></td>
                                    </tr>
                                    <tr>
                                        <td><strong style="color: var(--azul-rey);">ORD-1236</strong></td>
                                        <td>Almacenes DEF</td>
                                        <td>Refrigeración</td>
                                        <td><span style="width: 12px; height: 12px; background: #EF4444; border-radius: 50%; display: inline-block;"></span></td>
                                        <td><span class="badge badge-info">En Proceso</span></td>
                                        <td>Carlos Ruiz</td>
                                        <td>2026-02-13</td>
                                        <td>
                                            <div class="progress-bar">
                                                <div class="progress-fill" style="width: 40%;"></div>
                                            </div>
                                        </td>
                                        <td><button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Ver</button></td>
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
