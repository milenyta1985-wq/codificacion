

document.addEventListener('DOMContentLoaded', function () {

  var calendarEl = document.getElementById('calendario');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: 'dayGridMonth',
    locale: 'es',
    // editable: true,
    // selectable: true,

    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay'
    },
    eventClick:function(info){
        let datos = info.event.extendedProps;
        // document.getElementById('id_uno').value = info.event.id;
        document.getElementById('cliente_uno').value = info.event.title;
        document.getElementById('servicio_uno').value = datos.servicio;
        let fecha = info.event.start;
        document.getElementById('fecha_uno').value = fecha.toISOString().split('T')[0];
        document.getElementById('hora_uno').value = datos.hora;
        document.getElementById('idusuario_uno').value = datos.idusuario;
        // document.getElementById('estado_uno').value = datos.estado;
        myModalEvento.show();
    },
    events: 'http://localhost/spa/model/AgendasP.php',
    dateClick: function(info) {
      // let titulo = prompt("Nueva cita:");

      document.getElementById('fecha').value = info.dateStr;
      myModal.show();
      
    },
    // eventClick:function(calEvent,jsEvent,view){
    

  });

  calendar.render();
});