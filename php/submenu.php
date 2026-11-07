<header class="header">
    <div class="header-left">
        <button class="menu-toggle" id="menuToggle">
            <i class="fas fa-bars"></i>
        </button>
        <div class="breadcrumb" id="breadcrumb">Dashboard</div>
    </div>
    
    <div class="header-right">
        <button class="notification-btn">
            <i class="fas fa-bell"></i>
            <span class="notification-badge">3</span>
        </button>
        <p><?php echo $_SESSION['nombre'].' '.$_SESSION['apellido'] ?></p>
        <a class="btn btn-secondary" href="Controller/logout.php" id="logoutBtn">
            <i class="fas fa-sign-out-alt"></i> Salir
        </a>
    </div>
</header>