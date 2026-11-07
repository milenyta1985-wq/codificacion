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
                            <h3 style="margin-bottom: 8px;">Reporte de Tecnicos y labor</h3>
                            <p style="font-size: 14px; color: var(--gris-texto); margin-bottom: 12px;">Reporte detallado de todos los mantenimientos realizados</p>
                            <a href="reporteM.php" class="btn btn-primary" style="width: 100%;">Generar Reporte</a>
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
                            <a href="reporteC.php" class="btn btn-primary" style="width: 100%;">Generar Reporte</a>
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
                            <h3 style="margin-bottom: 8px;">Reporte de inventario</h3>
                            <p style="font-size: 14px; color: var(--gris-texto); margin-bottom: 12px;">Resumen de inventario</p>
                            <a href="reporteI.php" class="btn btn-primary" style="width: 100%;">Generar Reporte</a>
                        </div>
                    </div> 
                </div>
            </div>
        </main>
    </div>

    <!-- MODALES -->
    
    <script src="app.js"></script>
</body>
</html>
