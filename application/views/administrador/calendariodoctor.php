<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion / Pacientes</title>
    <?php require_once("componentes/head.php"); ?>
</head>
<body>
<div class="container-fluid">
          <div class="row">
            <div class="col-md-9">
              <br>
              <div id='calendario'></div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <img src="<?php echo base_url(); ?>public/img/theme/team-41.jpg" width="120px;" class="img-fluid mt-4 rounded-circle">
                    <br>
                    <h5>Doctor@</h5>
                    <h4 class="text-uppercase"><?php echo $this->session->userdata("nombre")." ".$this->session->userdata("apellido") ?></h4>
                </div>
                <br>
            </div>          
          </div>
        </div> 

<?php require("componentes/scripts.php"); ?>
  <script>
      document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendario');
      let url1 = baseurl + "administracion/citasmedico";
      var calendar = new FullCalendar.Calendar(calendarEl, {
        
        slotLabelFormat:{
             hour: '2-digit',
             minute: '2-digit',
             hour12: true
             },
         eventTimeFormat: {
               hour: '2-digit',
               minute: '2-digit',
               hour12: true
              },
         eventSources: {
            url: url1,
            method: "GET",
            color: "green"
        },
        initialView: 'dayGridMonth',
        themeSystem: 'bootstrap',
        locale: 'es',
        headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,listWeek',
       },
       buttonText: {
            today:'Hoy',
             month:'Mes',
             week:'Semanal',
             day: 'Dia',
             list: 'Lista'
        },
        allDayText: "Todo el dia",
        height: 580,
          
       });
      calendar.render();
     });
  </script>
</body>
</html>