const botonTecnico = document.getElementById('botonTecnico');
// const exampleModal = document.getElementById('exampleModal');
// const exampleModal = bootstrap.Modal.getOrCreateInstance(modalElement);


botonTecnico.addEventListener('click', function(e){
    e.preventDefault();

    const frmtecnico = document.getElementById('frmtecnico');

    // Validación básica de campos vacíos
    let tecnico = document.getElementById('tecnico').value.trim();
    let especialidad = document.getElementById('especialidad').value.trim();
    let trab_activos = document.getElementById('trab_activos').value.trim();
    let trab_completos = document.getElementById('trab_completos').value.trim();

    if (tecnico === "" || especialidad === "" || trab_activos === "" || trab_completos === "") {
      // alert("Por favor, complete todos los campos.");

     Swal.fire({
        icon: "error",
        title: "Los campos son requeridos",
        text: "llenar los campos!",
        
     });

      return;
    }
    
    let datos = new FormData(frmTecnico);
    
    const url = 'Controller/Ctl_tecnico.php?operacion=Guardar';

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
                    window.location.href = "tecnicos.php"; // Redirige a la página deseada
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