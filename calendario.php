<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimientos Industriales - Sistema de Gestión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                              <section class="agenda-container">
                                    <div id="calendario"></div>
                                </section>

                      
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


    <div class="modal fade" id="agenda" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 titulos" id="exampleModalLabel">Agendar Cita</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="frmAgendaC">
                    <div class="mb-3">
                        <label for="cliente" class="col-form-label titulo">Cliente:</label>
                        <!-- <input type="hidden" class="form-control campos" id="dia" name="dia" required> -->
                        <input type="text" class="form-control campos" id="cliente" name="cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="servicio" class="col-form-label titulo">Servicios:</label>
                        <select name="servicio" id="servicio" class="form-control campos text-capitalize">
                 
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="col-form-label titulo">Fecha</label>
                        <input type="date" class="form-control campos" id="fecha" name="fecha" required>
                    </div>
                    <div class="mb-3">
                        <label for="hora" class="col-form-label titulo">Hora</label>
                        <input type="time" class="form-control campos" id="hora" name="hora" required>
                    </div>
                    <div class="mb-3">
                   
                        <label for="usuario" class="col-form-label titulo">Empleado del spa:</label>
                        <select name="idusuario" id="idusuario" class="form-control campos text-capitalize">
                
                        </select>
                       
                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btnRP" data-bs-dismiss="modal"><i class="fa-solid fa-x"></i> Cancelar</button>
                        <button id="botonAg" class="botones"><i class="fa-solid fa-save"></i> Guardar Cita</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="app.js"></script>
    <script src="js/calendario.js"></script>
</body>
</html>
