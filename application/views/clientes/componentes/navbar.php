<div class="card-body p-3">
  <div class="row gx-4">
    <div class="col-auto">
      <div class="avatar avatar-xl position-relative">
        <img
          src="<?php echo base_url(); ?>public/img/theme/team-41.jpg"
          alt="profile_image"
          class="w-100 border-radius-lg shadow-sm"
        >
      </div>
    </div>
    <div class="col-auto my-auto">
      <div class="h-100">
        <h5 class="mb-1 text-white">
          <?php echo $this->session->userdata("nombre")." ".$this->session->userdata("apellido"); ?>
        </h5>
        <p class="mb-0 font-weight-bold text-sm text-white text-uppercase">
          <?php echo $this->session->userdata("rol"); ?>
        </p>
      </div>
    </div>
    <div class="col-lg-8 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
      <div class="nav-wrapper position-relative end-0">
        <ul class="nav nav-pills nav-fill p-1" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
              href="<?php echo base_url(); ?>clientes/inicio"
            >
              <i class="ni ni-settings-gear-65"></i>
              <span class="ms-2">Inicio</span>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link mb-0 px-0 py-1  d-flex align-items-center justify-content-center "
              href="<?php echo base_url(); ?>clientes/laboratorio"
            >
              <i class="ni ni-app"></i>
              <span class="ms-2">Usuarios</span>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center"
              href="<?php echo base_url(); ?>clientes/patologia"
            >
              <i class="ni ni-email-83"></i>
              <span class="ms-2">Inventarios</span>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center"
              href="<?php echo base_url(); ?>clientes/ventas"
            >
              <i class="ni ni-settings-gear-65"></i>
              <span class="ms-2">Ventas</span>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center"
              href="<?php echo base_url(); ?>clientes/gastos"
            >
              <i class="ni ni-settings-gear-65"></i>
              <span class="ms-2">Gastos</span>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center"
              href="<?php echo base_url(); ?>clientes/devoluciones"
            >
              <i class="ni ni-settings-gear-65"></i>
              <span class="ms-2">Devoluciones</span>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
              href="<?php echo base_url(); ?>clientes/ecografias"
            >
              <i class="ni ni-settings-gear-65"></i>
              <span class="ms-2">Reportes</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>