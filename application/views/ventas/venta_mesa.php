<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InventSoft - Ventas en Mesa</title>
    <?php require_once("componentes/head.php"); ?>
</head>
<body style="background-color: black !important;">

  <div class="position-absolute w-100 min-height-300 top-0 " style="background-image: url(''); background-position-y: 50%; background-repeat: no-repeat; background-size: 100%">
    <span class=""></span>
  </div>
  <div class="main-content position-relative max-height-vh-100 h-100">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="<?php echo base_url(); ?>clientes/inicio">InventSoft</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Ventas en mesa</li>
          </ol>
          
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-1 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
          <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell cursor-pointer"></i><span class="badge text-bg-dark">1</span>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                           <li class="mb-2">
                              <a class="dropdown-item border-radius-md" href="javascript:;">
                                 <div class="d-flex py-1">
                                    <div class="my-auto">
                                       <img src="https://clinicasaludmadreymujer.saludmadreymujer.com/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
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
                                       <img src="https://clinicasaludmadreymujer.saludmadreymujer.com/public/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
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
              </li>
            </ul>
            <li class="nav-item d-flex align-items-center">
              <a href="<?php echo base_url(); ?>cerrarsesionclientes" class="nav-link text-white font-weight-bold px-0">
                <!-- <i class="fa fa-user me-sm-1"></i> -->
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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <!-- <p class="mb-0 h6 text-uppercase">Sistema de Ventas</p> -->
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-9 mt-4">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link active"
                        id="home-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#home-tab-pane"
                        type="button"
                        role="tab"
                        aria-controls="home-tab-pane"
                        aria-selected="true"
                      >
                        BEBIDAS
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link"
                        id="profile-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#profile-tab-pane"
                        type="button"
                        role="tab"
                        aria-controls="profile-tab-pane"
                        aria-selected="false"
                      >
                        HAMBURGUESAS
                       </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link"
                        id="contact-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#contact-tab-pane"
                        type="button"
                        role="tab"
                        aria-controls="contact-tab-pane"
                        aria-selected="false"
                      >
                        PERROS CALIENTES
                       </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link"
                        id="disabled-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#disabled-tab-pane"
                        type="button"
                        role="tab"
                        aria-controls="disabled-tab-pane"
                        aria-selected="false"
                        
                      >
                        PAPAS LOCAS
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link"
                        id="disabled-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#disabled-tab-pane"
                        type="button"
                        role="tab"
                        aria-controls="disabled-tab-pane"
                        aria-selected="false"
                        
                      >
                        ADICIONALES
                      </button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div
                      class="tab-pane fade show active"
                      id="home-tab-pane"
                      role="tabpanel"
                      aria-labelledby="home-tab"
                      tabindex="0"
                    >
                      <div class="col-md-3 mb-2 mt-5">
                        <div class="card card-bordered shadow-none text-center h-100">
                          <div class="card-pinned">
                            <img
                              class=" img-fluid"
                              src="<?php echo base_url();?>public/productos/hamburguesa.png"
                              alt="Image Description"
                              width="170px;"
                            >
                            <div class="codigo_producto" hidden>1234</div>
             
                          </div>
                          <div class="card-body">
                            <a class="text-body" href="#">Hamburguesa mediana</a>
                            <p class="card-text text-dark">$9000</p>
                          </div>
                          <div class="card-footer pt-0">
                            <a
                              type="button"
                              class="btn btn-outline-danger btn-sm rounded-pill btn_agregar_carrito"
                            >
                              Agregar al pedido
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="profile-tab-pane"
                      role="tabpanel"
                      aria-labelledby="profile-tab"
                      tabindex="0"
                    >
                      <div class="col-md-3 mb-2 mt-5">
                        <div class="card card-bordered shadow-none text-center h-100">
                          <div class="card-pinned">
                            <img
                              class=" img-fluid"
                              src="<?php echo base_url();?>public/productos/hamburguesa.png"
                              alt="Image Description"
                              width="170px;"
                            >
                            <div class="codigo_producto" hidden>1234</div>
             
                          </div>
                          <div class="card-body">
                            <a class="text-body" href="#">Hamburguesa mediana</a>
                            <p class="card-text text-dark">$9000</p>
                          </div>
                          <div class="card-footer pt-0">
                            <a
                              type="button"
                              class="btn btn-outline-danger btn-sm rounded-pill btn_agregar_carrito"
                            >
                              Agregar al pedido
                            </a>
                          </div>
                        </div>
                    </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="contact-tab-pane"
                      role="tabpanel"
                      aria-labelledby="contact-tab"
                      tabindex="0"
                    >
                    <div class="col-md-3 mb-2 mt-5">
                        <div class="card card-bordered shadow-none text-center h-100">
                          <div class="card-pinned">
                            <img
                              class=" img-fluid"
                              src="<?php echo base_url();?>public/productos/hamburguesa.png"
                              alt="Image Description"
                              width="170px;"
                            >
                            <div class="codigo_producto" hidden>1234</div>
             
                          </div>
                          <div class="card-body">
                            <a class="text-body" href="#">Hamburguesa mediana</a>
                            <p class="card-text text-dark">$9000</p>
                          </div>
                          <div class="card-footer pt-0">
                            <a
                              type="button"
                              class="btn btn-outline-danger btn-sm rounded-pill btn_agregar_carrito"
                            >
                              Agregar al pedido
                            </a>
                          </div>
                        </div>
                    </div>
                    </div>
                    <div
                      class="tab-pane fade"
                      id="disabled-tab-pane"
                      role="tabpanel"
                      aria-labelledby="disabled-tab"
                      tabindex="0"
                    >
                    <div class="col-md-3 mb-2 mt-5">
                        <div class="card card-bordered shadow-none text-center h-100">
                          <div class="card-pinned">
                            <img
                              class=" img-fluid"
                              src="<?php echo base_url();?>public/productos/hamburguesa.png"
                              alt="Image Description"
                              width="170px;"
                            >
                            <div class="codigo_producto" hidden>1234</div>
             
                          </div>
                          <div class="card-body">
                            <a class="text-body" href="#">Hamburguesa media</a>
                            <p class="card-text text-dark">$9000</p>
                          </div>
                          <div class="card-footer pt-0">
                            <a
                              type="button"
                              class="btn btn-outline-danger btn-sm rounded-pill btn_agregar_carrito"
                            >
                              Agregar al pedido
                            </a>
                          </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="col-md-3 mb-4">
                  <div class="card card-pricing">
                    <div
                      class="card-header bg-gradient-dark text-center pt-4 pb-5 position-relative"
                    >
                      <div class="z-index-1 position-relative">
                        <h6 class="text-white">TOTAL PEDIDO</h6>
                        <h1 class="text-white mt-2 mb-0" id="ventaa">
                        <small id="compracero">$0 </small>
                        <small class="total-compra" id="total-compra" hidden></small>
                        </h1>
                      </div>
                    </div>
                  <div class="position-relative mt-n5" style="height: 50px;">
                  <div class="position-absolute w-100">
                    <svg class="waves waves-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                  <defs>
                    <path id="card-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                  </defs>
                  <g class="moving-waves">
                    <use xlink:href="#card-wave" x="48" y="-1" fill="rgba(255,255,255,0.30"></use>
                    <use xlink:href="#card-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
                    <use xlink:href="#card-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
                    <use xlink:href="#card-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
                    <use xlink:href="#card-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
                    <use xlink:href="#card-wave" x="48" y="16" fill="rgba(255,255,255,0.99)"></use>
                  </g>
                </svg>
              </div>
            </div>
            <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Sede</label>
                    <input type="text" class="form-control form-control-sm" value="Sede terminal" id="sede" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>N° de venta</label>
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      value=""
                      id="consecutivo"
                      readonly
                    >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Nro Mesa</label>
                    <select
                      class="form-control form-control-sm"
                      id="tp_pago"
                    >
                    <option value="">1</option>
                    </select>
                  </div>
                </div>
              </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   </div>
  </div>
  <?php require_once("componentes/footer.php"); ?>
</div>

  <?php require_once("componentes/scripts.php"); ?>
  <script>
    var baseurl = "<?php echo base_url();?>";
  </script>
  <script src="<?php echo base_url(); ?>public/js/scripts/ventas2.js"></script>
</body>
</html>