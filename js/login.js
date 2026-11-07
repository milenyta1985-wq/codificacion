const botonL = document.getElementById('botonL');
// const mensajes = document.getElementById('mensaje');

botonL.addEventListener('click', function(e){
    e.preventDefault();

    const frmL = document.getElementById('frmL');

    // Validación básica de campos vacíos
    let correo = document.getElementById('correo').value.trim();
    let clave = document.getElementById('clave').value.trim();

    if (correo === "" || clave === "") {
      // alert("Por favor, complete todos los campos.");

     Swal.fire({
        icon: "error",
        title: "Los campos son requeridos",
        text: "llenar los campos!",
        
     });

      return;
    }
    
    // let datos = new FormData(frmAgenda);

     let datos = new FormData(frmL);
    
    const url = 'Controller/Login.php';

    fetch(url,{
         method: 'POST',
        body: datos
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        if(data === 'rolUno'){
           Swal.fire({
                title: "Acceso Concedido",
                icon: "success",
                draggable: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "principio.php"; // Redirige a la página deseada
                }
            });
         }else if(data === 'rolDos'){
           Swal.fire({
                title: "Acceso Concedido",
                icon: "success",
                draggable: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "principio.php"; // Redirige a la página deseada
                }
            });
        }else if(data === 'error'){
           Swal.fire({
                icon: "error",
                title: "Error de acceso",
                text: "Intente de Nuevo!",
            });
        }

          // data.window.location = 'clientes.php';
    })
})