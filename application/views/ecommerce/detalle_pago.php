<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del pago</title>
    <link rel="stylesheet" href="<?php echo base_url();?>./public/css/asclepio.min.css">
<body>
<div class="container mt-5">
  <section class="dark-grey-text">
  	<div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-8">
            <ul class="nav md-pills nav-justified pills-primary font-weight-bold">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tabCheckoutBilling123" role="tab">1. Datos del envio</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabCheckoutPayment123" role="tab">2. Pagos</a>
              </li>
            </ul>
            <div class="tab-content pt-4">
              <div class="tab-pane fade in show active" id="tabCheckoutBilling123" role="tabpanel">
                <form>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="firstName" class="">Nombres</label>
                      <input type="text" id="firstName" class="form-control">
                    </div>
                    <div class="col-md-6 mb-2">
                      <label for="lastName" class="">Apellidos</label>
                      <input type="text" id="lastName" class="form-control">
                    </div>
                  </div>
                  <div class="input-group mb-4" hidden>
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control py-0" placeholder="Username" aria-describedby="basic-addon1">
                  </div>
                  <label for="email" class="">Celular</label>
                  <input type="text" id="email" class="form-control mb-3">

                  <label for="address" class="">Dirección</label>
                  <input type="text" id="address" class="form-control mb-3">
                  <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4">
                      <label for="country">Departamento</label>
                      <select class="custom-select d-block w-100" id="country" required disabled>
                        <option>TOLIMA</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid country.
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                      <label for="state">Municipio</label>
                      <select class="custom-select d-block w-100" id="state" required disabled>
                        <option>IBAGUE</option>
                      </select>
                      <div class="invalid-feedback">
                        Please provide a valid state.
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                      <label for="zip">Sede</label>
                      <input type="text" class="form-control" id="zip" placeholder="" required>
                      <div class="invalid-feedback">
                        Zip code required.
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="mb-1">
                    <input type="checkbox" class="form-check-input filled-in" id="chekboxRules">
                    <label class="form-check-label" for="chekboxRules">Acepto los términos y condiciones</label>
                  </div>
                  <div class="mb-1">
                    <input type="checkbox" class="form-check-input filled-in" id="safeTheInfo">
                    <label class="form-check-label" for="safeTheInfo">Guarda esta información para la próxima vez</label>
                  </div>
                  <div class="mb-1">
                    <input type="checkbox" class="form-check-input filled-in" id="subscribeNewsletter">
                    <label class="form-check-label" for="subscribeNewsletter">Crearte como usuario</label>
                  </div>
                  <hr>
                  <button class="btn btn-primary btn-lg btn-block" type="submit">Proximo paso</button>
                </form>
              </div>
              <div class="tab-pane fade" id="tabCheckoutAddons123" role="tabpanel">
                <div class="row">
                  <div class="col-md-5 mb-4">
                    <img src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" class="img-fluid z-depth-1-half"
                      alt="Second sample image">
                  </div>
                  <div class="col-md-7 mb-4">
                    <h5 class="mb-3 h5">Additional premium support</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, ea ut aperiam corrupti,
                      dolorem.</p>
                    <select class="mdb-select colorful-select dropdown-info">
                      <option value="" disabled>Choose a period of time</option>
                      <option value="1" selected>+6 months : 200$</option>
                      <option value="2">+12 months: 400$</option>
                      <option value="3">+18 months: 800$</option>
                      <option value="4">+24 months: 1200$</option>
                    </select>
                    <button type="button" class="btn btn-primary btn-md">Add premium support to the cart</button>
                  </div>
                </div>
                <hr class="mb-5">
                <div class="row">
                  <div class="col-md-5 mb-4">
                    <img src="https://mdbootstrap.com/img/Photos/Others/images/44.jpg" class="img-fluid z-depth-1-half"
                      alt="Second sample image">
                  </div>
                  <div class="col-md-7 mb-4">
                    <h5 class="mb-3 h5">MDB Membership</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, ea ut aperiam corrupti,
                      dolorem.</p>
                    <select class="mdb-select colorful-select dropdown-info">
                      <option value="" disabled>Choose a period of time</option>
                      <option value="1" selected>+6 months : 200$</option>
                      <option value="2">+12 months: 400$</option>
                      <option value="3">+18 months: 800$</option>
                      <option value="4">+24 months: 1200$</option>
                    </select>
                    <button type="button" class="btn btn-primary btn-md">Add MDB Membership to the cart</button>
                  </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Next step</button>
              </div>
              <div class="tab-pane fade" id="tabCheckoutPayment123" role="tabpanel">
                <div class="d-block my-3">
                  <div class="mb-2">
                    <input name="group2" type="radio" class="form-check-input with-gap" id="radioWithGap4" checked
                      required>
                    <label class="form-check-label" for="radioWithGap4">Nequi</label>
                  </div>
                  <div class="mb-2">
                    <input iname="group2" type="radio" class="form-check-input with-gap" id="radioWithGap5"
                      required>
                    <label class="form-check-label" for="radioWithGap5">Transferencia bancaria</label>
                  </div>
                  <div class="mb-2">
                    <input name="group2" type="radio" class="form-check-input with-gap" id="radioWithGap6" required>
                    <label class="form-check-label" for="radioWithGap6">Pago contra entrega</label>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="cc-name123">Name on card</label>
                    <input type="text" class="form-control" id="cc-name123" placeholder="" required>
                    <small class="text-muted">Full name as displayed on card</small>
                    <div class="invalid-feedback">
                      Name on card is required
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="cc-number123">Credit card number</label>
                    <input type="text" class="form-control" id="cc-number123" placeholder="" required>
                    <div class="invalid-feedback">
                      Credit card number is required
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <label for="cc-expiration123">Expiration</label>
                    <input type="text" class="form-control" id="cc-expiration123" placeholder="" required>
                    <div class="invalid-feedback">
                      Expiration date required
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="cc-cvv123">CVV</label>
                    <input type="text" class="form-control" id="cc-cvv123" placeholder="" required>
                    <div class="invalid-feedback">
                      Security code required
                    </div>
                  </div>
                </div>
                <hr class="mb-4">
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">hacer pedido</button>
            <div class="card z-depth-0 border border-light rounded-0">
              <div class="card-body">
                <h4 class="mb-4 mt-1 h5 text-center font-weight-bold">Detalle del pedido</h4>
                <hr>
                <dl class="row">
                  <dd class="col-sm-8">
                    MDBootstrap UI KIT (jQuery version) - License 6-10 poeple + unlimited projects
                  </dd>
                  <dd class="col-sm-4">
                    $ 2000
                  </dd>
                </dl>
                <hr>
                <dl class="row">
                  <dd class="col-sm-8">
                    Premium support - 2 years
                  </dd>
                  <dd class="col-sm-4">
                    $ 2000
                  </dd>
                </dl>
                <hr>
                <dl class="row">
                  <dd class="col-sm-8">
                    MDB Membership - 2 years
                  </dd>
                  <dd class="col-sm-4">
                    $ 2000
                  </dd>
                </dl>
                <hr>
                <dl class="row">
                  <dt class="col-sm-8">
                    Total del pedido
                  </dt>
                  <dt class="col-sm-4">
                    $ 2000
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
<script src="<?php echo base_url();?>./public/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>./public/js/asclepio.min.js"></script>
<script>
    $(document).ready(function() {
	$('.mdb-select').material_select();
});
</script>
</body>
</html>