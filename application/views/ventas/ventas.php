<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InventSoft - Ventas</title>
    <?php require_once("componentes/head.php"); ?>
</head>
<?php $estadocajas = $estadocaja->result()[0]; ?>
<body style="background-color: #1e2040!important;">
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url(''); background-position-y: 50%; background-repeat: no-repeat; background-size: 100%">
    <span class=""></span>
  </div>
  <div class="main-content position-relative max-height-vh-100 h-100">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="<?php echo base_url(); ?>clientes/inicio">InventSoft</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Ventas</li>
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
              
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="row">
                    <div class="col-md-6">
                      <?php if($estadocajas->estado === "ABIERTA") { ?>
                      <div class="form-group">
                        <label>Codigo de barras</label>
                        <input
                          type="text"
                          class="form-control form-control-lg text-lg"
                          id="codigo_barras"
                        >
                      </div>
                      <?php } else {?>
                      <div class="form-group">
                        <label>Codigo de barras</label>
                        <input
                          type="text"
                          class="form-control form-control-md"
                          id="codigo_barras"
                          readonly
                        >
                      </div>
                      <?php } ?>
                    </div>
                    <div class="col-md-2">
                      <label class="text-center">%</label>
                      <input
                        type="text"
                        class="form-control form-control-lg text-lg"
                        id="porcentaje"
                        readonly
                      >
                    </div>
                    <div class="col-md-4">
                      <label>Recibo de efectivo</label>
                      <input
                        type="text"
                        class="form-control form-control-lg text-lg"
                        id="recibio"
                      >
                    </div>
                    <div class="col-md-1 mt-2" id="total_productos">
                    
                    </div>
                  </div>
                  <?php $id_cajas = $id_caja->result()[0]; ?>
                  <input type="text" class="form-control" id="id_caja" value="<?php echo $id_cajas->id_caja ?>" hidden>
                  <div class="row">
                    <div class="col-md-6" hidden>
                      <label>Total</label>
                      <input
                        type="text"
                        class="form-control form-control-sm"
                        id="total"
                        readonly
                      >
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-9">
                    <div class="row mt-2">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Codigo</label>
                        <input
                          type="text"
                          class="form-control form-control-sm"
                          id="codigo"
                          readonly
                        >
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Codigo EAN</label>
                        <input
                          type="text"
                          class="form-control form-control-sm"
                          id="codigo_barras2"
                          readonly
                        >
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label>Usuario vendedor</label>
                        <input
                          type="text"
                          class="form-control form-control-sm"
                          value="<?php echo $this->session->userdata("nombre")." ".$this->session->userdata("apellido"); ?>"
                          readonly
                        >
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label>Nombre del producto</label>
                        <input
                          type="text"
                          class="form-control form-control-sm"
                          id="producto"
                          readonly
                        >
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Precio</label>
                        <div class="input-group">
                          
                          <input
                            type="text"
                            class="form-control form-control-sm"
                            id="precio" aria-label="Amount (to the nearest dollar)"
                            readonly
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label>Cantidad</label>
                        <input
                          type="number"
                          class="form-control form-control-sm"
                          min="0"
                          max="50"
                          id="cantidad"
                          readonly
                        >
                      </div>
                    </div>
                    <div class="col-md-1">
                      <br>
                      <button class="btn btn-icon btn-2 btn-sm text-white color-cyan mt-1" type="button" id="buscar-producto">
	                      <span class="fas fa-search"><i class="ni ni-bulb-61"></i></span>
                      </button>
                    </div>
                  </div>
                  </div>
                    <div class="col-md-3 mt-4">
                      <div class="text-center">
                        <div id="imagen" class="">
                          
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row mt-3">
                    <div class="table-responsive">
                      <table class="table table-stripped table-hover">
                        <thead class="bg-default ">
                          <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12"></th>
                          <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Producto</th>
                          <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Codigo</th>
                          <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Cantidad</th>
                          <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Precio</th>
                        </thead>
                        <tbody class="tbody">
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card card-pricing">
                    <div
                      class="card-header bg-gradient-light text-center pt-4 pb-5 position-relative"
                    >
                      <div class="z-index-1 position-relative">
                        <h5 class="text-black">TOTAL VENTA</h5>
                        <h1 class="text-white mt-2 mb-0" id="ventaa">
                        <small id="compracero" class="text-dark">$0 </small>
                        <small class="total-compra text-dark" id="total-compra" hidden></small>
                        </h1>
                        <h6 class="text-black">TOTAL DEVOLVER</h6>
                        <div id="volver">
                          <h3 class="text-black" id="devolver">0</h3>
                        </div>
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
                    <label>Documento</label>
                    <input type="text" class="form-control form-control-sm" value="FACTURA" id="documento" readonly>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Tipo pago</label>
                    <select
                      class="form-control form-control-sm"
                      id="tp_pago"
                    >
                    <option value="EFECTIVO">EFECTIVO</option>
                    <option value="NEQUI">NEQUI</option>
                    <option value="BANCOLOMB">BANCOLOMBIA</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row" id="referencia-hid" hidden>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" id="referencia" class="form-control form-control-sm" placeholder="Referencia de pago">
                  </div>
                </div>
              </div>
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
                      value="<?php echo "VNT00" . ($consecutivo->consecutivo + 1); ?>"
                      id="consecutivo"
                      readonly
                    >
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                  <?php if($this->session->userdata("rol") == "Administrador"){ ?>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        id="checkdevolucion"
                      >
                      <label class="custom-control-label" for="customCheck1">Devolución?</label>
                    </div>
                  <?php } ?>
                    <div class="form-check">
                      <input
                        class="form-check-input"
                        type="checkbox"
                        name="checkrecibocaja"
                        id="checkrecibocaja"
                      >
                      <label class="custom-control-label" for="customCheck1">Recibo de Caja?</label>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Fecha</label>
                    <input type="text" class="form-control form-control-sm" value="<?php echo date("d-m-Y"); ?>" readonly>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                  <div class="col-md-6">
                    <div class="form-group">
                    <?php
                      if($estadocajas->estado == "CERRADA") {
                    ?>
                    <button class="btn bg-gradient-success" id="abrir-caja">Abrir caja</button>
                    <?php } else { ?>
                      <button class="btn bg-gradient-danger" id="cerrar-caja">Cerrar Caja</button> 
                    <?php } ?>
                  </div>
                </div>
                <div class="col-md-6" id="ocultobtndevolucion" hidden>
                <button
                  class="btn bg-gradient-success"
                  id="btn_devolucion"
                >
                  Hacer devolucion
                </button> 
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
<!-- VENTANA MODAL PARA LOS PRODUCTOS  -->
<div
  class="modal fade"
  id="modal-productos"
  data-backdrop="static"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
  >
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header bg-default">
          <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Listado de Productos</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="table-responsive">
            <table class="table table-hover table-borderless table-stripped"  id="table-productos-todos">
              <thead class="bg-default ">
                <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Imagen</th>
                <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Codigo</th>
                <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Nombre</th>
                <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Precio</th>
                <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Cantidad</th>
                <th></th>
              </thead>
              <tbody>
                <?php foreach($producto->result() as $productos) { ?>
                <tr>
                  <td>
                    <div class="text-center">
                      <img
                        src="<?php echo base_url(); ?>public/productos/<?php echo $productos->url_imagen; ?>"
                        class="avatar avatar-sm me-4"
                      >
                    </div>
                  </td>
                  <td class="text-xs text-dark mb-0"><?php echo $productos->codigo; ?></td>
                  <td class="text-xs text-dark mb-0"><?php echo $productos->nombre; ?></td>
                  <td class="text-xs text-dark mb-0">$<?php echo $productos->precio; ?></td>
                  <td class="text-xs text-dark mb-0"><?php echo $productos->stock; ?></td>
                  <td>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="codigoproduct" id="codigoproduct" value="<?php echo $productos->codigo; ?>">
                      <label class="form-check-label" for="codigoproduct"></label>
                    </div>
                    </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn color-cyan text-white" id="asociar-producto">Vender</button>
        </div>
      </div>
    </div>
  </div>

  <!-- VENTANA MODAL PARA APERTURA DE LA CAJA -->
  <div
  class="modal fade"
  id="modal-abrircaja"
  data-backdrop="static"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
  >
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header bg-default">
          <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Apertura de caja</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Fecha</label>
                <input
                  type="date"
                  class="form-control form-control-sm"
                  value="<?php echo date("Y-m-d")?>"
                  id="fecha_apertura"
                >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Tipo de movimiento</label>
                <input
                  type="text"
                  class="form-control form-control-sm"
                  value="APERTURA"
                  id="movimiento_apertura"
                >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Monto</label>
                <input
                  type="number"
                  class="form-control form-control-sm"
                  id="monto_apertura"
                >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Comentarios</label>
                <textarea
                  class="form-control"
                  rows="5"
                  id="comentarios_apertura"
                ></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn color-cyan text-white"
            id="guardar-caja"
          >
            Aceptar
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- CIERRE DE CAJA -->
  <div
  class="modal fade"
  id="modal-cerrarcaja"
  data-backdrop="static"
  tabindex="-1"
  role="dialog"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
  >
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header bg-default">
          <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Cierre de caja</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php $balances = $balance->result()[0]; ?>
          <h5 class="gray-text">¿Esta seguro de cerrar caja?</h5>
          <small>Se recomienda revisar sus montos de cierre</small>
          <h6 class="text-uppercase mt-3">Balance teorico: $/ <spam id="balance"> <?php echo $balances->venta; ?></spam></h6>
          <h6 class="text-uppercase">Efectivo real:  $/ <spam id="efectivo"></spam></h6>
          <h6 class="text-uppercase text-danger">Diferencia: $/ <spam id="diferencia"></spam></h6>
          <br>
          <div class="form-group">
            <input type="number" class="form-control" placeholder="Total efectivo" id="real_efectivo">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success text-white" id="cierre-caja">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- TABLA DEVOLUCION -->
  <div class="modal fade" id="modaltabledevolcion" data-backdrop="static" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-default">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">VENTA ASOCIADA AL PRODUCTO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="table responsive">
          <table class="table table-striped table-hover">
            <thead style="background-color: #B20027 !important;">
              <tr>
                <th></th>
                <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Codigo producto</th>
                <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Codigo venta</th>
                <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Fecha</th>
                <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Hora</th>
                <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Valor</th>
                <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Usuario</th>
              </tr>
            </thead>
            <tbody id="detalleventas">
              
            </tbody>   
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="aceptardevoluciontabla">Aceptar</button>
      </div>
    </div>
  </div>
</div>
  <?php require_once("componentes/scripts.php"); ?>
  <script>
    var baseurl = "<?php echo base_url();?>";
  </script>
  <script src="<?php echo base_url(); ?>public/js/scripts/ventas2.js?v=1.0.0"></script>
</body>
</html>