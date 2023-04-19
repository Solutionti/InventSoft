<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesiòn</title>
    <link rel="icon" href="<?php echo base_url(); ?>public/img/theme/logo.ico" type="image/ico" /> 
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
  
  

  svg#rocket {
    width: 80px;
    position: absolute;
    left: -10px;
    top: -24px;
  }

  svg#rocket-smoke {
    height: calc(100vh - 95px);
    position: absolute;
    top: 10px;
    right: 180px;
    z-index: -10;
  }

  a,
  a:visited,
  a:hover {
    color: #1976d2;
    text-decoration: none;
  }

  a:hover {
    color: #125699;
  }

  .terminal {
    position: relative;
    width: 80%;
   
    border-radius: 6px;
    padding-top: 45px;
    margin-top: 8px;
    overflow: hidden;
    background-color: rgb(15, 15, 16);
  }

  .terminal::before {
    content: "\2022 \2022 \2022";
    position: absolute;
    top: 0;
    left: 0;
    height: 4px;
    background: rgb(58, 58, 58);
    color: #c2c3c4;
    width: 100%;
    font-size: 2rem;
    line-height: 0;
    padding: 14px 0;
    text-indent: 4px;
  }

  .terminal pre {
    font-family: SFMono-Regular,Consolas,Liberation Mono,Menlo,monospace;
    color: white;
    padding: 0 1rem 1rem;
    margin: 0;
  }

  .circle-link {
    height: 40px;
    width: 40px;
    border-radius: 40px;
    margin: 8px;
    background-color: white;
    border: 1px solid #eeeeee;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    transition: 1s ease-out;
  }

  .circle-link:hover {
    transform: translateY(-0.25rem);
    box-shadow: 0px 3px 15px rgba(0, 0, 0, 0.2);
  }

  

  .github-star-badge {
    color: #24292e;
    display: flex;
    align-items: center;
    font-size: 12px;
    padding: 3px 10px;
    border: 1px solid rgba(27,31,35,.2);
    border-radius: 3px;
    background-image: linear-gradient(-180deg,#fafbfc,#eff3f6 90%);
    margin-left: 4px;
    font-weight: 600;
  }

  .github-star-badge:hover {
    background-image: linear-gradient(-180deg,#f0f3f6,#e6ebf1 90%);
    border-color: rgba(27,31,35,.35);
    background-position: -.5em;
  }

  .github-star-badge .material-icons {
    height: 16px;
    width: 16px;
    margin-right: 4px;
  }

  svg#clouds {
    position: fixed;
    bottom: -160px;
    left: -230px;
    z-index: -10;
    width: 1920px;
  }

  /* Responsive Styles */
  @media screen and (max-width: 767px) {
    .card-container > *:not(.circle-link) ,
    .terminal {
      width: 100%;
    }

    

    svg#rocket-smoke {
      right: 120px;
      transform: rotate(-5deg);
    }
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
                  <!-- <img src="<?php echo base_url(); ?>public/img/theme/logo.png" width="50px;" class="img-fluid mb-3"> -->
                  <h3> <span class="text-danger h4 font-weight-bold">Invent</span> <span class="text-default h2 font-weight-bold">Soft</span> </h3>
                  <p class="text-capitalize">Software de ventas y inventarios</p>
                </div>
                <div class="card-body">
                  <h6 class="font-weight-bolder text-uppercase mt-1">Iniciar Sesión</h6>
                <p class="mb-0">Ingresa tu usuario y contraseña</p>
                  <div class="messageError mt-2"></div>
                  <form role="form" method="post" validate id="FormLOG">
                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" id="correo" placeholder="Usuario" required>
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" id="password" placeholder="Contraseña" required>
                    </div>
                    <div class="text-center">
                      <button type="submit" id="login" class="btn btn-lg btn-danger text-white btn-lg w-100 mt-4 mb-0">Ingresar</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    No tienes usuario?
                    <a
                      target="_blank" 
                      href="https://wa.me/+573155639791"
                      class="text-danger text-gradient font-weight-bold"
                    >
                      Solicitar
                    </a>
                  </p>
                 
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
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-success h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('public/img/theme/istockphoto-1419246395-612x612.jpg');
          background-size: cover; background-repeat: no-repeat">
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
  <div class="content" role="main">
  <svg id="clouds" xmlns="http://www.w3.org/2000/svg" width="2611.084" height="485.677" viewBox="0 0 2611.084 485.677">
    <title>Gray Clouds Background</title>
    <path id="Path_39" data-name="Path 39" d="M2379.709,863.793c10-93-77-171-168-149-52-114-225-105-264,15-75,3-140,59-152,133-30,2.83-66.725,9.829-93.5,26.25-26.771-16.421-63.5-23.42-93.5-26.25-12-74-77-130-152-133-39-120-212-129-264-15-54.084-13.075-106.753,9.173-138.488,48.9-31.734-39.726-84.4-61.974-138.487-48.9-52-114-225-105-264,15a162.027,162.027,0,0,0-103.147,43.044c-30.633-45.365-87.1-72.091-145.206-58.044-52-114-225-105-264,15-75,3-140,59-152,133-53,5-127,23-130,83-2,42,35,72,70,86,49,20,106,18,157,5a165.625,165.625,0,0,0,120,0c47,94,178,113,251,33,61.112,8.015,113.854-5.72,150.492-29.764a165.62,165.62,0,0,0,110.861-3.236c47,94,178,113,251,33,31.385,4.116,60.563,2.495,86.487-3.311,25.924,5.806,55.1,7.427,86.488,3.311,73,80,204,61,251-33a165.625,165.625,0,0,0,120,0c51,13,108,15,157-5a147.188,147.188,0,0,0,33.5-18.694,147.217,147.217,0,0,0,33.5,18.694c49,20,106,18,157,5a165.625,165.625,0,0,0,120,0c47,94,178,113,251,33C2446.709,1093.793,2554.709,922.793,2379.709,863.793Z" transform="translate(142.69 -634.312)" fill="#eee"/>
  </svg>
</div>
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