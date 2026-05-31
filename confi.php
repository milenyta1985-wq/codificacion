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

                <!-- CONFIGURACION PAGE -->
                <div id="page-configuracion" class="page-content">
                    <div>
                        <h1 style="font-size: 24px; margin-bottom: 4px;">Configuración del Sistema</h1>
                        <p class="card-description" style="margin-bottom: 24px;">Gestione usuarios, permisos y parámetros del sistema</p>
                    </div>

                    <div class="tabs">
                        <div class="tab-list">
                            <button class="tab-button active">Usuarios</button>
                            <button class="tab-button">Notificaciones</button>
                            <button class="tab-button">Seguridad</button>
                            <button class="tab-button">Sistema</button>
                            <button class="tab-button">Empresa</button>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <div>
                                <h3 class="card-title">Gestión de Usuarios</h3>
                                <p class="card-description">Administre usuarios y sus roles en el sistema</p>
                            </div>
                            <div>
                                <button class="btn btn-primary">
                                    <i class="fas fa-user-plus"></i> Nuevo Usuario
                                </button>
                            </div>
                        </div>

                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Email</th>
                                        <th>Rol</th>
                                        <th>Estado</th>
                                        <th>Último Acceso</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Admin Usuario</strong></td>
                                        <td>admin@empresa.com</td>
                                        <td><span class="badge" style="background: var(--azul-rey); color: white;">Administrador</span></td>
                                        <td><span class="badge badge-success">Activo</span></td>
                                        <td style="font-size: 12px; color: var(--gris-texto);">2026-02-13 08:30</td>
                                        <td><button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Editar</button></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Juan Pérez</strong></td>
                                        <td>juan.perez@empresa.com</td>
                                        <td><span class="badge" style="background: #6B7280; color: white;">Técnico</span></td>
                                        <td><span class="badge badge-success">Activo</span></td>
                                        <td style="font-size: 12px; color: var(--gris-texto);">2026-02-13 10:15</td>
                                        <td><button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Editar</button></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Carlos Supervisor</strong></td>
                                        <td>carlos.supervisor@empresa.com</td>
                                        <td><span class="badge" style="background: var(--amarillo); color: var(--negro);">Supervisor</span></td>
                                        <td><span class="badge badge-success">Activo</span></td>
                                        <td style="font-size: 12px; color: var(--gris-texto);">2026-02-13 09:00</td>
                                        <td><button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Editar</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <h3 class="card-title" style="margin-bottom: 16px;">Roles y Permisos</h3>
                        
                        <div style="padding: 16px; border: 2px solid var(--gris-medio); border-radius: 8px; margin-bottom: 16px;">
                            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 12px;">
                                <div>
                                    <h4 style="font-size: 16px; margin-bottom: 4px;">Administrador</h4>
                                    <p style="font-size: 14px; color: var(--gris-texto);">Acceso total al sistema</p>
                                </div>
                                <div>
                                    <button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Configurar</button>
                                </div>
                            </div>
                            <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                                <span class="badge badge-info">Dashboard</span>
                                <span class="badge badge-info">Clientes</span>
                                <span class="badge badge-info">Órdenes</span>
                                <span class="badge badge-info">Calendario</span>
                                <span class="badge badge-info">Técnicos</span>
                                <span class="badge badge-info">Inventario</span>
                                <span class="badge badge-info">Reportes</span>
                                <span class="badge badge-info">Configuración</span>
                            </div>
                        </div>

                        <div style="padding: 16px; border: 2px solid var(--gris-medio); border-radius: 8px; margin-bottom: 16px;">
                            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 12px;">
                                <div>
                                    <h4 style="font-size: 16px; margin-bottom: 4px;">Supervisor</h4>
                                    <p style="font-size: 14px; color: var(--gris-texto);">Gestión operativa</p>
                                </div>
                                <div>
                                    <button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Configurar</button>
                                </div>
                            </div>
                            <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                                <span class="badge badge-info">Dashboard</span>
                                <span class="badge badge-info">Clientes</span>
                                <span class="badge badge-info">Órdenes</span>
                                <span class="badge badge-info">Calendario</span>
                                <span class="badge badge-info">Técnicos</span>
                                <span class="badge badge-info">Reportes</span>
                            </div>
                        </div>

                        <div style="padding: 16px; border: 2px solid var(--gris-medio); border-radius: 8px;">
                            <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 12px;">
                                <div>
                                    <h4 style="font-size: 16px; margin-bottom: 4px;">Técnico</h4>
                                    <p style="font-size: 14px; color: var(--gris-texto);">Acceso limitado a órdenes asignadas</p>
                                </div>
                                <div>
                                    <button class="btn btn-primary" style="padding: 6px 12px; font-size: 12px;">Configurar</button>
                                </div>
                            </div>
                            <div style="display: flex; gap: 8px; flex-wrap: wrap;">
                                <span class="badge badge-info">Dashboard</span>
                                <span class="badge badge-info">Órdenes</span>
                                <span class="badge badge-info">Calendario</span>
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
