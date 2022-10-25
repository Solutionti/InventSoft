<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesiòn</title>
    <!-- <link  rel="icon"  href="<?php echo base_url(); ?>public/img/theme/logo2.ico" type="image/ico" /> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-awesome.min.css">
    <link id="pagestyle" href="<?php echo base_url(); ?>public/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
  	<link href="<?php echo base_url(); ?>public/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/fontawesome/css/brands.css" rel="stylesheet">
  	<link href="<?php echo base_url(); ?>public/fontawesome/css/solid.css" rel="stylesheet">
</head>
<style>
    .color-rosa {
      background-color: #CF1B77 !important;
    }
    .color-cyan { 
      background-color: #219B9F !important;
    }
    .cyan-text {
      color: #219B9F !important;
    }
    .rosa-text {
      color: #CF1B77 !important;
    }
  </style>
<body class="">
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  <main class="main-content mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-center">
                  <!-- <img src="<?php echo base_url(); ?>public/img/theme/logo.png" width="90px;" class="img-fluid mb-3"> -->
                  <h5> <span class="text-danger">Buen</span> <span class="text-success"> Viaje</span></h5>
                  <h4 class="font-weight-bolder text-uppercase mt-4">Iniciar Sesión</h4>
                  <p class="mb-0">Ingresa tu usuario y contraseña</p>
                </div>
                <div class="card-body">
                  <div class="messageError mt-2"></div>
                  <form role="form">
                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" id="correo" placeholder="Usuario">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" id="password" placeholder="Contraseña">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">Recordarme</label>
                    </div>
                    <div class="text-center">
                      <button type="button" id="login" class="btn btn-lg btn-success text-white btn-lg w-100 mt-4 mb-0">Ingresar</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <!--<p class="mb-4 text-sm mx-auto">
                    No tienes usuario?
                    <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Solicitar</a>
                  </p>
                  -->
                </div>
              </div>
  <footer class="footer py-3">
    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> SolutionTI
          </p>
        </div>
      </div>
    </div>
  </footer>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-success h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://cdn.pixabay.com/photo/2015/08/07/16/07/shopping-879498_960_720.jpg');
          background-size: cover;">
                <span class="mask  opacity-6"></span>
                <!-- <h3 class="mt-1 text-danger font-weight-bolder position-relative">BUEN  <span class="text-success">VIAJE</span> </h3>
                <p class=" font-weight-bold text-black position-relative">
                  Bienvenido a la plataforma de ventas y inventario todo lo que 
                  tu negocio necesita para llevar sus cuentas.
                </p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script src="<?php echo base_url(); ?>public/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>public/js/argon.js"></script>
  <script>
     var url1 = "<?php echo base_url(); ?>iniciarsesion";
     var baseurl = "<?php echo base_url();?>";
  </script>
  <script src="<?php echo base_url(); ?>public/js/scripts/login.js"></script>
</body>
</html>