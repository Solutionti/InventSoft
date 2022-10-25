<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>administracion/ Mipres</title>
    <?php require_once("componentes/head.php"); ?>
</head>
<body>
<div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-default opacity-6"></span>
  </div>
  
  <div class="main-content position-relative max-height-vh-100 h-100">
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">administracion</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Mipres</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Mipres</h6>
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
    <div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <br>
            <div class="avatar avatar-xl position-relative text-success">
              <img src="<?php echo base_url(); ?>public/img/theme/team-41.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mt-3">Formulario Mipres</h5>
              <button class="btn btn-primary btn-sm">Ver todas</button>
            </div>
          </div>
        </div>
        <br>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                  <label>Usuario</label>
                  <select class="form-control form-control-sm">
                  <option value="">Usuario</option>
                  <option value="">No Usuario</option>
                  </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                  <label>Tipo de Documento</label>
                  <input type="text" class="form-control form-control-sm">
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                  <label>Documento</label>
                  <input type="text" class="form-control form-control-sm">
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group">
                  <label>Consecutivo</label>
                  <input type="text" class="form-control form-control-sm" readonly>
              </div>
            </div>
          </div>
          
          <ul class="nav nav-tabs nav-tabs-horizontal" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Direccionamiento</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">No direccionamiento</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Suministro</button>
  </li>  
   </ul>
   <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show " id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Tipo peticion</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Recepción del pqrs</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Area que radica</label>
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="form-group">
          <label>Respuesta al pqrs</label>
          <textarea class="form-control" rows="5"></textarea>
        </div>
      </div>
    </div>
  </div>

  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <div class="container mt-3">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table align-items-center">
              <thead class="thead-light">
                <tr>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Opciones</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Nombre</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Usuario</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Correo</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Telefono</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">Estado</th>
                </tr>
              </thead>
              <tbody>
              
              </tbody>
            </table>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <div class="container mt-3">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>NIT</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Prestador</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label>Correo</label>
            <input type="text" class="form-control">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Que quieres decirle</label>
            <textarea rows="5" class="form-control"></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10">
          <div class="form-group">
            <input type="file" class="form-control">
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group">
            <button class="btn btn-primary">Crear</button>
            <button class="btn btn-danger" disabled>Actualizar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
          <!-- -->
        </div>
      </div>
    </div>
  <?php require_once("componentes/scripts.php"); ?>
</body>
</html>