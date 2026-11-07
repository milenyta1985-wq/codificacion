<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="estilo.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.26.25/sweetalert2.css">
   <script defer src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.26.25/sweetalert2.min.js"></script>
   
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="col-md-8 ocultar">
            <img src="img/logo.m.i.jpeg" class="imagen_login" alt="">
        </div>
        <div class="col-md-4">
            <!-- <div id="loginPage" class="login-container "> -->
                <!-- <div class="login-box"> -->
                    <br><br>
                    <div class="login-logo">
                        <i class="fas fa-industry"></i>
                    </div>
                    <h1 class="login-title">Mantenimientos Industriales</h1>
                    <p class="login-subtitle">Sistema de Gestión Integral</p>
                    
                    
                        <div class="container">
                       
                            <form id="frmL">
                                <div class="form-group">
                                    <label class="form-label" for="username">
                                        <i class="fas fa-user"></i> E-mail
                                    </label>
                                    <input type="email" id="correo" name="correo" class="form-input" placeholder="Ingrese su usuario" required>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label" for="password">
                                        <i class="fas fa-lock"></i> Contraseña
                                    </label>
                                    <input type="password" id="clave" name="clave" class="form-input" placeholder="Ingrese su contraseña" required>
                                </div>
                                
                                <button id="botonL" class="btn btn-primary">
                                    Ingresar al Sistema
                                </button>
                                
                                <div class="login-links">
                                    <a href="#"><i class="fas fa-key"></i> ¿Olvidó su contraseña?</a>
                                    <a href="registrar.php"><i class="fas fa-user-plus"></i> Crear cuenta</a>
                                </div>
                            </form>
                        </div>
                    
                    <div class="login-footer">
                        © 2026 Mantenimientos Industriales. Todos los derechos reservados.
                    </div>
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

     <script src="app.js"></script>
     <script src="js/login.js"></script>
</body>
</html>