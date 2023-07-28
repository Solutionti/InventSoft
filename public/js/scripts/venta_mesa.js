const Clickbutton = document.querySelectorAll('.btn_agregar_pedido');
const tbody = document.querySelector('.tbody');

let carrito = [];
let totalPedido = 0;


Clickbutton.forEach(btn => {
    btn.addEventListener('click', agregarCarritoItem)
});

function getDataModalProduct(codigo_producto) {
    var url = baseurl  + "ecommerce/getproductocodigo/" + codigo_producto;
    $.ajax({
      url: url,
      method: "GET",
      success: function(data){
        data = JSON.parse(data);
        document.getElementById("imagen_producto").innerHTML = '<img src="http://localhost/CODEIGNITER/ventas-buenviaje/public/productos/'+data.url_imagen+'" alt="First slide" class="img-fluid" width="300px;">';
        document.getElementById("text_nombre_producto").innerHTML = '<strong class="">' + data.nombre +'</strong>';
        document.getElementById("text_categoria_producto").innerHTML = data.categorias;
        document.getElementById("text_descripcion_producto").innerHTML = data.descripcion;
        document.getElementById("text_precio_producto").innerHTML = '<strong>$'+data.precio+'</strong>';
        // document.getElementById("boton_agregar_carrito").innerHTML = '<button class="btn btn-primary btn-rounded btn-sm" onClick="agregarCarritoCompras('+data.codigo_producto+')"><i class="fas fa-cart-plus mr-2 btn_agregar_carrito" aria-hidden="true"></i> Agregar al carrito</button>';
        
      }
    })
  }
  
  function agregarCarritoItem(e) {
    const button = e.target;
    const item = button.closest('.card');
    const itemTitle = item.querySelector('.text-body').textContent;
    const itemPrice = item.querySelector('.card-text').textContent;
    const itemImage = item.querySelector('.card-img-top').src;
    const itemCodigo = item.querySelector('.codigo_producto').textContent;
  
    const newItem = {
      codigo: itemCodigo,
      title:itemTitle,
      precio: itemPrice,
      img: itemImage,
      cantidad: 1
    }
    addItemCarrito(newItem)
    validarInfoCarrito()
    validarinfo()
  }
  
  function addItemCarrito(newItem){
    const inputelemento = tbody.getElementsByClassName('cantidad_products');
    for(let i= 0; i < carrito.length; i++ ){
        if(carrito[i].title === newItem.title.trim()){
          carrito[i].cantidad ++;
          const inputValue = inputelemento[i];
          inputValue.value ++;
          carritoTotal();
          $("body").overhang({
            type: "success",
            message: "Se ha agragado (1)  cantidad al producto " + newItem.title.trim()
          });
          return null;
        }
    }
    carrito.push(newItem);
    renderCarrito();
    validarInfoCarrito();
    validarinfo();
    $("body").overhang({
      type: "success",
      message: "Se ha agregado un producto a tu carrito"
    });
  }
  
  function renderCarrito(){
    tbody.innerHTML = '';
    // var carritos = JSON.parse(localStorage.getItem('carrito'));
    carrito.map(item => {
      const tr = document.createElement('tr');
      tr.classList.add('ItemCarrito');
      const Content = `<td scope="row"><img src=${item.img} width="100px;" class="img-fluid z-depth-0 rounded-circle"></td><td class="title">${item.title}</td><td></td><td>${item.precio}</td><td><input type="number" value=${item.cantidad}  class="form-control form-control-sm cantidad_products" style="width: 100px"></td><td><button type="button" class="btn btn-sm btn-danger delete" data-toggle="tooltip" data-placement="top" title="Quitar de la lista">X</button></td>`;
      tr.innerHTML = Content;
      tbody.append(tr);
  
      tr.querySelector(".delete").addEventListener('click', removeItemCarrito);
      tr.querySelector(".cantidad_products").addEventListener('keyup', sumaCantidad);
  
    })
    carritoTotal()
    validarInfoCarrito()
    validarinfo()
  }
  
  function carritoTotal(){
    let total = 0;
    const itemCartTotal  = document.querySelector('.itemCartTotal');
    const itemCartTotalDetalle  = document.querySelector('.itemCartTotalDetalle');
    carrito.forEach((item) => {
      const precio = Number(item.precio.replace("$", ''));
      total = total + precio*item.cantidad
    });
    itemCartTotal.innerHTML = '$' + total;
    itemCartTotalDetalle.innerHTML = '$' + total;
    totalPedido = total;
    addLocalStorage()
    validarInfoCarrito()
    validarinfo()
  }
  
  function removeItemCarrito(e){
    const buttonDelete = e.target;
    const tr = buttonDelete.closest(".ItemCarrito");
    const title = tr.querySelector('.title').textContent;
    for(let i = 0; i < carrito.length; i++){
      if(carrito[i].title.trim() === title.trim()){
        carrito.splice(i, 1);
        validarInfoCarrito()
      }
    }
    tr.remove();
    carritoTotal();
    validarInfoCarrito();
    validarinfo();
    $("body").overhang({
      type: "error",
      message: "Se ha quitado el producto de la lista de tu pedido",
    });
  }
  
  function sumaCantidad(e){
    const sumaInput = e.target;
    const tr = sumaInput.closest(".ItemCarrito");
    const title = tr.querySelector('.title').textContent;
    carrito.forEach(item => {
      if(item.title.trim() === title){
        sumaInput.value < 1 ? (sumaInput.value = ''): sumaInput.value;
        item.cantidad = sumaInput.value;
        carritoTotal()
        validarinfo()
      }
    })
  }
  
  function addLocalStorage(){
    localStorage.setItem('carrito', JSON.stringify(carrito));
  }
  
  window.onload = function(){
    const storage = JSON.parse(localStorage.getItem('carrito'));
    if(storage){
      carrito = storage;
      renderCarrito()
      validarinfo()
    }
  }
  
  // function validarInfoCarrito() {
  //     if(localStorage.getItem("carrito") === null ){
  //        document.getElementById("CarritoVacio").innerHTML = '<div class="mb-5"><img class="avatar avatar-xl avatar-4x3" src="https://htmlstream.com/preview/front-v4.2/html/assets/svg/illustrations/oc-empty-cart.svg" alt="SVG"></div><div class="mb-5"><h3>Su carrito está vacío</h3><p>Antes de proceder al pago debe agregar algunos productos a su carrito de compras. Encontrará muchos productos interesantes en nuestra página "Tienda".</p></div>';
  //        $("#sincarrito").attr("hidden", true);
  //     }
  //     else {
  //       document.getElementById("CarritoVacio").innerHTML = '';
  //       $("#sincarrito").attr("hidden", false);
  //     }
      
  // }
  // validarInfoCarrito();
  
  function validarinfo(){
    contenido.innerHTML = '';
    carrito.map(function(item) {
      var cortar = item.precio.slice(1,15);
      let total = parseInt(cortar) * parseInt(item.cantidad);
      const div = document.createElement('pre');
      const content = `<dd class="col-sm-8">${item.title + ' (' + item.cantidad + ')' } <span>${'$'+total}</span></dd>`;
      div.innerHTML = content;
      contenido.append(div);
    })
  }

  $("#nro_mesa").on("change", function(){
    var input = $("#nro_mesa").val();
    var url = baseurl + "ventas/getnumeromesa/"+ input;
    $.ajax({
      url: url,
      method: "GET",
      success: function(data){
        data = JSON.parse(data);
        $("#consecutivo").val("");
        $("#consecutivo").val(data.detalle_pedido);
      },
      error: function() {

      }
    })
  });

  $("#guardar_pedido").on("click", function(){
    var url = baseurl + "ventas/guardarpedidomesa",
        venta = $("#consecutivo").val(),
        nro_mesa = $("#nro_mesa").val();
        let pedidos = [];
        for (let i = 0; i < carrito.length; i++) {
          pedidos[i] = carrito[i];
        }
    $.ajax({
      url: url,
      method: "POST",
      data: {
        venta: venta,
        nro_mesa: nro_mesa,
        pedidos: pedidos
      },
      success: function(){
        $("body").overhang({
          type: "success",
          message: "Se ha realizado el pedido correctamente"
        });
      },
      error: function() {
        $("body").overhang({
          type: "error",
          message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
        });
      }
    });
  })

  
