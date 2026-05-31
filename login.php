<?php
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

if($usuario == "admin" || $clave == "admin"){
header("location: principio.php");
}else{
    echo '<script>alert("Usuario o Contraseña incorrecta");  window.location = "index.php";<script>';
}




?>