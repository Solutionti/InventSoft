<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buen Viaje - Inicio</title>
    <?php require_once("componentes/head.php"); ?>
</head>
<body class="g-sidenav-show bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0 bg-default" style="background-image: url(''); background-position-y: 50%; background-repeat: no-repeat; background-size: 100%">
    <span class="mask bg-default opacity-6"></span>
  </div>
  <div class="main-content position-relative max-height-vh-100 h-100">
    <nav
      class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl"
      id="navbarBlur"
      data-scroll="false"
    >
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Buen Viaje</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Inicio</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Inicio</h6>
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
    <?php require_once("componentes/navbar.php"); ?>
    <div class="container-fluid py-4">
      <div class="row">
      <div class="col-md-3">
          <div class="card card-profile">
            <img src="https://cdn.pixabay.com/photo/2015/08/07/16/07/shopping-879498_960_720.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                  <a href="javascript:;">
                    <img src="<?php echo base_url(); ?>public/img/theme/team-41.jpg" class="rounded-circle img-fluid border border-2 border-white">
                    <i class="fas fa-circle text-success mx-1"> </i> En linea
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
              <div class="d-flex justify-content-between">
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="d-flex justify-content-center">
                    <div class="d-grid text-center">
                      <span class="text-lg font-weight-bolder">0</span>
                      <span class="text-sm opacity-8">Ventas</span>
                    </div>
                    <div class="d-grid text-center mx-4">
                      <span class="text-lg font-weight-bolder">0</span>
                      <span class="text-sm opacity-8">Productos</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center mt-4">
                <h5 class="font-weight-light" >
                  <?php echo $this->session->userdata("nombre"); ?><span class="font-weight-light"> <?php echo $this->session->userdata("apellido"); ?></span>
                </h5>
                <div class="h6 font-weight-300 font-weight-light">
                  <i class="ni location_pin mr-2"></i>ultima sesion
                  <small><?php echo date("d-m-Y"); ?></small>
                </div>
                <div class="h6 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?php echo $this->session->userdata("direccion"); ?>
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i><?php echo $this->session->userdata("ocupacion"); ?>
                </div>
              </div>
              <br>
              <br>
            </div>
          </div>
        </div>
        <?php $usuarios = $usuario->result()[0]; ?>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0 text-uppercase">Editar Perfil</p>
                <button class="btn btn-primary btn-sm ms-auto text-white font-weight-bold" id="actualizar-usuario">Guardar</button>
              </div>
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm">Información del usuario</p>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Usuario</label>
                    <input
                      class="form-control"
                      type="text"
                      value="<?php  echo $usuarios->usuario; ?>"
                      readonly
                    >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Correo electronico</label>
                    <input
                      class="form-control"
                      type="email"
                      value="<?php  echo $usuarios->email; ?>"
                      readonly
                    >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Apellidos</label>
                    <input
                      class="form-control"
                      type="text"
                      value="<?php echo $usuarios->apellido; ?>"
                      readonly
                    >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nombres</label>
                    <input
                      class="form-control"
                      type="text"
                      value="<?php echo $usuarios->nombre; ?>"
                      readonly
                    >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group has-validation">
                    <label for="example-text-input" class="form-control-label">Telefono</label>
                    <input
                      class="form-control"
                      type="text"
                      id="telefono"
                      value="<?php  echo $usuarios->telefono; ?>"
                      required
                    >
                    <div class="invalid-feedback">
                      Campo obligatorio
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group has-validation">
                    <label for="example-text-input" class="form-control-label">Dirección</label>
                    <input
                      class="form-control"
                      type="text"
                      id="direccion"
                      value="<?php echo $usuarios->empresa; ?>"
                    >
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Estado</label>
                    <input
                      class="form-control"
                      type="text"
                      value="Activo"
                      readonly
                    >
                  </div>
                </div>
              </div>
              <hr class="horizontal dark">
            </div>
          </div>
        </div>
        <div class="col-md-3">
    <div class="card"> 
      <div class="card-body">
        <p class="text-uppercase text-sm">Notas rapidas <i class="fa-regular fa-note-sticky text-primary"></i></p> 
        <div class="card-body pt-4 p-3">
            <ul class="list-group">
            <li class="border-0 d-flex  bg-gray-100 border-radius-lg">
            <div class="d-flex flex-column">
            <h6 class=" text-sm">Pagar proveedor</h6>
            <span class="mb-2 text-xs">Asunto: <span class="text-dark font-weight-bold ms-sm-0">
                se debe pagar al proveedor de cocacola
            </span></span>
            </div>
            </li>
            </ul>
            </div>
      </div>
    </div>
  </div>
        <?php require_once("componentes/footer.php"); ?>
        <?php require_once("componentes/scripts.php"); ?>
        <script>
          var baseurl = "<?php echo base_url();?>";
        </script>
        <script src="<?php echo base_url(); ?>public/js/scripts/usuarios.js"></script>
</body>
</html>