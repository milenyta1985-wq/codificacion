<?php 
    include 'Model/Tecnico.php';
    $tecnico = new Tecnico('','','','','');
    $row = $tecnico->get();
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

                <!-- TECNICOS PAGE -->
                <div id="page-tecnicos" class="page-content">
                    <div class="card-header" style="margin-bottom: 24px;">
                        <div>
                            <h1 style="font-size: 24px; margin-bottom: 4px;">Gestión de Técnicos</h1>
                            <p class="card-description">Administre el personal técnico y su disponibilidad</p>
                        </div>
                        <div>
                            <button class="btn btn-primary"  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Clientes" data-bs-whatever="@getbootstrap">
                                <i class="fas fa-plus"></i> Nuevo Técnico
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-3">
                        <?php foreach ($row as $i) { ?>
                        <div class="card">
                            <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                                <div style="width: 48px; height: 48px; background: var(--azul-rey); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white;">
                                    <i class="fas fa-user"></i>
                                </div>
                                <div style="flex: 1;">
                                    <h3 style="font-size: 16px; margin-bottom: 2px;"><?php echo $i['tecnico']; ?></h3>
                                    <p style="font-size: 12px; color: var(--gris-texto);"><?php echo $i['especialidad']; ?></p>
                                </div>
                                <div style="width: 12px; height: 12px; background: #10B981; border-radius: 50%;"></div>
                                <div><a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Clientes<?php echo $i['id_tecnico']; ?>" data-bs-whatever="@getbootstrap">👁️</a></div>
                            </div>
                            <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 12px;">
                                <i class="fas fa-star" style="color: #F59E0B;"></i>
                                <span style="font-weight: 600;">4.8</span>
                                <span style="font-size: 12px; color: var(--gris-texto);">(<?php echo $i['trab_activos'] + $i['trab_completos']; ?>)</span>
                            </div>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 8px;">
                                <div style="text-align: center; padding: 8px; background: #DBEAFE; border-radius: 6px;">
                                    <div style="font-size: 18px; font-weight: 600; color: var(--azul-rey);"><?php echo $i['trab_activos']; ?></div>
                                    <div style="font-size: 10px; color: var(--gris-texto);">Activos</div>
                                </div>
                                <div style="text-align: center; padding: 8px; background: #DEF7EC; border-radius: 6px;">
                                    <div style="font-size: 18px; font-weight: 600; color: #10B981;"><?php echo $i['trab_completos']; ?></div>
                                    <div style="font-size: 10px; color: var(--gris-texto);">Completados</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
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
                    <h5 class="modal-title text-dark" id="exampleModalLabel">Nuevo Técnico</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                <div class="modal-body">
                    
                    <form action="Controller/Ctl_tecnico.php" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="text-dark">Tecnico</label>
                                <input type="text" name="tecnico" class="border border-dark" required>
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Especialidad</label>
                                <input type="text" name="especialidad" class="border border-dark" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Trabajo activo</label>
                            <input type="text" name="trab_activos" class="border border-dark" required>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Trabajos Completos</label>
                            <input type="text" name="trab_completos" class="border border-dark" required>
                        </div>
                       
                       
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary">Cancelar</button>
                        <button class="btn btn-primary" name="operacion" value="Guardar">Crear Tecnico</button>
                    </div>
                </form>
            </div>
            </div>
        </div>


        <?php foreach ($row as $i){ ?>

          <div id="Clientes<?php echo $i['id_tecnico']; ?>" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header btnprimary">
                    <h5 class="modal-title text-dark" id="exampleModalLabel">Técnico</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                <div class="modal-body">
                    
                    <form action="Controller/Ctl_tecnico.php" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="text-dark">Tecnico</label>
                                <input type="text" name="id_tecnico" class="border border-dark" required value="<?php echo $i['id_tecnico']; ?>">
                                <input type="text" name="tecnico" class="border border-dark" required value="<?php echo $i['tecnico']; ?>">
                            </div>
                            <div class="form-group">
                                <label class="text-dark">Especialidad</label>
                                <input type="text" name="especialidad" class="border border-dark" required value="<?php echo $i['especialidad']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Trabajo activo</label>
                            <input type="text" name="trab_activos" class="border border-dark" required value="<?php echo $i['trab_activos']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="text-dark">Trabajos Completos</label>
                            <input type="text" name="trab_completos" class="border border-dark" required value="<?php echo $i['trab_completos']; ?>">
                        </div>
                       
                       
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary">Cancelar</button>
                        <button class="btn btn-primary" name="operacion" value="Editar">editar Tecnico</button>
                        <a href="Controller/Ctl_tecnico.php?operacion=Eliminar&id_tecnico=<?php echo $i['id_tecnico']; ?>" class="btn btn-danger">Eliminar</a>
                    </div>
                </form>
            </div>
            </div>
        </div>  

        <?php } ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>



    <script src="app.js"></script>
</body>
</html>
