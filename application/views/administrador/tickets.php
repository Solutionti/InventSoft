<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administracion / Tickets</title>
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tickets</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Tickets</h6>
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
                        <p class="text-xs text-secondary mb-0">
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
                        <p class="text-xs text-secondary mb-0">
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
                        <p class="text-xs text-secondary mb-0">
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
       <div class="col-md-2">
         <div class="form-group">
           <label>Consecutivo</label>
           <input type="text" class="form-control form-control-sm">           
         </div>
       </div>
       <div class="col-md-3">
         <div class="form-group">
           <label>Usuario</label>
           <input type="text" class="form-control form-control-sm">           
         </div>
       </div>
       <div class="col-md-3">
         <div class="form-group">
           <label>Area Encargada</label>
           <input type="text" class="form-control form-control-sm">           
         </div>
       </div>
       <div class="col-md-4">
         <div class="form-group">
           <label>Correo Electronico</label>
           <input type="text" class="form-control form-control-sm">           
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-12">
         <div class="form-group">
           <label>Especifique el Requerimiento</label>
           <textarea rows="2" class="form-control"></textarea>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-12">
         <div class="form-group">
           <label>Resolución que lo soporta</label>
           <textarea rows="2" class="form-control"></textarea>
         </div>
       </div>
     </div>
     <div class="row">
         <div class="col-md-4">
             <div class="form-group">
                 <label>Url1 soporte</label>
                 <input type="text" class="form-control form-control-sm">
             </div>
         </div>
         <div class="col-md-4">
             <div class="form-group">
                 <label>Url2 soporte</label>
                 <input type="text" class="form-control form-control-sm">

             </div>
         </div>
         <div class="col-md-4">
             <div class="form-group">
                 <label>Url3 soporte</label>
                 <input type="text" class="form-control form-control-sm">
             </div>
         </div>
     </div>
     <h6>Datos del Desarrollador</h6>
     <hr>
     <div class="row">
       <div class="col-md-2">
         <div class="form-group">
           <label>Estado</label>
           <select class="form-control form-control-sm">
               <option value="">Seleccione</option>
               <option>Asignado</option>
               <option>En desarrollo</option>
               <option>Finalizado</option>
               <option>Rechazado</option>
           </select>
         </div>
       </div>
       <div class="col-md-2">
         <div class="form-group">
           <label>Horas Desa</label>
           <input type="text" class="form-control form-control-sm">
         </div>
       </div>
       <div class="col-md-2">
         <div class="form-group">
           <label>Complejidad</label>
           <select class="form-control form-control-sm">
               <option value="">Seleccione</option>
               <option value="">Baja</option>
               <option value="">Media</option>
               <option value="">Alta</option>
               <option value="">Muy dificil</option>
           </select>
         </div>
       </div>
       <div class="col-md-3">
         <div class="form-group">
           <label>Fecha Probable de Entrega</label>
           <input type="date" class="form-control form-control-sm">
         </div>
       </div>
       <div class="col-md-3">
         <div class="form-group">
           <label>Fecha Final</label>
           <input type="date" class="form-control form-control-sm">
         </div>
       </div>
       <div class="row">
       <div class="col-md-12">
           <button class="btn btn-primary">Actualizar</button>
           <button class="btn btn-success">Chat</button>
       </div>
       </div>
     </div>
  </div>
     <?php require_once("componentes/footer.php"); ?>
    </div>
  </main>
  <?php require_once("componentes/personalizar.php"); ?>

  <!-- LARGE MODAL -->

  <div class="modal fade" id="AgregarPaciente" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-fullscreen" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <h5 class="modal-title text-uppercase" id="exampleModalLabel">Crear colposcopia</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
   
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" method="POST" action="<?php echo base_url(); ?>administracion/crearcolposcopia">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group input-group-sm">
                    <label>DNI</label>
                    <input type="number" id="dni" name="dni" class="form-control" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group input-group-sm">
                    <label>Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" >
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-md-6">
                <div class="form-group input-group-sm">
                    <label>Fecha</label>
                    <input type="date" class="form-control" name="fecha">
                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group input-group-sm">
                 <label>Medico</label>
                 <select  name="medico" class="form-control">
                   <option value="<?php echo $this->session->userdata("nombre")." ".$this->session->userdata("apellido"); ?>"><?php echo $this->session->userdata("nombre")." ".$this->session->userdata("apellido"); ?></option>
                 </select>
              </div>
            </div>
         </div>

         <div class="row">
        <div class="col-md-4">
                <div class="form-group input-group-sm">
                 <label>U. escamo columnar</label>
                 <select  name="escamo_columnar" class="form-control">
                   <option value="">Seleccione una opción</option>
                   <option value="Sin lesiones">Sin lesiones</option>
                   <option value="Epitelio blanco">Epitelio Blanco</option>
                   <option value="Mosaico">Mosaico</option>
                   <option value="Puntillado">Puntillado</option>
                   <option value="Leucoplasia">Leucoplasia</option>
                   <option value="Vasos atipicos">Vasos Atipicos</option>
                   <option value="Shiler positivo">Shiler Positivo</option>
                   <option value="Shiler Negativo">Shiler Negativo</option>
                 </select>
                </div>
            </div>
            <div class="col-md-4">
              <div class="form-group input-group-sm">
                 <label>Endo cervix</label>
                 <select name="endocervix" class="form-control">
                   <option value="">Seleccione una opción</option>
                   <option value="Sin lesiones">Sin Lesiones</option>
                   <option value="Ectopia">Ectopia</option>
                   <option value="Mosaico">Mosaico</option>
                   <option value="Puntillado">Puntillado</option>
                   <option value="Epitelio blanco">Epitelio Blanco</option>
                   <option value="Vasos atipicos">Vasos Atipicos</option>
                 </select>
                 
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group input-group-sm">
                 <label>Vagina</label>
                 <select  name="vagina" class="form-control">
                   <option value="">Seleccione una opción</option>
                   <option value="Sin lesiones">Sin Lesiones</option>
                   <option value="Condilomas">Condilomas</option>
                   <option value="Flujo">Flujo</option>
                   <option value="Puntiada">Puntiada</option>
                   <option value="Atrofia">Atrofia</option>
                   <option value="Herpes">Herpes</option>
                   <option value="Ulcera">Ulcera</option>
                 </select>
              </div>
            </div>
         </div>
         <div class="row">
        <div class="col-md-4">
                <div class="form-group input-group-sm">
                    <label>Vulva</label>
                    <select name="vulva" class="form-control">
                      <option value="">Seleccione una opción</option>
                      <option value="Sin lesiones">Sin lesiones</option>
                      <option value="Condilomas">Condilomas</option>
                      <option value="Herpes">Herpes</option>
                      <option value="Nevus">Nevus</option>
                      <option value="Ulcera">Ulcera</option>
                      <option value="Lesion roja">Lesion Roja</option>
                      <option value="Lesion blanca">Lesion Blanca</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
              <div class="form-group input-group-sm">
                 <label>Perineo</label>
                 <select  name="perineo" class="form-control">
                   <option value="">Seleccione una opción</option>
                   <option value="Sin lesiones">Sin lesiones</option>
                   <option value="Condiloma">Condiloma</option>
                 </select>
                 
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group input-group-sm">
                 <label>Region Parianal</label>
                 <select  name="region_parianal" class="form-control">
                 <option value="">Seleccione una opción</option>
                   <option value="Sin lesiones">Sin lesiones</option>
                   <option value="Condiloma">Condiloma</option>
                 </select>

              </div>
            </div>
         </div>
         <div class="row">
        <div class="col-md-6">
                <div class="form-group input-group-sm">
                    <label>Biopsia</label>
                    <select  name="biopsia" class="form-control">
                      <option value="">Seleccione una opción</option>
                      <option value="No">No</option>
                      <option value="Vulva">Vulva</option>
                      <option value="Vagina">Vagina</option>
                      <option value="Cervix">Cervix</option>
                    </select>

                </div>
            </div>
            <div class="col-md-6">
              <div class="form-group input-group-sm">
                 <label>Papanicolaou</label>
                 <select  name="papanicolaou" class="form-control">
                 <option value="">Seleccione una opción</option>
                 <option value="Si">Si</option>
                 <option value="No">No</option>
                 </select>

              </div>
            </div>
         </div>

         <div class="row">
            <div class="col-md-6">
              <div class="form-group input-group-sm">
                <label>Conclusiones</label>
                <textarea  name="conclusiones"  rows="7" class="form-control"></textarea>
              </div>
           </div>
           <div class="col-md-6 mt-3">
             <label for="">Seleccione las imagenes</label>
             <div class="custom-file">
               <input type="file" class="custom-file-input" name="imagen1">
               <label class="custom-file-label">Seleccionar Archivo</label>
             </div>
             <br>
             <br>
             <div class="custom-file">
               <input type="file" class="custom-file-input" name="imagen2" >
               <label class="custom-file-label">Seleccionar Archivo</label>
             </div>
           </div>
         </div>
        </div>
      <div class="modal-footer">
        <input type="submit"  class="btn btn-primary" value="Guardar">
      </div>
      <form>
    </div>
  </div>
</div>

  <?php require_once("componentes/scripts.php"); ?>
  <script src="<?php echo base_url(); ?>public/js/scripts/colposcopia.js"></script>
  
</body>
</html>


