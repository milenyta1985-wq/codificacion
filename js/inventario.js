const botonInven = document.getElementById('botonInven');
// const exampleModal = document.getElementById('exampleModal');
// const exampleModal = bootstrap.Modal.getOrCreateInstance(modalElement);


botonInven.addEventListener('click', function(e){
    e.preventDefault();

    const frmInven = document.getElementById('frmInven');

    // Validación básica de campos vacíos
    let codigo = document.getElementById('codigo').value.trim();
    let nombre = document.getElementById('nombre').value.trim();
    let categoria = document.getElementById('categoria').value.trim();
    let cantidad = document.getElementById('cantidad').value.trim();
    let ubicacion = document.getElementById('ubicacion').value.trim();
    let costo = document.getElementById('costo').value.trim();

    if (codigo === "" || nombre === "" || categoria === "" || cantidad === "" || ubicacion === "" || costo === "") {
      // alert("Por favor, complete todos los campos.");

     Swal.fire({
        icon: "error",
        title: "Los campos son requeridos",
        text: "llenar los campos!",
        
     });

      return;
    }
    
    let datos = new FormData(frmInven);
    
    const url = 'Controller/Ctl_inventario.php?operacion=Guardar';

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
                    window.location.href = "inventario.php"; // Redirige a la página deseada
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