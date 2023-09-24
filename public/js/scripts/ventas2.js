const tbody = document.querySelector('.tbody');
let carrito = [];
let totalPedido = 0;

$("#codigo_barras").focus();
//CARGUE DE DATATABLES
$(document).ready( function () {
  $('#table-productos-todos').DataTable({
    "lengthMenu": [5,10, 50, 100, 200],
    "language":{
    "processing": "Procesando",
    "search": "Buscar:",
    "lengthMenu": "Ver _MENU_ Productos",
    "info": "Mirando _START_ a _END_ de _TOTAL_ Productos",
    "zeroRecords": "No encontraron resultados",
    "paginate": {
      "first":      "Primera",
      "last":       "Ultima",
      "next":       "Siguiente",
      "previous":   "Anterior"
    }
  }
  });
});

$("#abrir-caja").on("click", function() {
    $("#modal-abrircaja").modal("show");
  });
  $("#cerrar-caja").on("click", function() {
    $("#modal-cerrarcaja").modal("show");
  });

$("#codigo_barras").on("change", function(){
    var url1 = baseurl + "ventas/getproductoventa",
        codigo_barras = $("#codigo_barras").val();
    
    $.ajax({
      url: url1,
      method: "POST",
      data: {
        codigo_barras: codigo_barras
      },
      success: function(data) {
        data = JSON.parse(data);
        var imagen = "<img src='https://futbol9.solutiont1.com/public/public/productos/"+ data.url_imagen +"' class='w-100 border-radius-lg shadow-sm'> ";
        document.getElementById("imagen").innerHTML = imagen;
        $("#codigo").val(data.codigo);
        $("#codigo_barras2").val(data.codigo_barras);
        $("#producto").val(data.nombre);
        $("#precio").val(data.precio);
        $("#cantidad").val(data.stock);
        porcentaje = (data.precio - data.costo_proveedor)/data.costo_proveedor * 100;
        $("#porcentaje").val(porcentaje + '%');
        const nombre = data.nombre;
        const codigo = data.codigo_barras;
        const precio = data.precio;
        if(data.stock <= 0){
          $("body").overhang({
            type: "error",
            message: "Alerta! esta apunto de vender un producto sin stock en inventario. ",
          });
        }
        const newItem = {
            nombre: nombre,
            codigo: codigo,
            precio: precio,
            cantidad: 1
        }
        addItemCarrito(newItem);
        $("#codigo_barras").val("");
        $("#codigo_barras").focus();
      }
    });  
});

$("#recibio").on("keyup", function () {
    var recibio = $("#recibio").val(),
    total = $("#total").val();
    $("#devolver").attr("hidden", true);
    
    document.getElementById("volver").innerHTML = '<h2 class="text-dark text-uppercase">'+ (recibio - totalPedido).toLocaleString(undefined, {minimumFractionDigits: 0, maximumFractionDigits: 0})+'</h2>';
 });

function addItemCarrito(newItem){
    var  inputelemento = tbody.getElementsByClassName('cantidad_products');
    for(let i= 0; i < carrito.length; i++ ){
        if(carrito[i].nombre.trim() === newItem.nombre.trim()){
          carrito[i].cantidad ++;
          const inputValue = inputelemento[i];
          inputValue.value ++;
          carritoTotal();
          return null;
        }
    }
    carrito.push(newItem);
    renderCarrito();
    $("body").overhang({
      type: "success",
      message: "Se ha agregado un producto a la venta"
    });
    
}

function renderCarrito(){
    tbody.innerHTML = '';
    carrito.map(item => {
      const tr = document.createElement('tr');
      tr.classList.add('ItemCarrito');
      const Content = `<td><button type="button" class="btn btn-sm btn-danger delete" data-toggle="tooltip" data-placement="top" title="Quitar de la lista">X</button></td></td><td class="title">${item.nombre}</td><td>${item.codigo}</td><td><input type="text" value=${item.cantidad}  class="form-control form-control-sm cantidad_products" style="width: 100px"></td><td>$${item.precio.toLocaleString(undefined, {minimumFractionDigits: 0, maximumFractionDigits: 0})}</td><td></td>`;
      tr.innerHTML = Content;
      tbody.append(tr);

      tr.querySelector(".delete").addEventListener('click', removeItemCarrito);
      tr.querySelector(".cantidad_products").addEventListener('keyup', sumaCantidad);
  
    })
    carritoTotal()
  }

  function sumaCantidad(e){
    const sumaInput = e.target;
    const tr = sumaInput.closest(".ItemCarrito");
    const title = tr.querySelector('.title').textContent;
    carrito.forEach(item => {
      if(item.nombre.trim() === title.trim()){
        sumaInput.value < 1 ? (sumaInput.value = ''): sumaInput.value;
        item.cantidad = sumaInput.value;
        carritoTotal();
      }
    });
  }

  function carritoTotal(){
    let total = 0;
    const itemCartTotal  = document.querySelector('.total-compra');
    carrito.forEach((item) => {
      const precio = Number(item.precio.replace("$", ''));
      total = total + precio*item.cantidad
    });
    $("#compracero").attr("hidden", true);
    $("#total-compra").attr("hidden", false);
    itemCartTotal.innerHTML = '$' + total.toLocaleString(undefined, {minimumFractionDigits: 0, maximumFractionDigits: 0});
    totalPedido = total;
    $("#total").val(totalPedido);
  }

  function removeItemCarrito(e){
    const buttonDelete = e.target;
    const tr = buttonDelete.closest(".ItemCarrito");
    const title = tr.querySelector('.title').textContent;
    
    for(let i = 0; i < carrito.length; i++){
      if(carrito[i].nombre.trim() === title.trim()){
        carrito.splice(i, 1);
      }
    }
    tr.remove();
    carritoTotal();
    
    $("body").overhang({
      type: "error",
      message: "Se ha quitado el producto de la lista de tu pedido",
    });
  }

  $("#buscar-producto").on("click", function () {
    $("#modal-productos").modal("show");
  });

  //DARLE ACCION A EL BOTON CONTROL + F1
document.addEventListener("keydown", function(event) {
    if (event.ctrlKey && event.keyCode === 65)
    {
      var url = baseurl + "ventas/crearventa",
      consecutivo = $("#consecutivo").val(),
      documento = $("#documento").val(),
      codigo = $("#codigo").val(),
      ean = $("#codigo_barras2").val(),
      recibio = $("#recibio").val(),
      total = $("#total").val(),
      tp_pago = $("#tp_pago").val(),
      referencia = $("#referencia").val(),
      sede = $("#sede").val(),
      id_caja = $("#id_caja").val();
      let ventas = [];
  
      for (let i = 0; i < carrito.length; i++) {
        ventas [i] = carrito[i];
      }
  
      if(recibio == "") {
        $("#recibio").addClass("is-invalid");
        $("#recibio").focus();
      }
      else if (ventas.length === 0){
        $("body").overhang({
          type: "error",
          message: "Alerta ! Debe ingresar al menos 1 producto a la venta",
        });
      }
      else {
        $.ajax({
          url: url,
          method: "POST",
          data: {
            consecutivo: consecutivo,
            documento: documento,
            recibio: recibio,
            ventas: ventas,
            total: total,
            tp_pago: tp_pago,
            referencia: referencia,
            sede: sede,
            id_caja: id_caja
          },
          success: function(data) {
            if (data === "error") {
              $("body").overhang({
                type: "error",
                message: "Usted ya registro una venta con el codigo consecutivo. " + consecutivo ,
              });
            }
            else {
              $("body").overhang({
                type: "success",
                message: "La venta se ha creado correctamente"
              });
              if( $('#checkrecibocaja').is(':checked') ) {
                facturaVenta(consecutivo);
              }
              setTimeout(reloadPage, 3000);
            }
          },
          error: function () {
            $("body").overhang({
              type: "error",
              message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
            });
          }
        });
      }
    }
  });

  //DARLE ACCION A EL BOTON CONTROL + F2
  document.addEventListener("keydown", function(event) {
    if (event.ctrlKey && event.keyCode === 68)
    {
      location.reload();
    }
  });

  //DARLE ACCION A EL BOTON CONTROL + F3
  document.addEventListener("keydown", function(event) {
    if (event.keyCode === 112)
    {
      $("#modal-productos").modal("show");
    }
  });

  $("#asociar-producto").on("click", function () {
    var codigo = $("#codigoproduct:checked").val(),
        url3 = baseurl + "ventas/verproducto/" + codigo;

        $.ajax({
            url: url3,
            method: "GET",
            success: function(data) {
              data = JSON.parse(data);
              var imagen = "<img src='https://futbol9.solutiont1.com/public/productos/"+ data.url_imagen +"' class='w-100 border-radius-lg shadow-sm'> ";
              document.getElementById("imagen").innerHTML = imagen;
              $("#modal-productos").modal("hide");
              $("#codigo").val(data.codigo);
              $("#codigo_barras2").val(data.codigo_barras);
              $("#producto").val(data.nombre);
              $("#precio").val(data.precio);
              $("#cantidad").val(data.stock);
              porcentaje = (data.precio - data.costo_proveedor)/data.costo_proveedor * 100;
              $("#porcentaje").val(porcentaje);
              const nombre = data.nombre;
              const codigo = data.codigo_barras;
              const precio = data.precio;
              
              const newItem = {
                  nombre: nombre,
                  codigo: codigo,
                  precio: precio,
                  cantidad: 1
                }
              addItemCarrito(newItem);
              $("#codigo_barras").val("");
              $("#codigo_barras").focus();
            }
          }); 
  });

  $("#tp_pago").on("change", function () {
    var tp_pago = $("#tp_pago").val();
    if(tp_pago == "NEQUI"){
      $("#referencia-hid").attr("hidden", false);
    }
    else if(tp_pago == "BANCOLOMB") {
      $("#referencia-hid").attr("hidden", false);
    }
    else if(tp_pago == "EFECTIVO") {
      $("#referencia-hid").attr("hidden", true);
      $("#referencia").val("");
    }
  });

  function facturaVenta(consecutivo) {
    url = baseurl  + "ventas/generarpdfventas/" + consecutivo;
    window.open(url, "_blank", " width=500, height=400");
  }

  $("#guardar-caja").on("click", function() {
    var url = baseurl + "ventas/abrircaja";
    var fecha_apertura = $("#fecha-apertura").val(),
        movimiento_apertura = $("#movimiento_apertura").val(),
        monto_apertura = $("#monto_apertura").val(),
        comentarios_apertura = $("#comentarios_apertura").val();
  
    $.ajax({
      url: url,
      method: "POST",
      data: {
        fecha_apertura: fecha_apertura,
        movimiento_apertura: movimiento_apertura,
        monto_apertura: monto_apertura,
        comentarios_apertura: comentarios_apertura
      },
      success: function () {
        $("body").overhang({
          type: "success",
          message: "Se ha abierto la caja"
        });
        setTimeout(reloadPage, 2000);
      }, 
      error: function () {
        $("body").overhang({
          type: "error",
          message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
        });
      }
    })
  })

  let efectivoreal = 0;
let balance = 0;
let diferencia  = 0;

$("#real_efectivo").on("keyup", function() {
  //efectivo real
  efectivoreal = parseInt($("#real_efectivo").val());
  //balance
  balance = parseInt(document.getElementById("balance").innerHTML);
  //diferencia
  diferencia = efectivoreal - balance  ; 
  document.getElementById("efectivo").innerHTML = (efectivoreal).toLocaleString(undefined, {minimumFractionDigits: 0, maximumFractionDigits: 0});
  document.getElementById("diferencia").innerHTML = (diferencia).toLocaleString(undefined, {minimumFractionDigits: 0, maximumFractionDigits: 0});

})

$("#cierre-caja").on("click", function () {
  var url = baseurl + "ventas/cerrarcaja";
  var id_caja = $("#id_caja").val();
  $.ajax({
    url: url,
    method: "POST",
    data: {
      efectivoreal: efectivoreal,
      balance: balance,
      diferencia: diferencia,
      id_caja: id_caja
    },
    success: function () {
      $("body").overhang({
        type: "success",
        message: "Se ha cerrado la caja"
      });
      // setTimeout(reloadPage, 2000);
      location.href = baseurl + "iniciar";
    },
    error: function () {
      $("body").overhang({
        type: "error",
        message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
      });
    }
  });

})

$("#checkrecibocaja").on("click", function(){
    if( $(this).is(':checked') ){
      $("body").overhang({
        type: "success",
        message: "Se ha activado la impresion de recibo de caja."
      });
      
  } else {
    $("body").overhang({
      type: "error",
      message: "Se ha desactivado la impresion de recibo de caja.",
    });
  }
  });
  
  $("#checkdevolucion").on("click", function(){
    if( $(this).is(':checked') ){
      $("body").overhang({
        type: "error",
        message: "Alerta se activo devolucion de producto al inventario."
      });
      $("#ocultobtndevolucion").attr("hidden", false);
      $("#modaltabledevolcion").modal("show");
      var codigo = $("#codigo").val();
      var url = baseurl + "ventas/getventadetalle/" + codigo;
      $.ajax({
        url: url,
        method: "GET",
        success: function(data){
          data = JSON.parse(data);
          console.log(data);
          detalleventa = data.map(function(detalle){
            return '<tr><td><div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="codigoventa" id="codigoventa" value="'+detalle.codigo_venta+'"><label class="form-check-label" for="codigoproduct"></label></div></td><td class="text-xs text-dark mb-0">'+detalle.codigo_producto+'</td><td class="text-xs text-dark mb-0">'+'VNT00'+detalle.codigo_venta+'</td><td class="text-xs text-dark mb-0">'+detalle.fecha+'</td><td class="text-xs text-dark mb-0">'+detalle.hora+'</td><td class="text-xs text-dark mb-0">'+'$'+detalle.total_venta+'</td><td class="text-xs text-dark mb-0">'+detalle.usuario+'</td></tr>';
          });
          document.getElementById("detalleventas").innerHTML = detalleventa;
        }
      });
      
    } else {
      $("body").overhang({
        type: "success",
        message: "Alerta se desactivo devolucion de producto al inventario.",
      });
        $("#ocultobtndevolucion").attr("hidden", true);
    }
  });
  
  $("#aceptardevoluciontabla").on("click", function(){
    $("#modaltabledevolcion").modal("hide");
  });
  
  
  $("#btn_devolucion").on("click", function(){
    var url = baseurl + "ventas/devolucionventa";
     var codigo = $("#codigo").val(),
         total =  totalPedido,
         venta = $("#codigoventa:checked").val(),
         cantidad = $(".cantidad_products").val();
    if(cantidad >= 2){
      $("body").overhang({
        type: "error",
        message: "Alerta ! solo puede hacer devolucion de 1 cantidad de producto.",
      });
    }
    else {
      $.ajax({
       url: url,
       method: "POST",
       data: {
         codigo: codigo,
         total: total,
         venta: venta
       },
       success: function(){
         $("body").overhang({
           type: "success",
           message: "Se ha realizado la devolucion correctamente"
         });
         setTimeout(reloadPage, 3000);
       },
       error: function(){
         $("body").overhang({
           type: "error",
           message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
         });
       }
      });
    }
  });

function reloadPage() {
  location.reload();
}
  

 
