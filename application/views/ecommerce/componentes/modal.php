<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-close">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="signupModalFormSignup">
            <div class="text-center mb-3">
              <h2>Rastrea tu pedido</h2>
              <p>Con tu numero de celular puedes saber el estado de tu pedido</p>
              <input type="text" class="form-control" placeholder="Ingresa tu numero de celular">
            </div>
            <div class="d-grid gap-3">
              <h3 class="text-center">ORDEN DE PEDIDO</h3>
              <div class="row">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap mb-4">La Plazita Web</small>
          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="../assets/svg/brands/gitlab-gray.svg" alt="Logo">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  -->
  <div class="offcanvas offcanvas-top offcanvas-navbar-search bg-light" tabindex="-1" id="offcanvasNavbarSearch">
    <div class="offcanvas-body">
      <div class="container">
        <div class="w-lg-75 mx-lg-auto">
          <div class="d-flex justify-content-end mb-3">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="mb-7">
            <form>
              <div class="input-card">
                <div class="input-card-form">
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    placeholder="Buscar un producto"
                    aria-label="Search Front"
                  >
                </div>
                <button type="button" class="btn btn-primary btn-lg">Buscar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarEmptyShoppingCart">
    <div class="offcanvas-header justify-content-end border-0 pb-0">
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      
    </div>
  </div>
  <!-- MODAL DEL CARRITO -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">TU CARRITO DE COMPRAS</h1>
        <button type="button" class="btn-close" class="close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container my-5 py-3 z-depth-1 rounded">
<section class="dark-grey-text">
  <div class="table-responsive">
  <div class="text-center" id="CarritoVacio">

  </div>
    <table class="table product-table mb-0" id="sincarrito">
      <thead class="mdb-color lighten-5">
        <tr>
          <th></th>
          <th class="font-weight-bold">
            <strong>Producto</strong>
          </th>
          
          <th></th>
          <th class="font-weight-bold">
            <strong>Precio</strong>
          </th>
          <th class="font-weight-bold">
            <strong>Cantidad</strong>
          </th>
          
          <th></th>
        </tr>
      </thead>
      <tbody class="tbody">
      
      </tbody>
      <tr>
            <td colspan="3"></td>
            <td>
              <h4 class="mt-2">
                <strong>Total</strong>
              </h4>
            </td>
            <td class="text-right">
              <h4 class="mt-2">
                <strong class="itemCartTotal"></strong>
              </h4>
            </td>
            <td colspan="3" class="text-right">
              <a type="button" class="btn btn-primary btn-rounded btn-sm" data-toggle="modal" data-target="#detalle_pedido">Pasar a pedido
                <i class="fas fa-angle-right right"></i>
              </a>
            </td>
          </tr>
    </table>
  </div>
</section>
</div>
      </div>
      
    </div>
  </div>
</div>
  <!--  -->
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
                    <div class="carousel-item active text-center" id="imagen_producto">
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 text-center text-md-left">
                <h4
                  class="h4-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4 " id="text_nombre_producto">
                  
                </h4>
                <span class="text-danger product mb-2 ml-xl-0 ml-4" id="text_categoria_producto"></span>
                <h4 class="h3-responsive text-center text-md-left  ml-xl-0 ml-4">
                  <span class="red-text font-weight-bold" id="text_precio_producto">
                    
                  </span>
                  <!-- <span class="grey-text">
                    <small>
                      <s>$89</s>
                    </small>
                  </span> -->
                </h4>
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                  <div class="card">
                    <div class="card-header" role="tab" id="headingOne1">
                      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                        aria-controls="collapseOne1">
                        <h5 class="mb-0">
                          Descripción
                          <i class="fas fa-angle-down rotate-icon"></i>
                        </h5>
                      </a>
                    </div>
                    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                      data-parent="#accordionEx">
                      <p class="text-justify" id="text_descripcion_producto">
                      </p>
                    </div>
                  </div>
                </div>
                <section class="color">
                  <div class="mt-2">
                    <div class="row mt-3">
                      <div class="col-md-12 text-center text-md-left text-md-right" id="boton_agregar_carrito">
                        
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

    <!-- DETALLE DEL PEDIDO -->
    <div class="modal fade" id="detalle_pedido" tabindex="-1" aria-labelledby="detalle_pedidoLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="detalle_pedidoLabel">PASAR A PEDIDO</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container mt-5">
  <section class="dark-grey-text">
  	<div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-8">
            <ul class="nav md-pills nav-justified pills-primary font-weight-bold">
              <li class="nav-item">
                <a 
                  class="nav-link active"
                  data-toggle="tab"
                  href="#tabCheckoutBilling123"
                  role="tab"
                >
                  1. Datos del envio
                </a>
              </li>
              <!-- <li class="nav-item">
                <a 
                  class="nav-link" 
                  data-toggle="tab" 
                  href="#tabCheckoutPayment123" 
                  role="tab"
                >
                  2. Pagos
                </a>
              </li> -->
            </ul>
            <div class="tab-content pt-4">
              <div class="tab-pane fade in show active" id="tabCheckoutBilling123" role="tabpanel">
                <form>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="firstName" class="">Nombres (*)</label>
                      <input 
                        type="text"
                        class="form-control "
                        id="nombres_pedido"
                        onchange="validarCampos()"
                      >
                      <div class="invalid-feedback">
                        Ingrese su nombre.
                      </div>
                    </div>
                    <div class="col-md-6 mb-2">
                      <label for="lastName" class="">Apellidos (*)</label>
                      <input
                        type="text"
                        class="form-control"
                        id="apellidos_pedido"
                        onchange="validarCampos()"
                      >
                      <div class="invalid-feedback">
                        Ingrese su apellido.
                      </div>
                    </div>
                  </div>
                  <label for="email" class="">Celular (*)</label>
                  <input
                    type="number"
                    class="form-control mb-2"
                    id="celular_pedido"
                    onchange="validarCampos()"
                  >
                  <div class="invalid-feedback">
                    Ingrese su numero de celular.
                  </div>
                  <label for="address" class="">Dirección (*)</label>
                  <input
                    type="text"
                    class="form-control mb-2"
                    id="direccion_pedido"
                    onchange="validarCampos()"
                  >
                  <div class="invalid-feedback">
                    Ingrese la direccion a llegar el pedido.
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-12 mb-4">
                      <label for="country">Departamento</label>
                      <select
                        class="form-control d-block w-100"
                        required
                        disabled
                        id="departamento_pedido"
                      >
                        <option>TOLIMA</option>
                      </select>
                      <div class="invalid-feedback">
                        Por favor seleccione el departamento.
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                      <label for="state">Municipio</label>
                      <select
                        class="form-control d-block w-100"
                        required
                        disabled
                        id="municipio_pedido"
                        >
                        <option>IBAGUE</option>
                      </select>
                      <div class="invalid-feedback">
                        Por favor seleccione el municipio.
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-4">
                      <label for="zip">Sede (*)</label>
                      <select
                        class="form-control d-block w-100"
                        required 
                        id="sede_pedido"
                        onchange="validarCampos()"
                      >
                        <option value="">SELECCIONA LA SEDE MAS CERCANA A TI</option>
                        <option value="SEDE PRINCIPAL (BARRIO AMBALA)">SEDE PRINCIPAL (BARRIO AMBALA)</option>
                      </select>
                      <div class="invalid-feedback">
                        Por favor seleccione la sede mas cercana.
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <label>¿Alguna sugerencia a tu pedido?</label>
                      <textarea
                        rows="3"
                        class="form-control"
                        id="sugerencia_pedido"
                        placeholder="Aca puedes especificar si deseas alguna salsa, descontar ingredientes, etc."
                      ></textarea>
                    </div>
                  </div>
                <div class="d-block my-3">
                  <h6>¿Como deseas hacer el pago?</h6>
                  <div class="mb-2">
                    <input
                      name="group2"
                      type="radio"
                      class="form-check-input with-gap"
                      id="pago_pedido"
                      value="NEQUI"
                      onchange="validarCampos()"
                    >
                    <label class="form-check-label" for="pago_pedido">Nequi</label>
                  </div>
                  <div class="mb-2">
                    <input
                      name="group2"
                      type="radio"
                      class="form-check-input with-gap"
                      id="pago_pedido"
                      value="BANCARIA"
                      onchange="validarCampos()"
                    >
                    <label class="form-check-label" for="pago_pedido">Transferencia bancaria</label>
                  </div>
                  <div class="mb-2">
                    <input
                      name="group2"
                      type="radio"
                      class="form-check-input with-gap"
                      id="pago_pedido"
                      value="CONTRAENTREGA"
                      onchange="validarCampos()"
                    >
                    <label class="form-check-label" for="pago_pedido">Pago contra entrega</label>
                    <div class="invalid-feedback">
                      Seleccione metodo de pago.
                    </div>
                  </div>
                </div>
                  <hr>
                  <div class="mb-1">
                    <input
                      type="checkbox"
                      class="form-check-input filled-in"
                      id="chekboxRules"
                    >
                    <label class="form-check-label" for="chekboxRules">Acepto los términos y condiciones</label>
                  </div>
                  <div class="mb-1">
                    <input
                      type="checkbox"
                      class="form-check-input filled-in"
                      id="safeTheInfo"
                    >
                    <label class="form-check-label" for="safeTheInfo">Guarda para la próxima vez</label>
                  </div>
                  <hr>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <button
              class="btn btn-primary btn-lg btn-block"
              type="button"
              onclick="agragarOrdenPedido()"
            >
              Hacer pedido
            </button>
            <div class="card z-depth-0 border border-light rounded-0">
              <div class="card-body">
                <h4 class="mb-4 mt-1 h5 text-center font-weight-bold text-uppercase">Detalle del pedido</h4>
                <hr>
                <dl class="row contenido_detalle" id="contenido_detalle">
                  <pre>
                    
                  </pre>
                </dl>
                <hr>
                <dl class="row">
                  <dt class="col-sm-8">
                    Total del pedido
                  </dt>
                  <dt class="col-sm-4 itemCartTotalDetalle">
                    
                  </dt>
                </dl>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
      </div>
      
    </div>
  </div>
</div>