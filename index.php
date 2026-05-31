<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body class="body">
        <div id="loginPage" class="login-container">
        <div class="login-box">
            <div class="login-logo">
                <i class="fas fa-industry"></i>
            </div>
            <h1 class="login-title">Mantenimientos Industriales</h1>
            <p class="login-subtitle">Sistema de Gestión Integral</p>
            
            <!-- <form id="loginForm"> -->
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label class="form-label" for="username">
                        <i class="fas fa-user"></i> Usuario
                    </label>
                    <input type="text" id="username" name="usuario" class="form-input" placeholder="Ingrese su usuario" required>
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="password">
                        <i class="fas fa-lock"></i> Contraseña
                    </label>
                    <input type="password" id="password" name="clave" class="form-input" placeholder="Ingrese su contraseña" required>
                </div>
                
                <button type="submit" class="btn btn-primary">
                    Ingresar al Sistema
                </button>
                
                <div class="login-links">
                    <a href="#"><i class="fas fa-key"></i> ¿Olvidó su contraseña?</a>
                    <a href="#"><i class="fas fa-user-plus"></i> Crear cuenta</a>
                </div>
            </form>
            
            <div class="login-footer">
                © 2026 Mantenimientos Industriales. Todos los derechos reservados.
            </div>
        </div>
    </div>
     <script src="app.js"></script>
</body>
</html>
