const botonOreden = document.getElementById('botonOreden');
// const exampleModal = document.getElementById('exampleModal');
// const exampleModal = bootstrap.Modal.getOrCreateInstance(modalElement);


botonOreden.addEventListener('click', function(e){
    e.preventDefault();

    const frmOrden = document.getElementById('frmOrden');

    // Validación básica de campos vacíos
    let orden = document.getElementById('orden').value.trim();
    let cliente = document.getElementById('cliente').value.trim();
    let tipo = document.getElementById('tipo').value.trim();
    let prioridad = document.getElementById('prioridad').value.trim();
    let responsable = document.getElementById('responsable').value.trim();
    

    if (orden === "" || cliente === "" || tipo === "" || prioridad === "" || responsable === "") {
      // alert("Por favor, complete todos los campos.");

     Swal.fire({
        icon: "error",
        title: "Los campos son requeridos",
        text: "llenar los campos!",
        
     });

      return;
    }
    
    let datos = new FormData(frmOrden);
    
    const url = 'Controller/Ctl_orden.php?operacion=Guardar';

    fetch(url,{
       method: 'POST',
        body: datos
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        if(data === 'ok'){
            // exampleModal.hide();
          Swal.fire({
                title: "Datos Guardados con Exito",
                icon: "success",
                draggable: true
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "ordenes.php"; // Redirige a la página deseada
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