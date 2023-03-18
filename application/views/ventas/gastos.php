<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InventSoft - Gastos</title>
    <?php require_once("componentes/head.php"); ?>
</head>

<body style="background-color: #1e2040 !important;">
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url(''); background-position-y: 50%; background-repeat: no-repeat; background-size: 100%">
    <span class=""></span>
  </div>
  <div class="main-content position-relative max-height-vh-100 h-100">
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">InventSoft</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Gastos</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Gastos</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
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
    <?php require_once("componentes/navbar.php");?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0 h6 text-uppercase">Gastos</p>
                <button class="btn btn-primary text-white btn-xs ms-auto" data-bs-toggle="modal" href="#Agregarusuario" role="button"> <i class="fas fa-plus"></i> Agregar</button>
              </div>
            </div>
            <div class="card-body">
             <div class="table-responsive">
               <table class="table table-responsive table-hover table-borderless" id="table-gastos">
                 <thead class="bg-default">
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Opciones</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Categoria</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">proveedor</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Precio factura</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Cuentas por cobrar</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Fecha actual</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Fecha limite</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Usuario</th>
                 </thead>
                 <tbody>
                  <?php foreach($gasto->result() as $gastos) { ?>
                    <tr>
                    <td>
                <div class="row">
                  <a
                    class="icon icon-shape icon-sm me-1 bg-gradient-danger shadow mx-3"
                    href="#"
                  >
                    <i class="fas fa-times text-white opacity-10"></i>
                  </a>
                  <a
                    class="icon icon-shape icon-sm  bg-gradient-success shadow"
                    onclick="verUsuarios();"
                  >
                    <i class="fas fa-pen text-white opacity-10"></i>
                  </a>
                </div>
                    </td>
                      <td class="text-xs text-dark mb-0"><?php echo $gastos->categoria; ?></td>
                      <td class="text-xs text-dark mb-0"><?php echo $gastos->proveedor; ?></td>
                      <td class="text-xs text-dark mb-0">$ <?php echo $gastos->precio; ?></td>
                      <td class="text-xs text-dark mb-0"><?php echo $gastos->porpagar; ?></td>
                      <td class="text-xs text-dark mb-0"><?php echo $gastos->fecha; ?></td>
                      <td class="text-xs text-dark mb-0"><?php echo $gastos->fecha_limite; ?></td>
                      <td class="text-xs text-dark mb-0"><?php echo $gastos->usuario; ?></td>
                    </tr>
                  <?php }?>
                 </tbody>
               </table>
             </div>
            </div>
          </div>
          <?php require_once("componentes/footer.php"); ?>
        </div>

 <!-- MODAL AGREGAR GASTOS -->
 <div class="modal fade" id="Agregarusuario" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Agregar Gastos</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group input-group-sm">
            <label>Categoria</label>
            <select
              class="form-control"
              id="categoria_gasto"
            >
              <option value="">SELECCIONE</option>
              <option value="Gasto interno">Gasto interno</option>
              <option value="Pago proveedores">Pago a proveedores</option>
              <option value="Pago descuento">Pago por descuento</option>
              <option value="Gasto temporal">Gasto temporal</option>
            </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Proveedor</label>
              <select 
                class="form-control form-control-sm"
                id="proveedor_gasto"
              >
              <?php foreach($proveedor->result() as $proveedores) { ?>
                <option value="<?php echo $proveedores->nombre; ?>"><?php echo $proveedores->nombre; ?></option>
              <?php } ?>
              </select>
              
            </div>              
          </div>
          <div class="col-md-2">
            <div class="form-group input-group-sm">
              <label>Fecha</label>
              <input
                type="date"
                class="form-control"
                id="fecha_gasto"
                value="<?php echo date("Y-m-d"); ?>"
                readonly
              >
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7">
            <div class="form-group input-group-sm">
              <label>Nombre</label>
              <input
                type="text"
                class="form-control"
                id="nombre_gasto"
              >
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group input-group-sm">
              <label>Precio factura</label>
              <input
                type="number"
                class="form-control"
                id="precio_factura"
                min="0"
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
        <div class="col-md-6">
            <div class="form-group input-group-sm">
              <label>Fecha limite</label>
              <input
                type="date"
                class="form-control"
                id="fecha_limite"
                value="<?php echo date("Y-m-d"); ?>"
              >
            </div>
          </div>
          
        </div>
        <div class="form-group input-group-sm">
            <label>Descripciòn</label>
            <textarea
              class="form-control"
              id="descripcion_gasto"
            ></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn color-cyan text-white"
          id="creargasto"
        >
          Guardar
        </button>
      </div>
    </div>
  </div>
</div>
  <?php require_once("componentes/scripts.php"); ?>
  <script>
    var baseurl = "<?php echo base_url();?>";
  </script>
  <script src="<?php echo base_url(); ?>public/js/scripts/gastos.js"></script>
</body>
</html>