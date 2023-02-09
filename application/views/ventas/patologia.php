<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InventSoft - Inventarios</title>
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
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Usuarios</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Usuarios</h6>
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
    <?php require_once("componentes/navbar.php"); ?>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0 h6 text-uppercase">Inventarios</p>
                <button class="btn btn-primary text-white btn-xs ms-auto mx-2" data-bs-toggle="modal" href="#productos" role="button"> <i class="fas fa-shopping-basket"></i> Agregar Producto</button>
                <button class="btn color-cyan btn-primary btn-xs  mx-2" data-bs-toggle="modal" href="#consulta" role="button"> <i class="fas fa-search"></i> Consulta</button>
                <button class="btn btn-success btn-xs mx-2" data-bs-toggle="modal" href="#entrada" role="button"> <i class="fas fa-plus"></i> Entrada</button>
                <?php if($this->session->userdata("rol") === "Administrador"){ ?>
                <button class="btn btn-danger btn-xs mx-2" data-bs-toggle="modal" href="#salida" role="button" > <i class="fas fa-minus"></i> Salida</button>
                <?php }?>
              </div>
            </div>
            <div class="card-body">
             <div class="table-responsive">
               <table class="table table-responsive table-borderless table-hover" id="tabla-productos">
                 <thead class="bg-default ">
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Opciones</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Imagen</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Codigo</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Nombre</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Categoria</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Valor</th>
                   <th class="text-uppercase text-white text-xs font-weight-bolder opacity-12">Stock</th>
                 </thead>
                 <tbody>
                   <?php foreach($producto->result() as $productos) { ?>
                    <tr>
                    <td>
                <div class="row">
                  <a
                    class="icon icon-shape icon-sm me-1 bg-gradient-danger shadow mx-3"
                    href="#"
                  >
                    <i class="fas fa-times text-white opacity-10"></i>
                  </a>
                  <?php if($this->session->userdata("rol") == "Administrador"){  ?>
                  <a
                    class="icon icon-shape icon-sm  bg-success shadow"
                    onclick="verProductos(<?php echo $productos->codigo; ?>);"
                  >
                    <i class="fas fa-pen text-white opacity-10"></i>
                  </a>
                  <?php }?>
                </div>
                  </td>
                  <?php if($productos->url_imagen == ""){ ?>
                  <td>
                    <div class="">
                      <img
                        src="https://static.vecteezy.com/system/resources/previews/007/481/440/non_2x/red-shopping-basket-with-products-icon-isolated-on-background-with-green-leaves-plastic-shop-cart-with-vegetables-fruit-water-healthy-food-illustration-organic-natural-concept-vector.jpg"
                        class="avatar avatar-md me-3"
                      >
                    </div>
                  </td>
                  <?php } else {?>
                    <td>
                    <div class="">
                      <img
                        src="<?php echo base_url(); ?>public/productos/<?php echo $productos->url_imagen; ?>"
                        class="avatar avatar-md me-3"
                      >
                    </div>
                  </td>
                  <?php }?>
                  <td class="text-uppercase text-dark text-xs font-weight-bolder opacity-12"><?php echo $productos->codigo; ?></td>
                  <td class="text-uppercase text-dark text-xs font-weight-bolder opacity-12"><?php echo $productos->nombre; ?></td>
                  <td class="text-uppercase text-dark text-xs font-weight-bolder opacity-12"><?php echo $productos->categorias; ?></td>
                  <td class="text-uppercase text-dark text-xs font-weight-bolder opacity-12"><?php echo $productos->precio; ?></td>
                  <td class="text-uppercase text-dark text-xs font-weight-bolder opacity-12"><?php echo $productos->stock ?></td>
                </tr>
                   <?php } ?>
                 </tbody>
               </table>
             </div>
            </div>
          </div>
          <?php require_once("componentes/footer.php"); ?>
        </div>
  <!-- MODAL PRODUCTOS-->
  <div class="modal fade" id="productos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Agregar producto</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Categoria</label>
                    <select
                      id="categoria_p"
                      class="form-control form-control-sm"
                    >
                      <option value="">Seleccione una categoria</option>
                      <?php foreach($categoria->result() as $categorias) { ?>
                        <option value="<?php echo $categorias->codigo_categoria; ?>"><?php echo $categorias->nombre; ?></option>
                      <?php } ?>
                    </select>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Nombre</label>
                    <input
                      type="text"
                      id="nombre_p"
                      class="form-control form-control-sm"
                    >
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Codigo</label>
                    <input
                      type="number"
                      id="codigo_p"
                      class="form-control form-control-sm"
                      min="0"
                    >
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Codigo de barras</label>
                    <input
                      type="number"
                      id="codigo_barras_p"
                      class="form-control form-control-sm"
                      min="0"
                    >
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Unidad medida</label>
                    <select id="medida_p" class="form-control form-control-sm">
                        <option value="Caja">Caja</option>
                        <option value="Galones">Galones</option>
                        <option value="Gramos">Gramos</option>
                        <option value="Hora">Hora</option>
                        <option value="Kilos">Kilos</option>
                        <option value="Litros">Litros</option>
                        <option value="Metros">Metros</option>
                        <option value="Pies">Pies</option>
                        <option value="Pulgadas">Pulgadas</option>
                        <option value="Servicio">Servicio</option>
                        <option value="Unidades" selected>Unidades</option>
                        <option value="Yardas">Yardas</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Merma</label>
              <input type="text" class="form-control form-control-sm" id="merma">
            </div>
          </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Cantidad</label>
                    <input
                      type="number"
                      id="cantidad_p"
                      class="form-control form-control-sm"
                      min="0"
                    >
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Precio de Venta</label>
                    <input
                      type="number"
                      id="precio_p"
                      class="form-control form-control-sm"
                      min="0"
                    >
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Moneda</label>
                    <select id="moneda_p" class="form-control form-control-sm">
                        <option value="COP">Pesos ( COP )</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>Precio proveedor</label>
              <input
                type="number"
                id="precio_proveedor"
                class="form-control
                form-control-sm"
                min="0"
              >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Imagen</label>
              <input
                type="file"
                class="form-control form-control-sm"
                name="imagen"
                id="imagen"
              >
            </div>
          </div>
          <div class="col-md-2 mt-4">
            <div class="form-check form-switch mt-2">
              <input
                class="form-check-input"
                type="checkbox"
                role="switch"
                id="pro_venta"
                checked
              >
              <label class="form-check-label" for="pro_venta">Producto de venta</label>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea id="descripcion_p" class="form-control"></textarea>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn color-cyan text-white"
          id="guardar_productos"
        >
        Guardar
        </button>
      </div>
    </div>
  </div>
</div>

<!-- ACTUALIZAR PRODUCTOS -->
<div class="modal fade" id="actualizarproductos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Actualizar producto</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <input type="text" class="form-control" id="id_productos_act" hidden>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center" id="img-actualizar">
            <img
              src="https://demos.creative-tim.com/argon-dashboard/assets/img/team-2.jpg"
              class="rounded-circle img-fluid border border-2 border-white"
              width="150px;"
            >
          </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Categoria</label>
                    <select
                      id="categoria_p_act"
                      class="form-control form-control-sm"
                    >
                      <option value="">Seleccione una categoria</option>
                      <?php foreach($categoria->result() as $categorias) { ?>
                        <option value="<?php echo $categorias->codigo_categoria; ?>"><?php echo $categorias->nombre; ?></option>
                      <?php } ?>
                    </select>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Nombre</label>
                    <input
                      type="text"
                      id="nombre_p_act"
                      class="form-control form-control-sm"
                      
                    >
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Codigo</label>
                    <input
                      type="number"
                      id="codigo_p_act"
                      class="form-control form-control-sm"
                      
                    >
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Codigo de barras</label>
                    <input
                      type="number"
                      id="codigo_barras_p_act"
                      class="form-control form-control-sm"
                      
                    >
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Unidad medida</label>
                    <select id="medida_p" class="form-control form-control-sm">
                        <option value="Caja">Caja</option>
                        <option value="Galones">Galones</option>
                        <option value="Gramos">Gramos</option>
                        <option value="Hora">Hora</option>
                        <option value="Kilos">Kilos</option>
                        <option value="Litros">Litros</option>
                        <option value="Metros">Metros</option>
                        <option value="Pies">Pies</option>
                        <option value="Pulgadas">Pulgadas</option>
                        <option value="Servicio">Servicio</option>
                        <option value="Unidades" selected>Unidades</option>
                        <option value="Yardas">Yardas</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="">Merma</label>
              <input type="text" class="form-control form-control-sm" >
            </div>
          </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Cantidad</label>
                    <input
                      type="number"
                      id="cantidad_p"
                      class="form-control form-control-sm"
                      min="0"
                    >
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Precio de Venta</label>
                    <input
                      type="number"
                      id="precio_p_act"
                      class="form-control form-control-sm"
                      min="0"
                    >
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Moneda</label>
                    <select id="moneda_p" class="form-control form-control-sm" readonly>
                        <option value="COP">Pesos ( COP )</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>Precio proveedor</label>
              <input
                type="number"
                id="precio_proveedor_act"
                class="form-control
                form-control-sm"
                min="0"
              >
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Imagen</label>
              <input
                type="file"
                class="form-control form-control-sm"
                id="imagen2"
              >
            </div>
          </div>
          <div class="col-md-2 mt-4">
            <div class="form-check form-switch mt-2">
              <input
                class="form-check-input"
                type="checkbox"
                role="switch"
                id="pro_venta_act"
                checked
              >
              <label class="form-check-label" for="pro_venta">Producto de venta</label>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Descripcion</label>
                    <textarea id="descripcion_p_act" class="form-control"></textarea>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
      <button
          type="button"
          class="btn  btn-danger text-white"
          id="actualizar_imagen"
        >
          Actualizar imagen
        </button>
        <button
          type="button"
          class="btn color-cyan text-white"
          id="actualizar_productos"
        >
          Actualizar
        </button>

      </div>
    </div>
  </div>
</div>
<!-- CONSULTA DE KARDEX -->
<div class="modal fade" id="consulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-uppercase text-white font-weight-bold" id="exampleModalLabel">Consulta de kardex</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <label>Seleccione la accion a buscar</label>
            <select class="form-control form-control-sm" id="opciones-inventario">
              <option value="">Seleccione una opción</option>
              <option value="1">Consulta de kardex</option>
              <option value="2">Consulta de inventario</option>
            </select>
          </div>
        </div>
       <div class="movimientos-kardex" hidden>
        <div class="row mt-3">
          <div class="col-md-4">
            <div class="form-group">
              <label>Producto</label>
              <input
                type="text"
                class="form-control form-control-sm"
                id="producto_kardex"
              >
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Fecha inicial</label>
              <input
                type="date"
                class="form-control form-control-sm"
                id="fecha_inicial"
              >
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label>Fecha final</label>
              <input
                type="date"
                class="form-control form-control-sm"
                id="fecha_final"
              >
            </div>
          </div>
          <div class="col-md-2 mt-4">
            <button class="btn btn-success btn-sm mt-2" id="buscar_kardex"> <i class="fas fa-search"></i> Buscar</button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="table-responsive">
              <table class="table table-responsive table-stripped">
                <thead>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">#</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">FECHA TRANSACCIÓN</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">TIPO</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">MOTIVO</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">ENTRADA</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">SALIDA</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">SALDO</th>
                </thead>
                <tbody id="table-kardex">

                </tbody>
              </table>
            </div>
          </div>
        </div>
       </div>
       <br>
       <div class="consulta-inventario" hidden>
        <div class="row">
          <div class="col-md-5">
            <label for="">Sección</label>
            <select class="form-control form-control-sm">
              <option value=""> Cafeteria Buen viaje </option>
            </select>
          </div>
          <div class="col-md-5">
            <label for="">Por stock</label>
            <select id="stock_reporte" class="form-control form-control-sm">
              <option value="0"> Todos </option>
              <option value="1"> Stock < 0 </option>
              <option value="2"> Stock = 0 </option>
              <option value="3"> Personalizado </option>
            </select>
          </div>
          <div class="col-md-2">
            <label>Cantidad</label>
            <input type="number" class="form-control form-control-sm">
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-12">
            <div class="table-responsive">
              <table class="table table-responsive table-borderless table-stripped" id="table-inventario">
                <thead>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">CODIGO</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">PRODUCTO</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">CATEGORIA</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">COSTO</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">FECHA INGRESO</th>
                  <th class="text-uppercase text-dark text-xs font-weight-bolder opacity-12">STOCK</th>
                </thead>
                <tbody id="table-consulta">

                </tbody>
              </table>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- MODALENTRADA -->
  <div class="modal fade" id="entrada" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Ingreso de productos a la cafeteria</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Producto</label>
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      id="producto_e"
                    >
                    <!-- <select
                      id="producto_e"
                      class="form-control form-control-sm"
                    >
                      <option  value="">Seleccione un producto</option>
                      <?php foreach($producto->result() as $productos) { ?>
                        <option  value="<?php echo $productos->codigo_producto; ?>"><?php echo $productos->nombre; ?></option>
                      <?php }?>
                    </select> -->
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Cantidad</label>
                    <input
                      type="number"
                      id="cantidad_e"
                      class="form-control form-control-sm"
                      min="0"
                    >
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                </div>
            </div>
            <!-- insersión label producto m.p -->
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Precio producto</label>
              <input 
              type="number" 
              class="form-control form-control-sm" 
              id="precioproducto_e"
              min="0"
              readonly
              >
              <div id="validationServer03Feedback" class="invalid-feedback">
                Campo obligatorio
            </div> 
            </div>
          </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Stock</label>
                    <input
                      type="number"
                      id="stock_e"
                      class="form-control form-control-sm"
                      readonly
                    >
                </div>
            </div>
        </div>
        <!-- INICIO MICHAEL CAMBIO E-->
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label for="">Nombre producto</label>
              <input 
              type="text" 
              class="form-control form-control-sm" 
              id="nombreproducto_e"
              readonly
              >
            </div>
          </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Valor compra</label>
              <input 
                type="number" 
                class="form-control form-control-sm" 
                id="valorcompra_e"
                min="0"
                readonly
                >
                  <div id="validationServer03Feedback" class="invalid-feedback">
                Campo obligatorio
              </div>
            </div>  
          </div>
        </div>
        <!-- FIN MICHAEL CAMBIO-->
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Sección</label>
                    <select id="seccion_e" class="form-control form-control-sm">
                      <option value="buenviaje">Sede principal</option>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Motivo de ingreso</label>
                    <select id="motivo_e" class="form-control form-control-sm">
                      <option value="">Seleccione el motivo del ingreso</option>
                      <option value="Compra">Compra de Insumos</option>
                      <option value="Obsequio">Obsequio Empresarial</option>
                      <option value="Temporal">Ingreso Temporal</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Comentarios</label>
                    <textarea id="comentarios_e" class="form-control"></textarea>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn color-cyan text-white" id="guardar_e">Guardar</button>
      </div>
    </div>
  </div>
</div>

<!-- SALIDA DE PRODUCTOS  -->
<div class="modal fade" id="salida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Salida de productos de la cafeteria</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Producto</label>
                    <input
                      type="text"
                      class="form-control form-control-sm"
                      id="producto_s"
                    >
                    <!-- <select id="producto_s" class="form-control form-control-sm">
                    <option  value="">Seleccione un producto</option>
                      <?php foreach($producto->result() as $productos) { ?>
                        <option  value="<?php echo $productos->codigo_producto; ?>"><?php echo $productos->nombre; ?></option>
                      <?php }?>
                    </select> -->
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Cantidad</label>
                    <input
                      type="number"
                      id="cantidad_s"
                      class="form-control form-control-sm"
                      min="0"
                    >
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>Precio producto</label>
              <input 
              type="number" 
              class="form-control form-control-sm" 
              id="precioproducto_s" 
              min="0"
              readonly
              >
              <div id="validationServer03Feedback" class="invalid-feedback">
                Campo obligatorio
            </div> 
            </div>
          </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>Stock</label>
                    <input
                      type="number"
                      id="stock_s"
                      class="form-control form-control-sm"
                      readonly
                    >
                  </div>
                </div>
              </div>
                <!-- INICIO MICHAEL CAMBIO S-->
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label for="">Nombre producto</label>
              <input 
              type="text" 
              class="form-control form-control-sm" 
              id="nombreproducto_s"
              readonly
              >
              <div id="validationServer03Feedback" class="invalid-feedback">
                Campo obligatorio
            </div> 
            </div>
          </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Valor compra</label>
              <input type="number" class="form-control form-control-sm" id="valorcompra_s" min="0" readonly>
              <div id="validationServer03Feedback" class="invalid-feedback">
                Campo obligatorio
            </div>  
          </div>
        </div>
        <!-- FIN MICHAEL CAMBIO-->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Sección</label>
                    <select id="seccion_s" class="form-control form-control-sm">
                      <option value="Salud madre y mujer">Sede principal</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Motivo de salida</label>
                    <select id="motivo_s" class="form-control form-control-sm">
                      <option value="">Seleccione el motivo del ingreso</option>
                      <option value="Gasto interno">Salida por gasto interno</option>
                      <option value="Vencimiento">Salida por Vencimiento</option>
                      <option value="Prestamo">Salida por prestamo</option>
                      <option value="Temporal">Salida Temporal</option>
                    </select>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Comentarios</label>
                    <textarea id="comentarios_s" class="form-control"></textarea>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                      Campo obligatorio
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn color-cyan text-white" id="guardar_s">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php require_once("componentes/scripts.php"); ?>
    <script>
      var baseurl = "<?php echo base_url();?>";
    </script>
   <script src="<?php echo base_url(); ?>public/js/scripts/inventarios.js"></script>
</body>
</html>