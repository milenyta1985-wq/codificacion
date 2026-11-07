const botonCliente = document.getElementById('botonCliente');


botonCliente.addEventListener('click', function(e){
    e.preventDefault();

    const frmCliente = document.getElementById('frmCliente');

    // Validación básica de campos vacíos
    let empresa = document.getElementById('empresa').value.trim();
    let telefono = document.getElementById('telefono').value.trim();
    let correo = document.getElementById('correo').value.trim();
    let tipo = document.getElementById('tipo').value.trim();
    let servicio = document.getElementById('servicio').value.trim();

    if (empresa === "" || telefono === "" || correo === "" || tipo === "" || servicio === "") {
      // alert("Por favor, complete todos los campos.");

     Swal.fire({
        icon: "error",
        title: "Los campos son requeridos",
        text: "llenar los campos!",
        
     });

      return;
    }
    
    let datos = new FormData(frmCliente);
    
    const url = 'Controller/Ctl_usuarios.php?operacion=Guardar';

    fetch(url,{
       method: 'POST',
        body: datos
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        if(data === 'ok'){
          Swal.fire({
                title: "Datos Guardados con Exito",
                icon: "success",
                draggable: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "clientes.php"; // Redirige a la página deseada
                }
            }); 
        }else{
            Swal.fire({
                icon: "error",
                title: "Error al guardar",
                text: "Intente de Nuevo!",
            });
        }

          // data.window.location = 'clientes.php';
    })
})