<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InventSoft - Mesas</title>
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Mesas</li>
          </ol>
          
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-1 me-md-0 me-sm-4" id="navbar">
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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0 h6 text-uppercase">Inventario de mesas</p>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
              <?php for($i = 0; $i < 18; $i++ ){?>
                <div class="col-md-2">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="text-center">
                      <img
                      src="https://t4.ftcdn.net/jpg/02/55/00/13/360_F_255001343_tzPQgCcfVmeZoVj0ilPjlse9qA8wPpt8.jpg"
                      class="img-fluid mt-0"
                      width="130px;"
                      >
                      <p>4 personas</p>
                      <h6>MESA <?php echo $i+1;?>  <i class="fas fa-circle text-success mx-2"></i></h6>
                    </div>
                  </a>
               </div>
              <?php } ?>
              </div>
              </div>
            </div>
          </div>
        </div>

<!-- PEDIDOS -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">PEDIDOS A LA MESA</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="">Numero Mesa</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="">Meser@</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="">Propina</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="">Descuento</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Estado</label>
              <select
                class="form-control"
              >
              <option value="">Disponible</option>
              <option value="">Ocupada</option>
              </select>
            </div>
          </div>
        </div>
        <!--  -->
        <div class="row mt-3">
          <div class="col-md-12">
            <div class="table-responsive ">
              <table class="table table-striped table-hover">
                <thead style="background-color: black !important;">
                  <tr>
                    <th class="text-white">Codigo</th>
                    <th class="text-white">Producto</th>
                    <th class="text-white">Cantidad</th>
                    <th class="text-white">Valor</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 offset-md-9">
            <h5>TOTAL $99.999.999</h5>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Guardar</button>
        <button type="button" class="btn btn-danger">Cerrar mesa</button>
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
  <script src="<?php echo base_url(); ?>public/js/scripts/ventas.js"></script>
</body>
</html>