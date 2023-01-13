<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda virtual</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fontawesome/css/fontawesome.css">
  <link href="<?php echo base_url(); ?>public/fontawesome/css/brands.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap">
    <link rel="stylesheet" href="https://htmlstream.com/preview/front-v4.2/html/assets/css/vendor.min.css">
    <link rel="stylesheet" href="https://htmlstream.com/preview/front-v4.2/html/assets/css/theme.min.css?v=1.0">
</head>
<body style="background-color: black;">
    <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand-lg navbar-end navbar-dark">
    <div class="container ">
      <nav class="js-mega-menu navbar-nav-wrap ">
        <a class="navbar-brand" href="../demo-shop/index.html" aria-label="Front">
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
                <a 
                  class="dropdown-item"
                  href="<?php echo base_url(); ?>ecommerce/productoscategoria/<?php echo $categorias->codigo_categoria; ?>"
                >
                  <?php echo $categorias->nombre; ?>
                </a>
              <?php } ?>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Productos mas vendidos</a>
            </li>
            <!-- <li class="hs-has-mega-menu nav-item" data-hs-mega-menu-item-options='{
                  "desktop": {
                    "position": "right",
                    "maxWidth": "27rem"
                  }
                }'>
              <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle text-white" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Conoce mas</a>
              <div class="hs-mega-menu dropdown-menu" aria-labelledby="pagesMegaMenu" style="min-width: 27rem;">
                <div class="navbar-dropdown-menu-inner">
                  <span class="dropdown-header">Elements</span>

                  <div class="row">
                    <div class="col-sm mb-3 mb-sm-0">
                      <a class="dropdown-item " href="#">Categories</a>
                      <a class="dropdown-item " href="#">Categories Sidebar</a>
                      <a class="dropdown-item " href="#">Empty Cart</a>
                    </div>
                    <div class="col-sm">
                      <a class="dropdown-item " href="#">Cart</a>
                      <a class="dropdown-item " href="#">Checkout</a>
                      <a class="dropdown-item " href="#">Order Completed</a>
                    </div>
                  </div>
                </div>
                <div class="navbar-dropdown-menu-shop-banner">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img class="navbar-dropdown-menu-shop-banner-img" src="https://htmlstream.com/preview/front-v4.2/html/assets/img/mockups/img4.png" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 p-4">
                      <span class="h4 d-block text-primary">Win T-Shirt</span>
                      <p>Win one of our Front brand T-shirts.</p>
                      <a class="btn btn-sm btn-soft-primary btn-transition" href="../index.html">Learn more <i class="bi-chevron-right small"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </li> -->
            <li class="nav-item">
              <button class="btn btn-ghost-secondary btn-sm btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarSearch" aria-controls="offcanvasNavbarSearch">
                <i class="fas fa-search text-white"></i>
              </button>
              <button type="button" class="btn btn-ghost-secondary btn-sm btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarEmptyShoppingCart" aria-controls="offcanvasNavbarEmptyShoppingCart">
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
                    <img class="img-fluid" src="https://laspapaslocas.com/wp-content/uploads/sites/9/2022/04/papas.png" alt="Image Description">
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
                <img class="swiper-thumb-progress-avatar-img" src="https://laspapaslocas.com/wp-content/uploads/sites/9/2022/04/papas.png" alt="Image Description">
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
    <div class="border-bottom">
      <div class="container content-space-2">
        <div class="row">
          <div class="col-md-4 mb-7 mb-md-0">
            <div class="d-flex">
              <div class="flex-shrink-0">
                <img class="avatar avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/illustrations/oc-protected-card.svg" alt="Image Description">
              </div>
              <div class="flex-grow-1 ms-4">
                <h4 class="mb-1 text-white">Pago seguro</h4>
                <p class="small mb-0 text-white">Pago seguro garantizado</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-7 mb-md-0">
            <div class="d-flex">
              <div class="flex-shrink-0">
                <img
                  class="avatar avatar-4x3"
                  src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/illustrations/oc-return.svg"
                  alt="Image Description"
                >
              </div>
              <div class="flex-grow-1 ms-4">
                <h4 class="mb-1 text-white">Tiempos cortos de entrega</h4>
                <p class="small mb-0 text-white"></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="d-flex">
              <div class="flex-shrink-0">
                <img class="avatar avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/illustrations/oc-truck.svg" alt="Image Description">
              </div>
              <div class="flex-grow-1 ms-4">
                <h4 class="mb-1 text-white">Paga en la puerta de tu casa</h4>
                <p class="small mb-0 text-white" >envío estándar gratuito en cada pedido.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container content-space-2 content-space-lg-1">
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2 class="text-white">La mejor manera de comprar con los mejores productos de</h2>
      </div>
      <div class="row mb-2">
      <?php foreach($categoria->result() as $categorias){ ?>
        <div class="col-sm-6 col-md-3 mb-4">
          <div class="card card-bordered shadow-none overflow-hidden">
            <div class="card-body d-flex align-items-center border-bottom p-0">
              <div class="w-65 border-end">
                <img class="img-fluid" src="<?php echo $categorias->url1; ?>" alt="Image Description">
              </div>
              <div class="w-35">
                <div class="border-bottom">
                  <img class="img-fluid" src="<?php echo $categorias->url2; ?>" alt="Image Description">
                </div>
                <img class="img-fluid" src="<?php echo $categorias->url3; ?>" alt="Image Description">
              </div>
            </div>
            <div class="card-footer text-center">
              <h4 class="card-title text-uppercase"><?php echo $categorias->nombre; ?></h4>
              <!-- <p class="card-text text-muted small">Starting from $29.99</p> -->
              <a
                class="btn btn-outline-primary btn-sm btn-transition rounded-pill px-6"
                href="<?php echo base_url(); ?>ecommerce/productoscategoria/<?php echo $categorias->codigo_categoria; ?>"
              >Ver todos</a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="text-center">
        <p class="small text-white">Solo por tiempo limitado, hasta agotar existencias.</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4 mb-md-0">
          <div class="card card-lg bg-img-start" style="background-image: url('https://www.comunicare.es/wp-content/uploads/2021/01/Publicidad-para-hamburguesas.jpg'); min-height: 30rem;">
            <div class="card-body">
              <span class="card-subtitle text-white">Por tiempo limitado</span>
              <h2 class="card-title display-4 text-white">70% OFF</h2>
              <div class="w-md-65">
                <div class="js-countdown row mb-5">
                  <div class="col-4 text-center">
                    <div class="border border-dark rounded-2 p-2 mb-1">
                      <span class="js-cd-days h2 text-white"></span>
                    </div>

                    <h5 class="card-title text-white">Dias</h5>
                  </div>
                  <div class="col-4 text-center">
                    <div class="border border-dark rounded-2 p-2 mb-1">
                      <span class="js-cd-hours h2 text-white"></span>
                    </div>

                    <h5 class="card-title text-white">Horas</h5>
                  </div>
                  <div class="col-4 text-center">
                    <div class="border border-dark rounded-2 p-2 mb-1">
                      <span class="js-cd-minutes h2 text-white"></span>
                    </div>
                    <h5 class="card-title text-white">Minutos</h5>
                  </div>
                  <div class="col-4 d-none text-center">
                    <div class="border border-dark rounded-2 p-2 mb-1">
                      <span class="js-cd-seconds h2 text-white"></span>
                    </div>
                    <h5 class="card-title text-white">Sec</h5>
                  </div>
                </div>
              </div>
              <a class="btn btn-light btn-sm btn-transition rounded-pill px-6" href="#">Comprar</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-lg bg-img-start" style="background-image: url(https://www.misterpollo.co/domicilios/514-large_default/hamburguesa-combo-13.jpg); min-height: 30rem;">
            <div class="card-body">
              <div class="mb-4">
                <h2 class="card-title text-white">$10.000</h2>
                <h3 class="card-title text-white">Nakto Combo Bigmac</h3>
                <p class="card-text text-white">Lleva tu combo personal con con papas y gaseosa  por un precio especial</p>
              </div>
              <a class="btn btn-light btn-sm btn-transition rounded-pill px-6" href="#">Comprar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container content-space-2 content-space-lg-3">
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <h2 class="text-white">Nuestros productos</h2>
      </div>
      <div class="row row-cols-sm-2 row-cols-md-3 row-cols-lg-4 mb-3">
      <?php foreach($producto->result() as $productos){ ?>
        <div class="col mb-4">
          <div class="card card-bordered shadow-none text-center h-100">
            <div class="card-pinned">
              <img
                class="card-img-top img-fluid"
                src="<?php echo $productos->url_imagen; ?>"
                alt="Image Description"
              >
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
                <a class="link-sm link-secondary" href="#"><?php echo $productos->categorias; ?></a>
              </div>
              <a class="text-body" href="#"><?php echo $productos->nombre; ?></a>
              <p class="card-text text-dark">$<?php echo $productos->precio; ?></p>
            </div>
            <div class="card-footer pt-0">
              <!-- <a class="d-inline-flex align-items-center mb-3" href="#">
                <div class="d-flex gap-1 me-2">
                  <img src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                  <img src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                  <img src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                  <img src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                  <img src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/illustrations/star-muted.svg" alt="Review rating" width="16">
                </div>
                <span class="small">0</span>
              </a> -->
              <a
                type="button"
                class="btn btn-outline-danger btn-sm rounded-pill"
                data-toggle="modal"
                data-target="#basicExampleModal"
                aria-hidden="true"
                onclick="getDataModalProduct(<?php echo $productos->codigo_producto; ?>)"
              >
                Agregar al carrito
              </a>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
      <div class="text-center">
        <a class="btn btn-outline-danger btn-transition rounded-pill" href="#">Ver todos los productos</a>
      </div>
    </div>
    <div class="bg-black">
      <div class="container content-space-0">
        <div class="w-md-75 w-lg-50 text-center mx-md-auto">
          <div class="row justify-content-lg-between">
            <div class="mb-5">
              <span class="text-cap text-white">Subscribir</span>
              <h2 class="text-white">Recibe lo último de</h2>
            </div>
            <form>
              <div class="input-card input-card-pill input-card-sm border mb-3">
                <div class="input-card-form">
                  <label for="subscribeForm" class="form-label visually-hidden">Ingresa tu email</label>
                  <input type="text" class="form-control form-control-lg" id="subscribeForm" placeholder="Ingresa tu email" aria-label="Enter email">
                </div>
                <button type="button" class="btn btn-danger btn-lg rounded-pill">Subscribir</button>
              </div>
            </form>
            <p class="small text-white">Puedes darte de baja en cualquier momento. Lea nuestra <a href="#">Politica de privacidad</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="container content-space-2">
      <div class="row">
        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/hollister-dark.svg" alt="Logo">
        </div>
        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/levis-dark.svg" alt="Logo">
        </div>
        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/new-balance-dark.svg" alt="Logo">
        </div>
        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/puma-dark.svg" alt="Logo">
        </div>
        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/nike-dark.svg" alt="Logo">
        </div>
        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/brands/tnf-dark.svg" alt="Logo">
        </div>
      </div>
    </div>
  </main>
  <!-- ========== FOOTER ========== -->
  <footer class="border-top text-white">
    <div class="container text-white">
      <div class="row justify-content-lg-between content-space-t-2 content-space-b-lg-2">
        <div class="col-lg-3 mb-5">
          <div class="d-flex align-items-start flex-column h-100">
            <a class="w-100 mb-3 mb-lg-auto" href="../demo-shop/index.html" aria-label="Front">
              <img class="brand" src="https://www.sosfactory.com/wp-content/uploads/2016/12/icon-restaurant-bolat-min.png" alt="Logo">
            </a>
            <p class="text-muted small mb-0 text-white">&copy; Solutionti. todos los derechos 2023.</p>
          </div>
        </div>
        <div class="col-6 col-md-4 col-lg-3 ms-lg-auto mb-5 mb-lg-0">
          <h5 class="text-white">Links</h5>
          <ul class="list-unstyled list-py-1">
            <li><a class="link-sm text-secondary" href="#">Inicio</a></li>
            <li><a class="link-sm text-secondary" href="#">Ubicación geografica</a></li>
            <li><a class="link-sm text-secondary" href="#">Tracking a package</a></li>
            <li><a class="link-sm text-secondary" href="#">Country availability</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-4 col-lg-3 mb-5 mb-lg-0">
          <h5 class="text-white">Compañía</h5>
          <ul class="list-unstyled list-py-1">
            <li><a class="link-sm text-secondary" href="#">Financing</a></li>
            <li><a class="link-sm text-secondary" href="#">Recycling</a></li>
            <li><a class="link-sm text-secondary" href="#">Return policy</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-lg-2 mb-5 mb-lg-0">
          <h5 class="mb-3 text-white">Contacto</h5>
          <ul class="list-unstyled list-py-1">
            <li><a class="link-sm link-secondary" href="#"><i class="bi-question-circle-fill me-1"></i> Help</a></li>
            <li><a class="link-sm link-secondary" href="#"><i class="bi-person-circle me-1"></i> Your Account</a></li>
          </ul>
          <div class="btn-group">
          </div>
        </div>
      </div>
      <hr class="my-0">
      <div class="row align-items-sm-center content-space-1">
        <div class="col-sm mb-4 mb-sm-0">
        </div>
        <div class="col-sm-auto">
          <ul class="list-inline list-separator">
            <li class="list-inline-item">
              <a class="link-sm link-secondary text-white" href="../page-privacy.html">Privacidad &amp; politicas</a>
            </li>
            <li class="list-inline-item">
              <a class="link-sm link-secondary text-white" href="../page-terms.html">Terminos &amp; condiciones</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-close">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="signupModalFormLogin" style="display: none; opacity: 0;">
            <div class="text-center mb-7">
              <h2>Log in</h2>
              <p>Don't have an account yet?
                <a class="js-animation-link link" href="javascript:;" role="button" data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign up</a>
              </p>
            </div>
            <div class="d-grid gap-2">
              <a class="btn btn-white btn-lg" href="#">
                <span class="d-flex justify-content-center align-items-center">
                  <img class="avatar avatar-xss me-2" src="../assets/svg/brands/google-icon.svg" alt="Image Description">
                  Log in with Google
                </span>
              </a>

              <a class="js-animation-link btn btn-primary btn-lg" href="#" data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormLoginWithEmail",
                       "groupName": "idForm"
                     }'>Log in with Email</a>
            </div>
          </div>
          <div id="signupModalFormLoginWithEmail" style="display: none; opacity: 0;">
            <div class="text-center mb-7">
              <h2>Log in</h2>
              <p>Don't have an account yet?
                <a class="js-animation-link link" href="javascript:;" role="button" data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormSignup",
                         "groupName": "idForm"
                       }'>Sign up</a>
              </p>
            </div>
            <form class="js-validate needs-validation" novalidate>
              <div class="mb-3">
                <label class="form-label" for="signupModalFormLoginEmail">Your email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormLoginEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
              </div>
              <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormLoginPassword">Password</label>

                  <a class="js-animation-link form-label-link" href="javascript:;" data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormResetPassword",
                       "groupName": "idForm"
                     }'>Forgot Password?</a>
                </div>

                <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormLoginPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8">
                <span class="invalid-feedback">Please enter a valid password.</span>
              </div>
              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary form-control-lg">Log in</button>
              </div>
            </form>
          </div>
          <div id="signupModalFormSignup">
            <div class="text-center mb-7">
              <h2>Sign up</h2>
              <p>Already have an account?
                <a class="js-animation-link link" href="javascript:;" role="button" data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log in</a>
              </p>
            </div>
            <div class="d-grid gap-3">
              <a class="btn btn-white btn-lg" href="#">
                <span class="d-flex justify-content-center align-items-center">
                  <img class="avatar avatar-xss me-2" src="../assets/svg/brands/google-icon.svg" alt="Image Description">
                  Sign up with Google
                </span>
              </a>
              <a class="js-animation-link btn btn-primary btn-lg" href="#" data-hs-show-animation-options='{
                       "targetSelector": "#signupModalFormSignupWithEmail",
                       "groupName": "idForm"
                     }'>Sign up with Email</a>

              <div class="text-center">
                <p class="small mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
              </div>
            </div>
          </div>
          <div id="signupModalFormSignupWithEmail" style="display: none; opacity: 0;">
            <div class="text-center mb-7">
              <h2>Sign up</h2>
              <p>Already have an account?
                <a class="js-animation-link link" href="javascript:;" role="button" data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>Log in</a>
              </p>
            </div>
            <form class="js-validate need-validate" novalidate>
              <div class="mb-3">
                <label class="form-label" for="signupModalFormSignupEmail">Your email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormSignupEmail" placeholder="email@site.com" aria-label="email@site.com" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
              </div>
              <div class="mb-3">
                <label class="form-label" for="signupModalFormSignupPassword">Password</label>
                <input type="password" class="form-control form-control-lg" name="password" id="signupModalFormSignupPassword" placeholder="8+ characters required" aria-label="8+ characters required" required>
                <span class="invalid-feedback">Your password is invalid. Please try again.</span>
              </div>
              <div class="mb-3" data-hs-validation-validate-class>
                <label class="form-label" for="signupModalFormSignupConfirmPassword">Confirm password</label>
                <input type="password" class="form-control form-control-lg" name="confirmPassword" id="signupModalFormSignupConfirmPassword" placeholder="8+ characters required" aria-label="8+ characters required" required data-hs-validation-equal-field="#signupModalFormSignupPassword">
                <span class="invalid-feedback">Password does not match the confirm password.</span>
              </div>
              <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary form-control-lg">Sign up</button>
              </div>
              <div class="text-center">
                <p class="small mb-0">By continuing you agree to our <a href="#">Terms and Conditions</a></p>
              </div>
            </form>
          </div>
          <div id="signupModalFormResetPassword" style="display: none; opacity: 0;">
            <div class="text-center mb-7">
              <h2>Forgot password?</h2>
              <p>Enter the email address you used when you joined and we'll send you instructions to reset your password.</p>
            </div>
            <form class="js-validate need-validate" novalidate>
              <div class="mb-3">
                <div class="d-flex justify-content-between align-items-center">
                  <label class="form-label" for="signupModalFormResetPasswordEmail" tabindex="0">Your email</label>
                  <a class="js-animation-link form-label-link" href="javascript:;" data-hs-show-animation-options='{
                         "targetSelector": "#signupModalFormLogin",
                         "groupName": "idForm"
                       }'>
                    <i class="bi-chevron-left small"></i> Back to Log in
                  </a>
                </div>
                <input type="email" class="form-control form-control-lg" name="email" id="signupModalFormResetPasswordEmail" tabindex="1" placeholder="Enter your email address" aria-label="Enter your email address" required>
                <span class="invalid-feedback">Please enter a valid email address.</span>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary form-control-lg">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap mb-4">Trusted by the world's best teams</small>
          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="../assets/svg/brands/gitlab-gray.svg" alt="Logo">
              </div>
              <div class="col">
                <img class="img-fluid" src="../assets/svg/brands/fitbit-gray.svg" alt="Logo">
              </div>
              <div class="col">
                <img class="img-fluid" src="../assets/svg/brands/flow-xo-gray.svg" alt="Logo">
              </div>
              <div class="col">
                <img class="img-fluid" src="../assets/svg/brands/layar-gray.svg" alt="Logo">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
    <i class="fas fa-chevron-up"></i>
  </a>
  <div class="offcanvas offcanvas-top offcanvas-navbar-search bg-light" tabindex="-1" id="offcanvasNavbarSearch">
    <div class="offcanvas-body">
      <div class="container">
        <div class="w-lg-75 mx-lg-auto">
          <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="mb-7">
            <form>
              <div class="input-card">
                <div class="input-card-form">
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    placeholder="Buscar un producto"
                    aria-label="Search Front"
                  >
                </div>
                <button type="button" class="btn btn-primary btn-lg">Buscar</button>
              </div>
            </form>
          </div>
          <!--  -->
          
          <!--  -->
        </div>
      </div>
    </div>
  </div>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarEmptyShoppingCart">
    <div class="offcanvas-header justify-content-end border-0 pb-0">
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="text-center" id="CarritoVacio">
        
      </div>
      
    </div>
  </div>
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

    <!-- Modal -->

<script src="<?php echo base_url();?>./public/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>./public/js/asclepio.min.js"></script>
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
  <script src="<?php echo base_url(); ?>public/js/scripts/ecommerce.js"></script>
</body>
</html>