<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InventSoft - Pedidos</title>
    <?php require_once("componentes/head.php"); ?>
</head>

<body style="background-color: black !important;">
<div class="position-absolute w-100 min-height-300 top-0" style="background-image: url(''); background-position-y: 50%; background-repeat: no-repeat; background-size: 100%">
    <span class=""></span>
  </div>
  <div class="main-content position-relative max-height-vh-100 h-100">
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">InventSoft</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Pedidos</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Pedidos</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
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
    <?php require_once("componentes/navbar.php");?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0 h6 text-uppercase">Pedidos</p>
                <!-- <button class="btn btn-primary text-white btn-xs ms-auto" data-bs-toggle="modal" href="#Agregarusuario" role="button"> <i class="fas fa-plus"></i> Agregar</button> -->
              </div>
            </div>
            <div class="card-body">
             <div class="table-responsive">
               <table class="table table-responsive table-hover table-borderless" id="table-pedidos">
                 <thead style="background-color: black !important;">
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Opciones</th>
                   <!-- <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Codigo</th> -->
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Consecutivo</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Tipo pago</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Total</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Cuentas por cobrar</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Hora</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Fecha</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Estado</th>
                </thead>
                 <tbody>
                 <?php foreach($pedido->result() as $pedidos){ ?>
                   <tr>
                     <td>
                       <div class="row">
                         <!-- <a
                         class="icon icon-shape icon-sm me-1 bg-gradient-info shadow mx-3"
                         href="#"
                         >
                         <i class="fas fa-check text-white opacity-10"></i>
                        </a> -->
                        <a
                           class="icon icon-shape icon-sm  bg-gradient-danger shadow mx-3"
                           target="_blank"
                           href="<?php echo base_url(); ?>ventas/pdfpedidosucursal/<?php echo $pedidos->codigo_pedido; ?>/<?php echo $pedidos->codigo_cliente; ?>"
                         >
                           <i class="fas fa-file-pdf text-white opacity-10"></i>
                         </a>
                        <a
                          class="icon icon-shape icon-sm  bg-gradient-primary shadow"
                          onclick="verPedido(<?php echo $pedidos->codigo_pedido; ?>)"
                        >
                          <i class="fas fa-eye text-white opacity-10"></i>
                        </a>
                        <a
                          class="icon icon-shape icon-sm  bg-gradient-success shadow mx-1"
                          target="_blank"
                          href="https://wa.me/+57<?php echo $pedidos->codigo_cliente; ?>?text=Hola hemos recibido tu pedido revisa el detalle del pedido en el siguiente link <?php echo $pedidos->link; ?> gracias por su compra."
                        >
                        <i class="fab  fa-whatsapp "></i>
                        </a>
                      </div>
                    </td>
                    <!-- <td><?php echo $pedidos->codigo_pedido; ?></td> -->
                    <td><?php echo $pedidos->consecutivo; ?></td>
                    <td><?php echo $pedidos->tppago; ?></td>
                    <td><?php echo '$'.$pedidos->total; ?></td>
                    <td>No</td>
                    <td><?php echo $pedidos->hora; ?></td>
                    <td><?php echo $pedidos->fecha; ?></td>
                    <td><?php echo $pedidos->estado; ?></td>
                   </tr>
                   <?php } ?>
                 </tbody>
               </table>
             </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
        <div class="card h-100 mb-4">
<div class="card-header pb-0 px-3">
<div class="row">
<div class="col-md-6">
<h6 class="mb-0">Transacciones Entrantes</h6>
</div>
<div class="col-md-6 d-flex justify-content-end align-items-center">
<i class="fas fa-calendar-alt me-2"></i>
<small><?php echo date("d-m-Y"); ?></small>
</div>
</div>
</div>
<div class="card-body pt-4 p-3">
<h6 class="text-uppercase text-body text-xs font-weight-bolder mb-3">Newest</h6>
<ul class="list-group">
<li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
<div class="d-flex align-items-center">
<button class="btn btn-icon-only btn-rounded btn-outline-danger mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-down"></i></button>
<div class="d-flex flex-column">
<h6 class="mb-1 text-dark text-sm">Netflix</h6>
<span class="text-xs">27 March 2020, at 12:30 PM</span>
</div>
</div>
<div class="d-flex align-items-center text-danger text-gradient text-sm font-weight-bold">
- $ 2,500
</div>
</li>
<li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
<div class="d-flex align-items-center">
<button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
<div class="d-flex flex-column">
<h6 class="mb-1 text-dark text-sm">Apple</h6>
<span class="text-xs">27 March 2020, at 04:30 AM</span>
</div>
</div>
<div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
+ $ 2,000
</div>
</li>
<li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
<div class="d-flex align-items-center">
<button class="btn btn-icon-only btn-rounded btn-outline-dark mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-exclamation"></i></button>
<div class="d-flex flex-column">
<h6 class="mb-1 text-dark text-sm">Webflow</h6>
<span class="text-xs">26 March 2020, at 05:00 AM</span>
</div>
</div>
<div class="d-flex align-items-center text-dark text-sm font-weight-bold">
Pending
</div>
</li>
</ul>
</div>
</div>
</div>
        </div>
       </div>
          <?php require_once("componentes/footer.php"); ?>
        </div>

 <!-- MODAL VER PEDIDO -->
 <div class="modal fade" id="verpedido" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Detalle del pedido</h5>
        <!-- <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-3">
            <div class="form-group input-group-sm">
            <label>Codigo pedido</label>
            <input
                type="text"
                class="form-control"
                id="codigo_pedido"
                readonly
              >
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <label>Sede</label>
              <select 
                class="form-control form-control-sm"
                id="sede_pedido"
                readonly
              >
                <option value="SEDE PRINCIPAL (BARRIO AMBALA)">SEDE PRINCIPAL (BARRIO AMBALA)</option>
              </select>
            </div>              
          </div>
          <div class="col-md-2">
            <div class="form-group input-group-sm">
              <label>Fecha</label>
              <input
                type="date"
                class="form-control"
                id="fecha_pedido"
                readonly
              >
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group input-group-sm">
              <label>Hora</label>
              <input
                type="text"
                class="form-control"
                id="hora_pedido"
                readonly
              >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="form-group input-group-sm">
              <label>Tipo pago</label>
              <select 
                class="form-control form-control-sm"
                id="tppago_pedido"
                readonly
              >
                <option value="NEQUI">NEQUI</option>
                <option value="BANCARIA">BANCARIA</option>
                <option value="CONTRAENTREGA">CONTRAENTREGA</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group input-group-sm">
              <label>Celular cliente</label>
              <input
                type="number"
                class="form-control"
                id="celular_pedido"
                readonly
              >
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group input-group-sm">
              <label>Total pedido</label>
              <input
                type="text"
                class="form-control"
                id="total_pedido"
                readonly
              >
            </div>
          </div>
          <div class="col-md-2 mt-4">            
            <div class="form-check">
              <input class="form-check-input mt-1" type="checkbox"  id="porpagar">
              <label >
                Cuentas por cobrar
              </label>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group input-group-sm">
              <label>Nombre</label>
              <input
                type="text"
                class="form-control"
                id="nombre_pedido"
                readonly
              >
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group input-group-sm">
              <label>Dirección</label>
              <input
                type="text"
                class="form-control"
                id="direccion_pedido"
                readonly
              >
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group input-group-sm">
              <label>Domicilio</label>
              <input
                type="text"
                class="form-control"
                id="domicilio_pedido"
              >
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label>Estado</label>
              <select 
                class="form-control form-control-sm"
                id="estado_pedido"
              >
                <option value="PEDIDO">PEDIDO</option>
                <option value="PREPARACION">PREPARACION</option>
                <option value="ENTREGADO">ENTREGADO</option>
                <option value="CANCELADO">CANCELADO</option>
              </select>
            </div>              
          </div>
        </div>
        <div class="form-group input-group-sm">
            <label>Comentarios</label>
            <textarea
              class="form-control"
              id="comentarios_pedido"
              readonly
            ></textarea>
        </div>
        <div class="row">
          <div class="table-responsive">
            <table class="table table-striped" >
              <thead>
                <tr>
                  <th class="text-uppercase text-xs font-weight-bolder opacity-12">#</th>
                  <th class="text-uppercase text-xs font-weight-bolder opacity-12">Pedido</th>
                  <th class="text-uppercase text-xs font-weight-bolder opacity-12">Producto</th>
                  <th class="text-uppercase text-xs font-weight-bolder opacity-12">Cantidad</th>
                </tr>
              </thead>
              <tbody class="detalle_productos_pedido ">
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn btn-danger text-white"
          onclick="reloadPage()"
        >
          Cancelar
        </button>
        <button
          type="button"
          class="btn btn-success text-white"
          id="Actualizarpedido"
        >
          Actualizar
        </button>
      </div>
    </div>
  </div>
</div>
  <?php require_once("componentes/scripts.php"); ?>
  <script src="<?php echo base_url(); ?>public/js/scripts/pedidos.js"></script>
  <script>
    var baseurl = "<?php echo base_url();?>";
  </script>
</body>
</html>