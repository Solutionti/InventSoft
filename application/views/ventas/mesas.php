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
              <i class="fa fa-power-off me-sm-1"></i>
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
                <button
                  class="btn btn-danger text-white btn-xs  mx-2 mt-2"
                  data-bs-toggle="modal"
                  href="#modal_mesas"
                  role="button"
                > 
                  Agregar mesa
                </button>
                <button
                  class="btn btn-primary text-white btn-xs ms-auto mx-2"
                  role="button"
                  onclick="refreshMesas()"
                > 
                  <i class="fas fa-sync"></i> Refrescar
                </button>
              </div>
            </div>
            
            <div class="card-body">
              <div class="row">
                <?php foreach($mesa->result() as $mesas){?>
                <div class="col-md-2">
                  <a href="#" onclick="abrirModalMesasDatos(<?php echo $mesas->numero_mesa; ?>)">
                    <div class="text-center">
                      <img
                        src="https://t4.ftcdn.net/jpg/02/55/00/13/360_F_255001343_tzPQgCcfVmeZoVj0ilPjlse9qA8wPpt8.jpg"
                        class="img-fluid mt-0"
                        width="130px;"
                      >
                      <p><?php echo $mesas->puestos ?> personas</p>
                      <h6>
                        MESA <?php echo $mesas->numero_mesa; ?>
                      <?php if($mesas->estado === "DISPONIBLE" ){ ?>
                        <i class="fas fa-circle text-success mx-2"></i>
                      <?php } else if ($mesas->estado == "OCUPADA"){ ?>
                        <i class="fas fa-circle text-danger mx-2"></i>
                      <?php } ?>
                      </h6>
                       
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
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-1">
            <div class="form-group">
              <label for="">Mesa</label>
              <input
                type="text"
                class="form-control"
                readonly
                id="mesa_detalle"
              >
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="">Meser@</label>
              <input
                type="text"
                class="form-control"
                readonly
                id="mesero_detalle"
              >
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="">Propina</label>
              <input
                type="text"
                class="form-control"
                id="propina_detalle"
              >
            </div>
          </div>
          <div class="col-md-1">
            <div class="form-group">
              <label for="">Descuento</label>
              <input
                type="text"
                class="form-control"
                id="descuento_detalle"
              >
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="">Codigo</label>
              <input
                type="text"
                class="form-control"
                id="codigo_detalle"
                readonly
              >
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Estado</label>
              <select
                class="form-control"
                readonly
                id="estado_detalle"
              >
              <option value="DISPONIBLE">Disponible</option>
              <option value="OCUPADA">Ocupada</option>
              </select>
            </div>
          </div>
        </div>
        <!--  -->
        <div class="row">
          <div class="col-md-12">
            <label>Descripcion</label>
            <textarea
              class="form-control"
              id="descripcion_detalle"
            ></textarea>
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
                    <th class="text-white">Valor Unit</th>
                    <th class="text-white">Total</th>
                  </tr>
                </thead>
                <tbody class="detalle_pedido_mesas">
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 offset-md-8">
            <h5>TOTAL</h5>
            <input
              type="text"
              class="form-control"
              id="total"
              readonly
            >
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn btn-danger"
          onclick="refreshMesas()"
        >
          Cancelar
        </button>
        <button
          type="button"
          class="btn btn-primary"
          onclick="imprimirCocina()"
        >
          Imprimir
        </button>
        <button
          type="button"
          class="btn btn-success"
          onclick="cerrarMesas()"
        >
          Cerrar mesa
        </button>
      </div>
    </div>
  </div>
</div>

<!-- CREACION DE MESAS -->
<div class="modal fade" id="modal_mesas" tabindex="-1" aria-labelledby="modal_mesasLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h1 class="modal-title fs-5 text-white" id="modal_mesasLabel">CREAR MESAS</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Numero de mesa</label>
              <input
                type="number"
                class="form-control"
                id="nro_mesa"
              >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Puestos</label>
              <input
                type="number"
                class="form-control"
                id="puestos"
              >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label>Estado de la mesa</label>
              <select class="form-control" id="estado">
                <option value="DISPONIBLE">DISPONIBLE</option>
                <option value="OCUPADA">OCUPADA</option>
                <option value="MANTENIMIENTO">MANTENIMIENTO</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn btn-primary"
          id="crearMesas"
        >
          Guardar
        </button>
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
  <script src="<?php echo base_url(); ?>public/js/scripts/mesas.js"></script>
</body>
</html>