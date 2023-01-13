

function getDataModalProduct(codigo_producto) {
  var url = baseurl  + "ecommerce/getproductocodigo/" + codigo_producto;
  $.ajax({
    url: url,
    method: "GET",
    success: function(data){
      data = JSON.parse(data);
      document.getElementById("imagen_producto").innerHTML = '<img src="'+ data.url_imagen +'" alt="First slide" class="img-fluid" width="300px;">';
      document.getElementById("text_nombre_producto").innerHTML = '<strong class="">' + data.nombre +'</strong>';
      document.getElementById("text_categoria_producto").innerHTML = data.categorias;
      document.getElementById("text_descripcion_producto").innerHTML = data.descripcion;
      document.getElementById("text_precio_producto").innerHTML = '<strong>$'+data.precio+'</strong>';
      document.getElementById("boton_agregar_carrito").innerHTML = '<button class="btn btn-primary btn-rounded btn-sm" onClick="agregarCarritoCompras('+data.codigo_producto+')"><i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Agregar al carrito</button>';
      if(sessionStorage.getItem('key') == 0){
        sessionStorage.setItem('key', '0');
      }
      else{
        var pedidos = [];
        localStorage.setItem('pedido', JSON.stringify(pedidos));
        sessionStorage.setItem('key', '0');
      }
    }
  })
}

function agregarCarritoCompras(codigo){
    var url = baseurl + "ecommerce/getproductocodigo/" + codigo;
    $.ajax({
      url: url,
      method: "GET",
      success: function(data){
        data = JSON.parse(data);
          var pedidos = [
            {
              "codigo_producto": data.codigo_producto,
              "producto": data.nombre,
              "categoria": data.categorias,
              "precio": data.precio
            }
          ];
          var existente = JSON.parse(localStorage.getItem("pedido"));
          existente.push(pedidos);
          localStorage.setItem("pedido", JSON.stringify(existente));
      }
    })
}

function validarInfoCarrito() {
    if(localStorage.getItem("pedido") == null){
       document.getElementById("CarritoVacio").innerHTML = '<div class="mb-5"><img class="avatar avatar-xl avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/illustrations/oc-empty-cart.svg" alt="SVG"></div><div class="mb-5"><h3>Su carrito está vacío</h3><p>Antes de proceder al pago debe agregar algunos productos a su carrito de compras. Encontrará muchos productos interesantes en nuestra página "Tienda".</p></div><a class="btn btn-primary btn-transition rounded-pill px-6" href="#">Empieza a comprar</a>';
    }
    else {

    }
}

validarInfoCarrito();


