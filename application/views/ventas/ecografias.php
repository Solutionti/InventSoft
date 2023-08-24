<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InventSoft - Inventarios</title>
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Reportes</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Reportes</h6>
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
    <?php require_once("componentes/navbar.php"); ?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0 h6 text-uppercase">Reportes Generales</p>
              </div>
            </div>
          <div class="card-body">
        <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <?php $ventadias = $ventadia->result()[0]; ?>
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Venta Diaria</p>
                    <h5 class="font-weight-bolder">
                      <?php echo $ventadias->venta; ?>
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">100%</span>
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <?php $gastos = $gasto->result()[0]; ?>
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Gastos</p>
                    <h5 class="font-weight-bolder">
                      <?php echo $gastos->gastos; ?>
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+50%</span>
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="fas fa-file-contract text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Gastos - Venta</p>
                    <h5 class="font-weight-bolder">
                      <?php echo ($ventadias->venta - $gastos->gastos); ?>
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+70%</span>
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="fas fa-money-bill text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <?php $productodias = $productodia->result()[0]; ?>
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Producto</p>
                    <h5 class="font-weight-bolder">
                      <?php echo $productodias->productos; ?>
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+50%</span>
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <i class="fas fa-barcode text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-3">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <?php $totalproveedores = $totalproveedor->result()[0]; ?>
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total proveedor</p>
                    <h5 class="font-weight-bolder">
                      <?php echo $totalproveedores->totalproveedor; ?>
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+100%</span>
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-info shadow-success text-center rounded-circle">
                    <i class="fas fa-database text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4 mt-3">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <?php $totalinventarios = $totalinventario->result()[0]; ?>
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Ganancia total</p>
                    <h5 class="font-weight-bolder">
                      <?php echo $totalinventarios->totalinventario; ?>
                    </h5>
                    <p class="mb-0">
                      <span class="text-success text-sm font-weight-bolder">+100%</span>
                    </p>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-dark shadow-success text-center rounded-circle">
                    <i class="fas fa-shopping-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-3">
          <div class="card border-1">
            <div class="card-body">
              <h5 class="card-title">Tablero de reportes</h5>
              <label>Seleccione el reporte a consultar</label>
              <select name="select-inputs" id="select-inputs" class="form-control">
               <option value="">SELECCIONE UNA OPCIÓN</option>
               <option value="1">Transacciones de venta por dia</option>
               <option value="7">Transacciones de pedidos por dia</option>
               <option value="2">Ventas por categoria</option>
               <option value="3">Transacciones por producto</option>
               <option value="4">Ganancia general</option>
               <option value="5">Kardex consolidado</option>
               <option value="6">Inventario</option>
               <option value="7">Reporte ABC</option>
               <option value="8">Gastos</option>
              </select> 
            </div> 
          </div>
        </div>
        <div class="col-md-9">
          <div class="card border-1">
            <div class="card-body">
               <div id="reporte-dia" hidden>
                <div class="row">
                <h5> Reporte por día</h5>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="">Fecha inicial</label>
                      <input type="date" class="form-control" id="fecha_inicial">
                    </div>
                  </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Fecha final</label>
                      <input type="date" class="form-control" id="fecha_final">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="">Usuario</label>
                      <select class="form-control" id="usuario">
                        <option value="0" selected>SELECCIONE UNA OPCION</option>
                        <?php foreach($usuario->result() as $usuarios) {?>
                        <option value="<?php echo $usuarios->nombre; ?>"><?php echo $usuarios->nombre .' '.$usuarios->apellido; ?></option>
                        <?php } ?>
                      </select>
                      </div>
                      <div class="col-md-2 mt-4">
                        <button type="button" class="btn btn-danger mt-2" onclick="reporteDia()">Pdf</button>
                      </div>
                </div>
               </div>
              <div id="ventas-categoria" hidden>
                <div class="row">
                <h5> Ventas por categoria</h5>
                  <div class="col-md-3">
                  <div class="form-group">
                      <label for="">Fecha inicial</label>
                      <input type="date" id="fecha_inicial_categoria" class="form-control">
                    </div>
                  </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label for="">Fecha final</label>
                      <input type="date" id="fecha_final_categoria" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <label for="">Categoria</label>
                        <select class="form-control" id="tp_categoria" aria-label="Default select example">
                           <option>Seleccione la categoria</option>
                           <?php foreach($categoria->result() as $categorias) { ?>
                           <option value="<?php echo $categorias->codigo_categoria; ?>"><?php echo $categorias->nombre; ?></option>
                           <?php } ?>
                        </select>
                      </div>
                      <div class="col-md-2 mt-4">
                        <button type="button" class="btn btn-primary mt-2" onclick="reporteCategoriaVenta()">Pdf</button>
                         </div>
                           </div>
                             </div>
                               <div id="transaccion-producto" hidden>
                                 <div class="row">
                                   <h5> Transacciones por producto</h5>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                        <label for="">Codigo producto</label>
                                        <input 
                                          type="text" 
                                          class="form-control form-control-md" 
                                          id="codigoproducto_e">
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                        <label for="">Nombre producto</label>
                                          <input 
                                            type="text" 
                                            class="form-control form-control-md" 
                                            id="nombreproducto_e"
                                          >
                                        </div>
                                      </div>
                                      <div class="col-md-2">
                                        <div class="form-group">
                                          <label for="">Fecha inicial</label>
                                          <input type="date" class="form-control">
                                        </div>
                                      </div>
                                      <div class="col-md-2">
                                        <div class="form-group">
                                          <label for="">Fecha final</label>
                                          <input type="date" class="form-control">
                                        </div>
                                      </div>
                                      <div class="col-md-2 mt-4">
                                        <button type="button" class="btn btn-primary mt-2">Buscar</button>
                                      </div>
      <!-- fin row   -->            </div> 
                                  </div>
                                  <div id="ganancia-general" hidden>
                                    <h5>Ganancia general por categoria</h5>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <select class="form-control" id="generalcategoria">
                                          <option value="">Todas</option>
                                          <?php foreach($categoria->result() as $categorias) { ?>
                                            <option value="<?php echo $categorias->codigo_categoria; ?>"><?php echo $categorias->nombre; ?></option>
                                           <?php } ?>
                                        </select>
                                        <br>
                                        <div class="table-responsive">
                                          <table class="table table-striped table-hover">
                                            <thead class="bg-default">
                                              <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Ganancia total</th>
                                              <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Ganancia proveedor</th>
                                              <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Categoria</th>
                                            </thead>
                                            <tbody id="table-ganancia-general">
                                              
                                            </tbody>
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div id="kardex-general" hidden>
                                    <h5>Reporte de kardex consolidado</h5>
                                    <div class="row">
                                      <div class="col-md-5">
                                        <div class="form-group">
                                          <label for="">Fecha inicial</label>
                                          <input type="date" id="fecha_inicial_kardex" class="form-control">
                                        </div>
                                      </div>
                                      <div class="col-md-5">
                                        <div class="form-group">
                                          <label for="">Fecha final</label>
                                          <input type="date" id="fecha_final_kardex" class="form-control">
                                        </div>
                                      </div>
                                      <div class="col-md-2 mt-4">
                                      <button type="button" class="btn btn-primary mt-2" onclick="kardexPdf()">Pdf</button>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- termina -->
                                  <div id="inventario-pdf" hidden>
                                  <h5>Inventario</h5>
                                    <div class="row">
                                      <div class="col-md-9">
                                        <div class="form-group">
                                          <label for="">Categoria</label>
                                          <select class="form-control" id="generalcategoriainventario">
                                          <option value="0">Todas</option>
                                          <?php foreach($categoria->result() as $categorias) { ?>
                                            <option value="<?php echo $categorias->codigo_categoria; ?>"><?php echo $categorias->nombre; ?></option>
                                           <?php } ?>
                                        </select>
                                        </div>
                                      </div>
                                      <div class="col-md-2 mt-4">
                                      <button type="button" class="btn btn-primary mt-2" onclick="inventarioPdf()">Pdf</button>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- termina -->
                                  <div id="todascategorias" hidden>
                                    <h5>Reporte ABC</h5>
                                    <div class="row">
                                      <div class="col-md-3">
                                        <div class="form-group">
                                          <label for="">Fecha inicial</label>
                                          <input type="date" id="fecha_inicial_dinero" class="form-control">
                                        </div>
                                      </div>
                                      <div class="col-md-3">
                                        <div class="form-group">
                                          <label for="">Fecha final</label>
                                          <input type="date" id="fecha_final_dinero" class="form-control">
                                        </div>
                                      </div>
                                      <div class="col-md-4">
                                        <label for="">Usuario</label>
                                        <select class="form-control" id="usuario_final_dinero">
                                         <option value="0" selected>SELECCIONE UNA OPCION</option>
                                         <?php foreach($usuario->result() as $usuarios) {?>
                                          <option value="<?php echo $usuarios->nombre; ?>"><?php echo $usuarios->nombre .' '.$usuarios->apellido; ?></option>
                                         <?php } ?>
                                        </select>
                                      </div>
                                      <div class="col-md-2 mt-4">
                                      <button type="button" class="btn btn-primary mt-2" onclick="pdfdineroCategoria()">Pdf</button>
                                      </div>
                                    </div>
                                  </div>
                                  <!--  -->
                                  <div id="gastos" hidden>
                                    <h5>Gastos</h5>
                                    <div class="row">
                                      <div class="col-md-5">
                                        <div class="form-group">
                                          <label for="">Fecha inicial</label>
                                          <input type="date" id="fecha_inicial_gasto" class="form-control">
                                        </div>
                                      </div>
                                      <div class="col-md-5">
                                        <div class="form-group">
                                          <label for="">Fecha final</label>
                                          <input type="date" id="fecha_final_gasto" class="form-control">
                                        </div>
                                      </div>
                                      <div class="col-md-2 mt-4">
                                      <button type="button" class="btn btn-primary mt-2" onclick="pdfGastos()">Pdf</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
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

  <?php require_once("componentes/scripts.php"); ?>
  <script>
    var baseurl = "<?php echo base_url();?>";
  </script>
  <script src="<?php echo base_url(); ?>public/js/scripts/reportes.js"></script>
</body>
</html>