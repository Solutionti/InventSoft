<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InventSoft - Organigrama</title>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script src='fullcalendar/dist/index.global.js'></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var baseurl = "<?php echo base_url();?>";
      let respuesta = baseurl + "ventas/getdataCalendario";
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
        initialView: 'dayGridMonth',
        themeSystem: 'bootstrap5',
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
       
       eventSources: {
         url: respuesta,
         method: "GET",
         color: "green"
       },
       editable: false,
       eventClick: function(info){
        var texto = info.event.title;
        var cadena = texto.split(" || ");
        var tipo_cancha = $("#tipo_cancha_act").val(cadena[1]),
            estado = $("#estado_act").val(cadena[3]),
            fecha = $("#fecha_act").val(),
            hora = $("#hora_act").val(),
            nombre = $("#nombre_act").val(cadena[0]),
            comentarios = $("#comentarios_act").val(cadena[2]);
            
        $("#editarorganigrama").modal("show");
       }
      });
        calendar.render();
    });
  </script>
  
    <?php require_once("componentes/head.php"); ?>
</head>

<body style="background-color: #1e2040 !important;">
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url(''); background-position-y: 50%; background-repeat: no-repeat; background-size: 100%">
    <span class=""></span>
  </div>
  <div class="main-content position-relative max-height-vh-100 h-100">
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">InventSoft</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Organigrama</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Organigrama</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="<?php echo base_url(); ?>cerrarsesionclientes" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Cerrar Sesión</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php require_once("componentes/navbar.php");?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0 h6 text-uppercase">Organigrama de partidos futbol </p>
                <button class="btn btn-primary text-white btn-xs ms-auto" data-bs-toggle="modal" href="#Agregarusuario" role="button"> <i class="fas fa-plus"></i> Agregar</button>
              </div>
            </div>
            <div class="card-body">
              <div class="col-md-12">

                  <div id='calendar'></div>
              </div>
            </div>
          </div>
          <?php require_once("componentes/footer.php"); ?>
        </div>

 <!-- MODAL AGREGAR ORGANIGRAMA -->
 <div class="modal fade" id="Agregarusuario" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-default">
        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Agregar Organigrama</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5">
            <div class="form-group input-group-sm">
            <label>Tipo de Cancha</label>
            <select
              class="form-control"
              id="tipo_cancha"
            >
              <option value="">SELECCIONE UN TIPO DE CANCHA</option>
              <option value="Futbol 5">Futbol 5</option>
              <option value="Futbol 9">Futbol 9</option>
            </select>
            <div id="validationServer03Feedback" class="invalid-feedback">
              Campo obligatorio
            </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label>Estado</label>
              <select 
                class="form-control form-control-sm"
                id="estado"
              >
                <option value="Confirmada">Confirmada</option>
                <option value="En juego">En juego</option>
                <option value="Cancelada">Cancelada</option>
              </select>
              
            </div>              
          </div>
          <div class="col-md-3">
            <div class="form-group input-group-sm">
              <label>Fecha</label>
              <input
                type="date"
                class="form-control"
                id="fecha"
                value="<?php echo date("Y-m-d"); ?>"
              >
              <div id="validationServer03Feedback" class="invalid-feedback">
                Campo obligatorio
              </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group input-group-sm">
              <label>Hora</label>
              <input
                type="time"
                class="form-control"
                id="hora"
                value="<?php echo date("Y-m-d"); ?>"
              >
              <div id="validationServer03Feedback" class="invalid-feedback">
                Campo obligatorio
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group input-group-sm">
              <label>Nombre</label>
              <input
                type="text"
                class="form-control"
                id="nombre"
              >
              <div id="validationServer03Feedback" class="invalid-feedback">
                Campo obligatorio
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group input-group-sm">
              <label>Documento</label>
              <input
                type="text"
                class="form-control"
                id="documento"
              >
              <div id="validationServer03Feedback" class="invalid-feedback">
                Campo obligatorio
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group input-group-sm">
              <label>Celular</label>
              <input
                type="number"
                class="form-control"
                id="celular"
                min="0"
              >
              <div id="validationServer03Feedback" class="invalid-feedback">
                Campo obligatorio
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        
        <div class="form-group input-group-sm">
            <label>Comentarios</label>
            <textarea
              class="form-control"
              id="comentarios"
            ></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn color-cyan text-white"
          id="crearorganigrama"
        >
          Guardar
        </button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- MODAL EDITAR ORGANIGRAMA -->
<div class="modal fade" id="editarorganigrama" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-default">
        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Actualizar Organigrama</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-5">
            <div class="form-group input-group-sm">
            <label>Tipo de Cancha</label>
            <select
              class="form-control"
              id="tipo_cancha_act"
            >
              <option value="">SELECCIONE UN TIPO DE CANCHA</option>
              <option value="Futbol 5">Futbol 5</option>
              <option value="Futbol 9">Futbol 9</option>
            </select>
            <div id="validationServer03Feedback" class="invalid-feedback">
              Campo obligatorio
            </div>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label>Estado</label>
              <select 
                class="form-control form-control-sm"
                id="estado_act"
              >
                <option value="Confirmada">Confirmada</option>
                <option value="En juego">En juego</option>
                <option value="Cancelada">Cancelada</option>
                <option value="Eliminar">Eliminar</option>
              </select>
              
            </div>              
          </div>
          <div class="col-md-5">
            <div class="form-group input-group-sm">
              <label>Nombre</label>
              <input
                type="text"
                class="form-control"
                id="nombre_act"
              >
              <div id="validationServer03Feedback" class="invalid-feedback">
                Campo obligatorio
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group input-group-sm">
            <label>Comentarios</label>
            <textarea
              class="form-control"
              id="comentarios_act"
            ></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn color-cyan text-white"
          id="actualizarorganigrama"
        >
          Guardar
        </button>
      </div>
    </div>
  </div>
</div>

  <?php require_once("componentes/scripts.php"); ?>
  <script>
    var baseurl = "<?php echo base_url();?>";
  </script>
  <script src="<?php echo base_url(); ?>public/js/scripts/organigrama.js?v=1.0.0"></script>
  
   
</body>
</html>