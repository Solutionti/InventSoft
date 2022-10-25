<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion / Pacientes</title>
    <link  rel="icon"  href="<?php echo base_url(); ?>public/img/theme/logo2.ico" type="image/ico" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/argon.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">
	<link href="<?php echo base_url(); ?>public/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/fontawesome/css/brands.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>public/fontawesome/css/solid.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>public/js/calendario/main.css" rel="stylesheet">
</head>
<body>
<div class="container">
          <div class="row">
            <div class="col-md-12">
              <br>
              <div id='calendar'></div>
            </div>         
          </div>
        </div> 

<?php require("componentes/scripts.php"); ?>
  <script>
     
      document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var url1 = baseurl + "administracion/allcitas";
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