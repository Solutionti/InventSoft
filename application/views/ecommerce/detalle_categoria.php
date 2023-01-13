<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos por categoria</title>
    <link rel="stylesheet" href="<?php echo base_url();?>./public/css/asclepio.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fontawesome/css/fontawesome.css">
  <link href="<?php echo base_url(); ?>public/fontawesome/css/brands.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/fontawesome/css/solid.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap">
    <link rel="stylesheet" href="https://htmlstream.com/preview/front-v4.2/html/assets/css/vendor.min.css">
    <link rel="stylesheet" href="https://htmlstream.com/preview/front-v4.2/html/assets/css/theme.min.css?v=1.0">
</head>
<body class="black">
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
<div class="container my-5">
  <section>
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
                    <div class="carousel-item active">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/17.jpg"
                        alt="First slide" class="img-fluid" width="300px;">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 text-center text-md-left">
                <h4
                  class="h4-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                  <strong>Sony headphones</strong>
                </h4>
                <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">bestseller</span>
                <h4 class="h3-responsive text-center text-md-left mb-2 ml-xl-0 ml-4">
                  <span class="red-text font-weight-bold">
                    <strong>$49</strong>
                  </span>
                  <span class="grey-text">
                    <small>
                      <s>$89</s>
                    </small>
                  </span>
                </h4>
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                  <div class="card">
                    <div class="card-header" role="tab" id="headingOne1">
                      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                        aria-controls="collapseOne1">
                        <h5 class="mb-0">
                          Description
                          <i class="fas fa-angle-down rotate-icon"></i>
                        </h5>
                      </a>
                    </div>
                    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                      data-parent="#accordionEx">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                        squid.
                        3 wolf moon officia aute,
                        <br>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="materialInline1">
                            <label class="form-check-label" for="materialInline1">Con papas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="materialInline1">
                            <label class="form-check-label" for="materialInline1">Sin papas</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <section class="color">
                  <div class="mt-2">
                    <p class="grey-text">Salsas y adicinales</p>
                    <div class="row text-center text-md-left">
                      <div class="col-md-6">
                        <div class="form-check form-check-inline">
                          <input type="checkbox" class="form-check-input" id="materialInline1">
                          <label class="form-check-label" for="materialInline1">Salsa Maiz</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="checkbox" class="form-check-input" id="materialInline1">
                          <label class="form-check-label" for="materialInline1">Salsa Tomate</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="checkbox" class="form-check-input" id="materialInline1">
                          <label class="form-check-label" for="materialInline1">Salsa Tartara</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="checkbox" class="form-check-input" id="materialInline1">
                          <label class="form-check-label" for="materialInline1">Salsa Ajo</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-check form-check-inline">
                          <input type="checkbox" class="form-check-input" id="materialInline2">
                          <label class="form-check-label" for="materialInline2">Salsa de piña</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="checkbox" class="form-check-input" id="materialInline2">
                          <label class="form-check-label" for="materialInline2">Salsa de Mora</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="checkbox" class="form-check-input" id="materialInline2">
                          <label class="form-check-label" for="materialInline2">Salsa de BBQ</label>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-md-12 text-center text-md-left text-md-right">
                        <button class="btn btn-primary btn-rounded">
                          <i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Agregar al carrito</button>
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
    <hr class="w-header my-4 pb-2">
    <div class="row">
    <?php foreach($productosc->result() as $productoscate){ ?>
      <div class="col-lg-4 col-md-12">
        <a class="card z-depth-0 mb-4" data-toggle="modal" data-target="#basicExampleModal">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-6 px-0">
                <img src="<?php echo $productoscate->url_imagen; ?>" class="img-fluid">
              </div>
              <div class="col-6">
                <p class="mb-0"><strong><?php echo $productoscate->nombre; ?></strong></p>
                <ul class="rating inline-ul">
                  <li>
                    <i class="fas fa-star blue-text"></i>
                  </li>
                  <li>
                    <i class="fas fa-star blue-text"></i>
                  </li>
                  <li>
                    <i class="fas fa-star blue-text"></i>
                  </li>
                  <li>
                    <i class="fas fa-star blue-text"></i>
                  </li>
                  <li>
                    <i class="fas fa-star grey-text"></i>
                  </li>
                </ul>
                <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$<?php echo $productoscate->precio; ?></strong></h6>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
  </section>
</div>
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
</body>
</html>