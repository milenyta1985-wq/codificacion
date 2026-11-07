const botonS = document.getElementById('botons');
// const botonL = document.getElementById('botonL');
const mensajes = document.getElementById('mensaje');

botonS.addEventListener('click', function(e){
    e.preventDefault();

    const frmAgenda = document.getElementById('frm');

    // Validación básica de campos vacíos
    let nombre = document.getElementById('nombre').value.trim();
    let apellido = document.getElementById('apellido').value.trim();
    let telefono = document.getElementById('telefono').value.trim();
    let correo = document.getElementById('correo').value.trim();
    let clave = document.getElementById('clave').value.trim();

    if (nombre == "" || apellido === "" || telefono === "" || correo === "" || clave === "") {
      // alert("Por favor, complete todos los campos.");

      Swal.fire({
        icon: "error",
        title: "Los campos son requeridos",
        text: "llenar los campos!",
        
     });

      return;
    }
    
    // let datos = new FormData(frmAgenda);

     let datos = new FormData(frmAgenda);
    
    const url = 'Controller/Ctl_registro.php?operacion=Guardar';

    fetch(url,{
        method: 'POST',
        body: datos
    })
    .then(response => response.text())
    .then(data => {
        // console.log(data);
        if(data === 'ok'){
            Swal.fire({
                title: "Datos Guardados con Exito",
                icon: "success",
                draggable: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "index.php"; // Redirige a la página deseada
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


