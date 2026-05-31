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

                <!-- CALENDARIO PAGE -->
                <div id="page-calendario" class="page-content">
                    <div class="card-header" style="margin-bottom: 24px;">
                        <div>
                            <h1 style="font-size: 24px; margin-bottom: 4px;">Calendario de Programación</h1>
                            <p class="card-description">Visualice y gestione la programación de trabajos</p>
                        </div>
                    </div>

                    <div class="grid grid-2">
                        <div class="card">
                            <div class="calendar-header">
                                <h3 class="calendar-title">Febrero 2026</h3>
                                <div class="calendar-nav">
                                    <button class="btn btn-primary" style="padding: 8px 12px;">
                                        <i class="fas fa-chevron-left"></i>
                                    </button>
                                    <button class="btn btn-primary" style="padding: 8px 12px;">Hoy</button>
                                    <button class="btn btn-primary" style="padding: 8px 12px;">
                                        <i class="fas fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="calendar-grid">
                                <div class="calendar-day-header">Dom</div>
                                <div class="calendar-day-header">Lun</div>
                                <div class="calendar-day-header">Mar</div>
                                <div class="calendar-day-header">Mié</div>
                                <div class="calendar-day-header">Jue</div>
                                <div class="calendar-day-header">Vie</div>
                                <div class="calendar-day-header">Sáb</div>
                                
                                <!-- Days -->
                                <div class="calendar-day"></div>
                                <div class="calendar-day"></div>
                                <div class="calendar-day"></div>
                                <div class="calendar-day"></div>
                                <div class="calendar-day"></div>
                                <div class="calendar-day"></div>
                                <div class="calendar-day">
                                    <div class="calendar-day-number">1</div>
                                </div>
                                <div class="calendar-day">
                                    <div class="calendar-day-number">2</div>
                                </div>
                                <div class="calendar-day">
                                    <div class="calendar-day-number">3</div>
                                </div>
                                <div class="calendar-day">
                                    <div class="calendar-day-number">4</div>
                                </div>
                                <div class="calendar-day">
                                    <div class="calendar-day-number">5</div>
                                </div>
                                <div class="calendar-day">
                                    <div class="calendar-day-number">6</div>
                                </div>
                                <div class="calendar-day">
                                    <div class="calendar-day-number">7</div>
                                </div>
                                <div class="calendar-day">
                                    <div class="calendar-day-number">8</div>
                                </div>
                                <div class="calendar-day">
                                    <div class="calendar-day-number">9</div>
                                </div>
                                <div class="calendar-day">
                                    <div class="calendar-day-number">10</div>
                                    <div class="calendar-events">
                                        <div class="calendar-event-dot"></div>
                                    </div>
                                </div>
                                <div class="calendar-day">
                                    <div class="calendar-day-number">11</div>
                                </div>
                                <div class="calendar-day">
                                    <div class="calendar-day-number">12</div>
                                </div>
                                <div class="calendar-day active today">
                                    <div class="calendar-day-number">13</div>
                                    <div class="calendar-events">
                                        <div class="calendar-event-dot"></div>
                                        <div class="calendar-event-dot"></div>
                                    </div>
                                </div>
                                <div class="calendar-day">
                                    <div class="calendar-day-number">14</div>
                                    <div class="calendar-events">
                                        <div class="calendar-event-dot"></div>
                                        <div class="calendar-event-dot"></div>
                                    </div>
                                </div>
                                <div class="calendar-day">
                                    <div class="calendar-day-number">15</div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <h3 class="card-title" style="margin-bottom: 16px;">Eventos del Día</h3>
                            <p style="color: var(--gris-texto); margin-bottom: 20px; font-size: 14px;">
                                Jueves, 13 de febrero de 2026
                            </p>
                            
                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="fas fa-wrench"></i>
                                </div>
                                <div class="stat-details">
                                    <h4><strong>ORD-1235</strong> - Refrigeración Industrial</h4>
                                    <p>10:30 - Carlos Ruiz - Cali</p>
                                </div>
                            </div>

                            <div class="stat-item">
                                <div class="stat-icon">
                                    <i class="fas fa-network-wired"></i>
                                </div>
                                <div class="stat-details">
                                    <h4><strong>ORD-1236</strong> - Cableado Estructurado</h4>
                                    <p>14:00 - Ana Martínez - Barranquilla</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <h3 class="card-title" style="margin-bottom: 16px;">Disponibilidad de Técnicos</h3>
                        <div class="grid grid-3">
                            <div class="stat-item">
                                <div class="stat-icon" style="background: #10B981;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="stat-details">
                                    <h4>Juan Pérez</h4>
                                    <p>2 trabajos asignados</p>
                                </div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-icon" style="background: #10B981;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="stat-details">
                                    <h4>María López</h4>
                                    <p>1 trabajo asignado</p>
                                </div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-icon" style="background: #EF4444;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div class="stat-details">
                                    <h4>Carlos Ruiz</h4>
                                    <p>3 trabajos asignados</p>
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
