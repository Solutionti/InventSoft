<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos por categoria</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fontawesome/css/fontawesome.css">
    <link href="<?php echo base_url(); ?>public/fontawesome/css/brands.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/fontawesome/css/solid.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>public/css/overhang.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap">
    <link rel="stylesheet" href="https://htmlstream.com/preview/front-v4.2/html/assets/css/vendor.min.css">
    <link rel="stylesheet" href="https://htmlstream.com/preview/front-v4.2/html/assets/css/theme.min.css?v=1.0">
</head>
<body style="background-color: black;">
<header id="header" class="navbar navbar-expand-lg navbar-end navbar-light">
    <!-- End Topbar -->
    <div class="container">
      <nav class="js-mega-menu navbar-nav-wrap">
        <a class="navbar-brand" href="#" aria-label="Front">
          <img 
            class="navbar-brand-logo" 
            src="https://www.sosfactory.com/wp-content/uploads/2016/12/icon-restaurant-bolat-min.png"
          >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-default">
            <i class="fas fa-bars"></i>
          </span>
          <span class="navbar-toggler-toggled">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link active text-white" href="<?php echo base_url(); ?>ecommerce/inicio">Inicio</a>
            </li>
            <li class="hs-has-sub-menu nav-item">
              <a id="listingsDropdown" class="hs-mega-menu-invoker nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
              <div class="hs-sub-menu dropdown-menu" aria-labelledby="listingsDropdown" style="min-width: 14rem;">
              <?php foreach($categoria->result() as $categorias){ ?>
                <a class="dropdown-item " href="<?php echo base_url(); ?>ecommerce/productoscategoria/<?php echo $categorias->codigo_categoria; ?>"><?php echo $categorias->nombre; ?></a>
              <?php } ?>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../demo-shop/product-overview.html">Productos mas vendidos</a>
            </li>
            
            <li class="nav-item">
              <button class="btn btn-ghost-secondary btn-sm btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarSearch" aria-controls="offcanvasNavbarSearch">
                <i class="fas fa-search text-white"></i>
              </button>
              <button
                type="button"
                class="btn btn-ghost-secondary btn-sm btn-icon"
                data-toggle="modal"
                data-target="#staticBackdrop"
                aria-hidden="true" 
              >
              <i class="fas fa-shopping-basket text-white"></i>
              </button>
              <button class="btn btn-primary btn-transition btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#signupModal">Rastrear pedido</button>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->
  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <div class="position-relative">
      <div class="js-swiper-shop-classic-hero swiper bg-black">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="container content-space-t-2 content-space-b-3">
              <div class="row align-items-lg-center">
                <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                  <div class="mb-6">
                    <h1 class="display-4 mb-4 text-white">Hamburguesas doble carne</h1>
                    <p class="text-white">
                      As well as being game-changers when it comes to technical innovation,
                      Front has some of the bestselling cap in its locker.
                    </p>
                  </div>
                  <div class="d-flex gap-2">
                    <a class="btn btn-primary rounded-pill" href="#">$59 - Add to cart</a>
                    <a class="btn btn-outline-primary btn-icon rounded-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for later">
                      <i class="bi-heart-fill"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                  <div class="w-75 mx-auto">
                    <img
                      class="img-fluid"
                      src="https://www.pngplay.com/wp-content/uploads/2/Burger-Transparent-Images.png"
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container content-space-t-2 content-space-b-3">
              <div class="row align-items-lg-center">
                <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                  <div class="mb-6">
                    <h2 class="display-4 mb-4 text-white">Papas locas Full</h2>
                    <p class="text-white">It's all new, all screen, and all powerful. Completely redesigned and packed with our most advanced technology, it will make you rethink what iPad is capable of.</p>
                  </div>
                  <div class="d-flex gap-2">
                    <a class="btn btn-primary rounded-pill" href="#">$799 - Add to cart</a>
                    <a class="btn btn-outline-primary btn-icon rounded-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for later">
                      <i class="bi-heart-fill"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                  <div class="w-75 mx-auto">
                    <img class="img-fluid" src="https://weblab1.axesa.net/laspapalocas2/wp-content/uploads/sites/4/2022/03/papas.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container content-space-t-2 content-space-b-3">
              <div class="row align-items-lg-center">
                <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                  <div class="mb-6">
                    <h3 class="display-4 mb-4 text-white">Perros calientes</h3>
                    <p class="text-white">Founded in 1985, French label Celio channels 30 years of expertise into its contemporary menswear range. Expect fly style for a city or beach with its denim shorts, chinos and printed jersey.</p>
                  </div>

                  <div class="d-flex gap-2">
                    <a class="btn btn-primary rounded-pill" href="#">$10k - agregar carrito</a>
                    <a class="btn btn-outline-primary btn-icon rounded-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for later">
                      <i class="bi-heart-fill"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                  <div class="w-75 mx-auto text-center">
                    <img
                      class="img-fluid"
                      src="https://www.pngplay.com/wp-content/uploads/7/Hot-Dog-No-Background.png"
                      width="320px;"
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="js-swiper-shop-classic-hero-button-next swiper-button-next"></div>
        <div class="js-swiper-shop-classic-hero-button-prev swiper-button-prev"></div>
      </div>
      <div class="position-absolute bottom-0 start-0 end-0 mb-3">
        <div class="js-swiper-shop-hero-thumbs swiper" style="max-width: 13rem;">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a class="js-swiper-thumb-progress swiper-thumb-progress-avatar" href="javascript:;" tabindex="0">
                <img class="swiper-thumb-progress-avatar-img" src="https://www.pngplay.com/wp-content/uploads/2/Burger-Transparent-Images.png" alt="Image Description">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="js-swiper-thumb-progress swiper-thumb-progress-avatar" href="javascript:;" tabindex="0">
                <img class="swiper-thumb-progress-avatar-img" src="https://weblab1.axesa.net/laspapalocas2/wp-content/uploads/sites/4/2022/03/papas.png" alt="Image Description">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="js-swiper-thumb-progress swiper-thumb-progress-avatar" href="javascript:;" tabindex="0">
                <img class="swiper-thumb-progress-avatar-img" src="https://www.pngplay.com/wp-content/uploads/7/Hot-Dog-No-Background.png" alt="Image Description">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="container my-5">
    <hr class="w-header my-4 pb-2">
    <div class="row">
      <?php foreach($productosc->result() as $productos){ ?>
        <div class="col-md-3 mb-4">
          <div class="card card-bordered shadow-none text-center h-100">
            <div class="card-pinned">
              <img
                class="card-img-top img-fluid"
                src="<?php echo base_url();?>public/productos/<?php echo $productos->url_imagen; ?>"
                alt="Image Description"
              >
              <div class="codigo_producto" hidden><?php echo $productos->codigo; ?></div>
              <div class="card-pinned-top-start">
                <span class="badge bg-danger rounded-pill"><?php echo $productos->categorias; ?></span>
              </div>
              <div class="card-pinned-top-end">
                <button
                  type="button"
                  class="btn btn-outline-secondary btn-xs btn-icon rounded-circle"
                  data-bs-toggle="tooltip"
                  data-bs-placement="top"
                  title="Agregar a favoritos"
                >
                  <i class="fas fa-heart"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="mb-1">
                <a class="link-sm link-secondary"><?php echo $productos->categorias; ?></a>
              </div>
              <a class="text-body" href="#"><?php echo $productos->nombre; ?></a>
              <p class="card-text text-dark">$<?php echo $productos->precio; ?></p>
            </div>
            <div class="card-footer pt-0">
              <a class="d-inline-flex align-items-center mb-3" href="#">
                <div class="d-flex gap-1 me-2">
                  <img src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                  <img src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                  <img src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                  <img src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                  <img src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                </div>
              </a>
              <a
                type="button"
                class="btn btn-outline-danger btn-sm rounded-pill btn_agregar_carrito"
              >
                Agregar al carrito
              </a>
              <a
                type="button"
                class="btn btn-outline-primary btn-sm rounded-pill mt-2"
                data-toggle="modal"
                data-target="#basicExampleModal"
                aria-hidden="true"
                onclick="getDataModalProduct(<?php echo $productos->codigo_producto; ?>)"
              >
                Ver
              </a>
            </div>
          </div>
        </div>
        <?php } ?>
    </div>
  </section>
</div>
<!-- MODAL DEL CARRITO -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">TU CARRITO DE COMPRAS</h1>
        <button type="button" class="btn-close" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container my-5 py-3 z-depth-1 rounded">
<section class="dark-grey-text">
  <div class="table-responsive">
  <div class="text-center" id="CarritoVacio">

  </div>
    <table class="table product-table mb-0" id="sincarrito">
      <thead class="mdb-color lighten-5">
        <tr>
          <th></th>
          <th class="font-weight-bold">
            <strong>Producto</strong>
          </th>
          
          <th></th>
          <th class="font-weight-bold">
            <strong>Precio</strong>
          </th>
          <th class="font-weight-bold">
            <strong>Cantidad</strong>
          </th>
          
          <th></th>
        </tr>
      </thead>
      <tbody class="tbody">
      
      </tbody>
      <tr>
            <td colspan="3"></td>
            <td>
              <h4 class="mt-2">
                <strong>Total</strong>
              </h4>
            </td>
            <td class="text-right">
              <h4 class="mt-2">
                <strong class="itemCartTotal"></strong>
              </h4>
            </td>
            <td colspan="3" class="text-right">
              <a type="button" class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#detalle_pedido">Pasar a pedido
                <i class="fas fa-angle-right right"></i>
              </a>
            </td>
          </tr>
    </table>
  </div>
</section>
</div>
      </div>
      
    </div>
  </div>
</div>

<!-- DETALLE DEL PEDIDO -->
<div class="modal fade" id="detalle_pedido" tabindex="-1" aria-labelledby="detalle_pedidoLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="detalle_pedidoLabel">PASAR A PEDIDO</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container mt-5">
  <section class="dark-grey-text">
  	<div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-8">
            <ul class="nav md-pills nav-justified pills-primary font-weight-bold">
              <li class="nav-item">
                <a 
                  class="nav-link active"
                  data-toggle="tab"
                  href="#tabCheckoutBilling123"
                  role="tab"
                >
                  1. Datos del envio
                </a>
              </li>
              <!-- <li class="nav-item">
                <a 
                  class="nav-link" 
                  data-toggle="tab" 
                  href="#tabCheckoutPayment123" 
                  role="tab"
                >
                  2. Pagos
                </a>
              </li> -->
            </ul>
            <div class="tab-content pt-4">
              <div class="tab-pane fade in show active" id="tabCheckoutBilling123" role="tabpanel">
                <form>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="firstName" class="">Nombres (*)</label>
                      <input 
                        type="text"
                        class="form-control "
                        id="nombres_pedido"
                        onchange="validarCampos()"
                      >
                      <div class="invalid-feedback">
                        Ingrese su nombre.
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                      <label for="lastName" class="">Apellidos (*)</label>
                      <input
                        type="text"
                        class="form-control"
                        id="apellidos_pedido"
                        onchange="validarCampos()"
                      >
                      <div class="invalid-feedback">
                        Ingrese su apellido.
                      </div>
                    </div>
                  </div>
                  <label for="email" class="">Celular (*)</label>
                  <input
                    type="number"
                    class="form-control mb-2"
                    id="celular_pedido"
                    onchange="validarCampos()"
                  >
                  <div class="invalid-feedback">
                    Ingrese su numero de celular.
                  </div>
                  <label for="address" class="">Dirección (*)</label>
                  <input
                    type="text"
                    class="form-control mb-2"
                    id="direccion_pedido"
                    onchange="validarCampos()"
                  >
                  <div class="invalid-feedback">
                    Ingrese la direccion a llegar el pedido.
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-12 mb-4">
                      <label for="country">Departamento</label>
                      <select
                        class="form-control d-block w-100"
                        required
                        disabled
                        id="departamento_pedido"
                      >
                        <option>TOLIMA</option>
                      </select>
                      <div class="invalid-feedback">
                        Por favor seleccione el departamento.
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                      <label for="state">Municipio</label>
                      <select
                        class="form-control d-block w-100"
                        required
                        disabled
                        id="municipio_pedido"
                        >
                        <option>IBAGUE</option>
                      </select>
                      <div class="invalid-feedback">
                        Por favor seleccione el municipio.
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-4">
                      <label for="zip">Sede (*)</label>
                      <select
                        class="form-control d-block w-100"
                        required 
                        id="sede_pedido"
                        onchange="validarCampos()"
                      >
                        <option value="">SELECCIONA LA SEDE MAS CERCANA A TI</option>
                        <option value="SEDE PRINCIPAL (BARRIO AMBALA)">SEDE PRINCIPAL (BARRIO AMBALA)</option>
                      </select>
                      <div class="invalid-feedback">
                        Por favor seleccione la sede mas cercana.
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label>¿Alguna sugerencia a tu pedido?</label>
                      <textarea
                        rows="3"
                        class="form-control"
                        id="sugerencia_pedido"
                      ></textarea>
                    </div>
                  </div>
                <div class="d-block my-3">
                  <h6>¿Como deseas hacer el pago?</h6>
                  <div class="mb-2">
                    <input
                      name="group2"
                      type="radio"
                      class="form-check-input with-gap"
                      id="pago_pedido"
                      value="NEQUI"
                      onchange="validarCampos()"
                    >
                    <label class="form-check-label" for="pago_pedido">Nequi</label>
                  </div>
                  <div class="mb-2">
                    <input
                      name="group2"
                      type="radio"
                      class="form-check-input with-gap"
                      id="pago_pedido"
                      value="BANCARIA"
                      onchange="validarCampos()"
                    >
                    <label class="form-check-label" for="pago_pedido">Transferencia bancaria</label>
                  </div>
                  <div class="mb-2">
                    <input
                      name="group2"
                      type="radio"
                      class="form-check-input with-gap"
                      id="pago_pedido"
                      value="CONTRAENTREGA"
                      onchange="validarCampos()"
                    >
                    <label class="form-check-label" for="pago_pedido">Pago contra entrega</label>
                    <div class="invalid-feedback">
                      Seleccione metodo de pago.
                    </div>
                  </div>
                </div>
                  <hr>
                  <div class="mb-1">
                    <input
                      type="checkbox"
                      class="form-check-input filled-in"
                      id="chekboxRules"
                    >
                    <label class="form-check-label" for="chekboxRules">Acepto los términos y condiciones</label>
                  </div>
                  <div class="mb-1">
                    <input
                      type="checkbox"
                      class="form-check-input filled-in"
                      id="safeTheInfo"
                    >
                    <label class="form-check-label" for="safeTheInfo">Guarda para la próxima vez</label>
                  </div>
                  <hr>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <button
              class="btn btn-primary btn-lg btn-block"
              type="button"
              onclick="agragarOrdenPedido()"
            >
              Hacer pedido
            </button>
            <div class="card z-depth-0 border border-light rounded-0">
              <div class="card-body">
                <h4 class="mb-4 mt-1 h5 text-center font-weight-bold text-uppercase">Detalle del pedido</h4>
                <hr>
                <dl class="row contenido_detalle" id="contenido_detalle">
                  <pre>
                    
                  </pre>
                </dl>
                <hr>
                <dl class="row">
                  <dt class="col-sm-8">
                    Total del pedido
                  </dt>
                  <dt class="col-sm-4 itemCartTotalDetalle">
                    
                  </dt>
                </dl>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
      </div>
      
    </div>
  </div>
</div>

 <!--  -->
 <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="row">
              <div class="col-lg-4">
                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                  data-ride="carousel">
                  <div class="carousel-inner text-center text-md-left" role="listbox">
                    <div class="carousel-item active text-center" id="imagen_producto">
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 text-center text-md-left">
                <h4
                  class="h4-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4 " id="text_nombre_producto">
                  
                </h4>
                <span class="text-danger product mb-2 ml-xl-0 ml-4" id="text_categoria_producto"></span>
                <h4 class="h3-responsive text-center text-md-left  ml-xl-0 ml-4">
                  <span class="red-text font-weight-bold" id="text_precio_producto">
                    
                  </span>
                  <!-- <span class="grey-text">
                    <small>
                      <s>$89</s>
                    </small>
                  </span> -->
                </h4>
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                  <div class="card">
                    <div class="card-header" role="tab" id="headingOne1">
                      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                        aria-controls="collapseOne1">
                        <h5 class="mb-0">
                          Descripción
                          <i class="fas fa-angle-down rotate-icon"></i>
                        </h5>
                      </a>
                    </div>
                    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                      data-parent="#accordionEx">
                      <p class="text-justify" id="text_descripcion_producto">
                      </p>
                    </div>
                  </div>
                </div>
                <section class="color">
                  <div class="mt-2">
                    <div class="row mt-3">
                      <div class="col-md-12 text-center text-md-left text-md-right" id="boton_agregar_carrito">
                        
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<script src="<?php echo base_url();?>./public/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>./public/js/asclepio.min.js"></script>
<script src="<?php echo base_url(); ?>public/js/scripts/ecommerce.js"></script>
<script src="<?php echo base_url(); ?>public/js/overhang.min.js"></script>
<!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Implementing Plugins -->
  <script src="https://htmlstream.com/preview/front-v4.2/html/assets/js/vendor.min.js"></script>

  <!-- JS Front -->
  <script src="https://htmlstream.com/preview/front-v4.2/html/assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF MEGA MENU
      // =======================================================
      new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      new HSShowAnimation('.js-animation-link')


      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
          data.event.preventDefault()
          alert('Submited')
        }
      })


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')


      // INITIALIZATION OF SWIPER
      // =======================================================
      var sliderThumbs = new Swiper('.js-swiper-shop-hero-thumbs', {
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        history: false,
        slidesPerView: 3,
        spaceBetween: 15,
        on: {
          beforeInit: (swiper) => {
            const css = `.swiper-slide-thumb-active .swiper-thumb-progress .swiper-thumb-progress-path {
                  opacity: 1;
                  -webkit-animation: ${swiper.originalParams.autoplay.delay}ms linear 0ms forwards swiperThumbProgressDash;
                  animation: ${swiper.originalParams.autoplay.delay}ms linear 0ms forwards swiperThumbProgressDash;
              }`
              style = document.createElement('style')
            document.head.appendChild(style)
            style.type = 'text/css'
            style.appendChild(document.createTextNode(css));

            swiper.el.querySelectorAll('.js-swiper-thumb-progress')
            .forEach(slide => {
              slide.insertAdjacentHTML('beforeend', '<span class="swiper-thumb-progress"><svg version="1.1" viewBox="0 0 160 160"><path class="swiper-thumb-progress-path" d="M 79.98452083651917 4.000001576345426 A 76 76 0 1 1 79.89443752470656 4.0000733121155605 Z"></path></svg></span>')
            })
          },
        },
      });

      var swiper = new Swiper('.js-swiper-shop-classic-hero',{
        autoplay: true,
        loop: true,
        navigation: {
          nextEl: '.js-swiper-shop-classic-hero-button-next',
          prevEl: '.js-swiper-shop-classic-hero-button-prev',
        },
        thumbs: {
          swiper: sliderThumbs
        }
      });


      // INITIALIZATION OF COUNTDOWN
      // =======================================================
      const oneYearFromNow = new Date()

      document.querySelectorAll('.js-countdown').forEach(item => {
        const days = item.querySelector('.js-cd-days'),
          hours = item.querySelector('.js-cd-hours'),
          minutes = item.querySelector('.js-cd-minutes'),
          seconds = item.querySelector('.js-cd-seconds')

        countdown(oneYearFromNow.setFullYear(
          oneYearFromNow.getFullYear() + 1),
          ts => {
            days.innerHTML = ts.days
            hours.innerHTML = ts.hours
            minutes.innerHTML = ts.minutes
            seconds.innerHTML = ts.seconds
          },
          countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS
        )
      })
    })()
  </script>
  <script>
    var baseurl = "<?php echo base_url();?>";
  </script>
</body>
</html>