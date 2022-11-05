<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buen Viaje - Devoluciones</title>
    <?php require_once("componentes/head.php"); ?>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://cdn.pixabay.com/photo/2020/10/01/17/11/store-5619201_960_720.jpg'); background-position-y: 50%; background-repeat: no-repeat; background-size: 100%">
    <span class="mask bg-default opacity-6"></span>
  </div>
  <div class="main-content position-relative max-height-vh-100 h-100">
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Buen Viaje</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Proveedores</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Proveedores</h6>
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
                <p class="mb-0 h6 text-uppercase">Proveedores</p>
                <button class="btn btn-primary text-white btn-xs ms-auto" data-bs-toggle="modal" href="#Agregarusuario" role="button"> <i class="fas fa-plus"></i> Agregar</button>
              </div>
            </div>
            <div class="card-body">
             <div class="table-responsive">
               <table class="table table-responsive table-hover">
                 <thead class="bg-default">
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Opciones</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">nit / documento</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Nombre</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Telefono</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">correo</th>
                 </thead>
                 <tbody>
                 
                 </tbody>
               </table>
             </div>
            </div>
          </div>
          <?php require_once("componentes/footer.php"); ?>
        </div>

 <!-- MODAL AGREGAR PROVEEDORES -->
 <div class="modal fade" id="Agregarusuario" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Agregar Proveedores</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group input-group-sm">
            <label>NIT / Documento</label>
            <input
                type="text"
                class="form-control"
                id="nit_proveedores"
              >
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <label>Nombre</label>
              <input
                type="text"
                id="nom_proveedores"
                class="form-control form-control-sm"
              >
            </div>              
          </div>
          <div class="col-md-3">
            <div class="form-group input-group-sm">
              <label>Telefono</label>
              <input
                type="text"
                class="form-control"
<<<<<<< HEAD
                id="fecha"  
                
              >
=======
                id="tel_proveedores">
>>>>>>> 21dc38a4235305f56edc45671e28b55c87ae34f4
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-9">
            <div class="form-group input-group-sm">
              <label>Correo</label>
              <input
                type="text"
                class="form-control"
                id="correo_proveedores"
              >
            </div>
          </div>
        </div>
<<<<<<< HEAD
=======
        <div class="form-group input-group-sm">
            <label>Descripciòn</label>
            <textarea
              class="form-control"
              id="desc_proveedores"
            ></textarea>
        </div>
>>>>>>> 21dc38a4235305f56edc45671e28b55c87ae34f4
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn color-cyan text-white"
          id="crearproveedor"
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
  <script src="<?php echo base_url(); ?>public/js/scripts/proveedores.js"></script>
</body>
</html>