<a
        type="button"
        class="btn btn-primary btn-icon fixedButton avatar-circle btn-lg"
        data-toggle="modal"
        data-target="#staticBackdrop"
        aria-hidden="true"
      >
        <div><i class="fas fa-shopping-cart"></i></div>
      </a>
    <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand-lg navbar-end navbar-dark">
    <div class="container ">
      <nav class="js-mega-menu navbar-nav-wrap ">
        <a class="" href="../demo-shop/index.html" aria-label="Front">
          <img 
            class="" 
            src="https://www.sosfactory.com/wp-content/uploads/2016/12/icon-restaurant-bolat-min.png"
            width="70px; !important"
          >
        </a>
            
        <button class="navbar-toggler"  type="button"  data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-default">
            <i class="fas fa-bars"></i>
          </span>
          <span class="navbar-toggler-toggled">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <button class="btn btn-ghost-secondary btn-sm btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarSearch" aria-controls="offcanvasNavbarSearch">
                <i class="fas fa-search text-white"></i>
              </button>
              <button
                type="button"
                class="btn btn-ghost-secondary btn-sm btn-icon"
                type="button"
                data-toggle="modal"
                data-target="#staticBackdrop"
                aria-hidden="true"
                >
              <i class="fas fa-shopping-basket text-white"></i>
              </button>
              <button class="btn btn-primary btn-transition btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#signupModal">Rastrear Pedido</button>
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
              <a class="nav-link text-white" href="#">Promociones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo base_url(); ?>ecommerce/premios">Premios por compras</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>