<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administracion / Citas</title>
  
  <?php require_once("componentes/head.php"); ?>
</head>
<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-default position-absolute w-100"></div>
  <?php require_once("componentes/menu.php"); ?>
  <main class="main-content position-relative border-radius-lg">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">administración</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">citas</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">citas</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="<?php echo base_url(); ?>cerrarsesion" class="nav-link text-white font-weight-bold px-0">
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
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="<?php echo base_url();?>img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-dark mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="<?php echo base_url();?>public/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-dark mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-dark mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-5">
      <div class="row ">
      <div class="card">
     <div class="row mt-4">
       <div class="col-md-12">
       <a class="btn bg-gradient-danger btn-xs" data-bs-toggle="modal" href="#AgregarPaciente" role="button">Agregar <i class="fas fa-plus"></i> </a>
       <a class="btn bg-gradient-info btn-xs" target="blank" href="<?php echo base_url(); ?>administracion/calendario" >Todas las citas <i class="fas fa-calendar"></i> </a>
       </div>
     </div>
        <br>  
  <div class="table-responsive" >
    <table class="table align-items-center table-borderless mb-0 text-uppercase" id="table-citas">
      <thead>
        <tr>
        <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Opciones</th>
        <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Estado</th>
        <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Documento</th>
        <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Nombre</th>
        <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Telefono</th>
        <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Medico</th>
        <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Fecha</th>
        <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Hora</th>

        </tr>
      </thead>
      <tbody>
      <?php foreach($cita->result() as $citas) { ?>
                    <tr>
                    <td class="">
              <div class="row">
                <a 
                class="icon icon-shape icon-sm me-2 bg-gradient-info shadow mx-3"
                
                onclick="editarCita(<?php echo $citas->codigo_cita; ?>);"  
                >
                <i class="fas fa-pen text-white opacity-10"></i>
              </a>
          </div>
        </td>
                        <?php if($citas->estado == "Confirmado"){ ?>
                      <td class="text-xs text-dark mb-0 text-success"><?php echo  $citas->estado; ?></td>
                        <?php } else if ($citas->estado == "Pendiente") { ?>
                      <td class="text-xs text-dark mb-0 text-primary"><?php echo  $citas->estado; ?></td>
                        <?php } else if ($citas->estado == "Cancelado"){ ?>
                      <td class="text-xs text-dark mb-0 text-danger"><?php echo  $citas->estado; ?></td>
                          <?php } else if ($citas->estado == "Tratado"){ ?>
                      <td class="text-xs text-dark mb-0 text-info"><?php echo  $citas->estado; ?></td>
                        <?php } ?>
                        <td class="text-xs text-dark mb-0"><?php echo  $citas->documento; ?></td>
                        <td class="text-xs text-dark mb-0"><?php echo  $citas->apellido." ".$citas->nombre; ?></td>
                        <td class="text-xs text-dark mb-0"><?php echo  $citas->telefono; ?></td>
                        <td class="text-xs text-dark mb-0"><?php echo  $citas->doctor; ?></td>
                        <td class="text-xs text-dark mb-0"><?php echo  $citas->fecha; ?></td>
                        <td class="text-xs text-dark mb-0"><?php echo  $citas->hora; ?></td>
                    </tr>
                    <?php } ?>
      </tbody>
    </table>
    <br>
  </div>
</div>
     <?php require_once("componentes/footer.php"); ?>
    </div>
  </main>
  <?php require_once("componentes/personalizar.php"); ?>

  <!-- LARGE MODAL -->
 <!-- VENTANAS MODALES -->
 <div class="modal fade" id="AgregarPaciente" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear cita</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="messageError"></div>
        <div class="row">
        
            <div class="col-md-4">
                <div class="form-group input-group-sm">
                    <label>DNI</label>
                    <input type="number" class="form-control" id="dni">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group input-group-sm">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="nombre">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group input-group-sm">
                    <label>Medico</label>
                    <select class="form-control" id="medico">
                    <option value="">Seleccione un doctor</option>
                    <?php foreach($doctor->result() as $doctores) { ?>
                      <option value="<?php echo $doctores->codigo_doctor; ?>"><?php echo $doctores->nombre." (".$doctores->perfil." )"; ?></option>   
                    <?php } ?>
                    </select>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="form-group input-group-sm">
                 <label>Fecha</label>
                 <input type="date" class="form-control" id="fecha" min="<?php echo date("Y-m-d"); ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group input-group-sm">
                <label>Horas disponibles</label>
                  <select class="form-control" id="hora">
                    <option value="">Seleccione una hora</option>
                    <option value="08:00">8:00 AM a 8:30 AM </option>
                    <option value="08:30">8:30 AM a 9:00 AM </option>
                    <option value="09:00">9:00 AM a 9:30 AM </option>
                    <option value="09:30">9:30 AM a 10:00 AM </option>
                    <option value="10:00">10:00 AM a 10:30 AM </option>
                    <option value="10:30">10:30 AM a 11:00 AM </option>
                    <option value="11:00">11:00 AM a 11:30 AM </option>
                    <option value="11:30">11:30 AM a 12:00 AM </option>
                    <option value="12:00">12:00 PM a 12:30 pm</option>
                    <option value="12:30">12:30 PM a 1:00 PM </option>
                    <option value="13:00">1:00 PM a 1:30 PM </option>
                    <option value="13:30">1:30 PM a 2:00 PM </option>
                    <option value="14:00">2:00 PM a 2:30 PM </option>
                    <option value="14:30">2:30 PM a 3:00 PM </option>
                    <option value="15:00">3:00 PM a 3:30 PM </option>
                    <option value="15:30">3:30 PM a 4:00 PM </option>
                    <option value="16:00">4:00 PM a 4:30 PM </option>
                    <option value="16:30">4:30 PM a 5:00 PM </option>
                    <option value="17:00">5:00 PM a 5:30 PM </option>
                    <option value="17:30">5:30 PM a 6:00 PM </option>
                    <option value="18:00">6:00 PM a 6:00 PM </option>
                  </select>
              </div>
            </div>
            
         </div>
         <div class="row">
            <div class="col-md-6">
              <div class="form-group input-group-sm">
                <label>Estado Cita</label>
                  <select class="form-control" id="estado">
                   <option value="Pendiente">Pendiente</option>
                   <option value="Confirmado">Confirmado</option>
                   <option value="Tratado">Tratado</option>
                   <option value="Cancelado">Cancelado</option>
                  </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group input-group-sm">
                <label>observaciones</label>
                  <input type="text" class="form-control" id="observaciones">
              </div>
            </div>
         </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="crearcita">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- EDITAR CITA -->

<div class="modal fade" id="modaleditarcita" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar cita</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="messageError"></div>
        <div class="row">
        <div class="col-md-4" hidden>
                <div class="form-group input-group-sm" >
                    <label>id</label>
                    <input type="number" class="form-control" id="id2" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group input-group-sm">
                    <label>DNI</label>
                    <input type="number" class="form-control" id="dni2" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group input-group-sm">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="nombre2" readonly>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group input-group-sm">
                    <label>Medico</label>
                    <select class="form-control" id="medico2">
                    <option value="">Seleccione un doctor</option>
                    <?php foreach($doctor->result() as $doctores) { ?>
                      <option value="<?php echo $doctores->codigo_doctor; ?>"><?php echo $doctores->nombre." (".$doctores->perfil." )"; ?></option>   
                    <?php } ?>
                    </select>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="form-group input-group-sm">
                 <label>Fecha</label>
                 <input type="date" class="form-control" id="fecha2" min="<?php echo date("Y-m-d"); ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group input-group-sm">
                <label>Horas disponibles</label>
                  <select class="form-control" id="hora2">
                    <option value="">Seleccione una hora</option>
                    <option value="08:00">8:00 AM a 8:30 AM </option>
                    <option value="08:30">8:30 AM a 9:00 AM </option>
                    <option value="09:00">9:00 AM a 9:30 AM </option>
                    <option value="09:30">9:30 AM a 10:00 AM </option>
                    <option value="10:00">10:00 AM a 10:30 AM </option>
                    <option value="10:30">10:30 AM a 11:00 AM </option>
                    <option value="11:00">11:00 AM a 11:30 AM </option>
                    <option value="11:30">11:30 AM a 12:00 AM </option>
                    <option value="12:00">12:00 PM a 12:30 pm</option>
                    <option value="12:30">12:30 PM a 1:00 PM </option>
                    <option value="13:00">1:00 PM a 1:30 PM </option>
                    <option value="13:30">1:30 PM a 2:00 PM </option>
                    <option value="14:00">2:00 PM a 2:30 PM </option>
                    <option value="14:30">2:30 PM a 3:00 PM </option>
                    <option value="15:00">3:00 PM a 3:30 PM </option>
                    <option value="15:30">3:30 PM a 4:00 PM </option>
                    <option value="16:00">4:00 PM a 4:30 PM </option>
                    <option value="16:30">4:30 PM a 5:00 PM </option>
                    <option value="17:00">5:00 PM a 5:30 PM </option>
                    <option value="17:30">5:30 PM a 6:00 PM </option>
                    <option value="18:00">6:00 PM a 6:00 PM </option>
                  </select>
              </div>
            </div>
            
         </div>
         <div class="row">
            <div class="col-md-6">
              <div class="form-group input-group-sm">
                <label>Estado Cita</label>
                  <select class="form-control" id="estado2">
                   <option value="Pendiente">Pendiente</option>
                   <option value="Confirmado">Confirmado</option>
                   <option value="Tratado">Tratado</option>
                   <option value="Cancelado">Cancelado</option>
                  </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group input-group-sm">
                <label>observaciones</label>
                  <input type="text" class="form-control" id="observaciones2">
              </div>
            </div>
         </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="editarcitas">Editar</button>
      </div>
    </div>
  </div>
</div>

  <?php require_once("componentes/scripts.php"); ?>
  <script src="<?php echo base_url(); ?>public/js/scripts/citas.js"></script>
  
</body>
</html>