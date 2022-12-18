var venta = new Array();
var totalact = new Array();

$("#codigo_barras").focus();
//CARGUE DE DATATABLES
$(document).ready( function () {
  $('#table-productos-todos').DataTable({
    "lengthMenu": [10, 50, 100, 200],
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


$("#codigo_barras").on("change", function() {
  var url1 = baseurl + "ventas/getproductoventa",
  codigo_barras = $("#codigo_barras").val();
  $.ajax({
    url: url1,
    method: "POST",
    data: {
      codigo_barras: codigo_barras
    },
    success: function(data) {
      if(data === "error"){
       
      }
      else {
        data = JSON.parse(data);
        // var imagen = "<img src='https://ventas-buen-viaje.saludmadreymujer.com/public/productos/"+ data.url_imagen +"' class='w-100 border-radius-lg shadow-sm'>";
        var imagen = "<img src='http://localhost/CODEIGNITER/ventas-buenviaje/public/productos/"+ data.url_imagen +"' class='w-100 border-radius-lg shadow-sm'> ";
        document.getElementById("imagen").innerHTML = imagen;
        $("#codigo").val(data.codigo);
        $("#codigo_barras2").val(data.codigo_barras);
        $("#producto").val(data.nombre);
        $("#precio").val(data.precio);
        $("#cantidad").val(data.stock);
        document.getElementById("tabla-ventas").insertRow(-1).innerHTML = '<tr><td><button class="btn btn-xs btn-danger">X</button></td><td>'+data.nombre+'</td><td>'+data.codigo_barras+'</td><td>1</td><td>$'+parseInt(data.precio).toLocaleString(undefined, {minimumFractionDigits: 0, maximumFractionDigits: 1})+'</td></tr>';
        elementos = new Array();
        elementos = data.codigo_barras;
        venta.push(elementos);
        $("#codigo_barras").val("");
        $("#codigo_barras").focus();
        //FUNCIONALIDAD DEL TOTAL AGREGAR EL TOTAL
        totalact.push(data.precio);
        totalact = totalact.map(Number);
        const reducer = (accumulator, curr) => accumulator + curr;
        total = totalact.reduce(reducer);
        $("#total").val(total);
        $("#total-compra").attr("hidden",true);
        document.getElementById("ventaa").innerHTML = '<small>$ </small> '+ total.toLocaleString(undefined, {minimumFractionDigits: 0, maximumFractionDigits: 0}) +'';
        document.getElementById("total_productos").innerHTML = "<p class='h2 text-right mt-4'>"+ venta.length +"</p>";
      }
    }
  });
})
 $("#recibio").on("keyup", function () {
    var recibio = parseInt($("#recibio").val()),
        total = parseInt($("#total").val());
        $("#devolver").attr("hidden", true);
        document.getElementById("volver").innerHTML = '<h2 class="text-black text-uppercase">'+ (recibio - total).toLocaleString(undefined, {minimumFractionDigits: 0, maximumFractionDigits: 0})+'</h2>';
 });

$("#buscar-producto").on("click", function () {
  $("#modal-productos").modal("show");
});

$("#otra-venta").on("click", function () {
  
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

    for (let i = 0; i < venta.length; i++) {
      ventas [i] = venta[i];
    }

    if(recibio == "") {
      $("#recibio").addClass("is-invalid");
      $("#recibio").focus();
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
            facturaVenta(consecutivo);
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
  if (event.ctrlKey && event.keyCode === 113)
  {
    location.reload();
  }
});

//DARLE ACCION A EL BOTON CONTROL + F3
document.addEventListener("keydown", function(event) {
  if (event.ctrlKey && event.keyCode === 114)
  {
    $("#modal-productos").modal("show");
    // $("input[type='search']").focus();
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
          var imagen = "<img src='http://localhost/CODEIGNITER/ventas-buenviaje/public/productos/"+ data.url_imagen +"' class='w-100 border-radius-lg shadow-sm'>";
          document.getElementById("imagen").innerHTML = imagen;
          $("#modal-productos").modal("hide");
          $("#codigo").val(data.codigo);
          $("#codigo_barras2").val(data.codigo_barras);
          $("#producto").val(data.nombre);
          $("#precio").val(data.precio);
          $("#cantidad").val(data.stock);
        document.getElementById("tabla-ventas").insertRow(-1).innerHTML = '<tr><td><button class="btn btn-xs btn-danger">X</button></td><td>'+data.nombre+'</td><td>'+data.codigo_barras+'</td><td>1</td><td>$'+parseInt(data.precio).toLocaleString(undefined, {minimumFractionDigits: 0, maximumFractionDigits: 1})+'</td></tr>';
        venta.push(data.codigo);
        $("#codigo_barras").val("");
        $("#codigo_barras").focus();
        //FUNCIONALIDAD DEL TOTAL AGREGAR EL TOTAL
        totalact.push(data.precio);
        totalact = totalact.map(Number);
        const reducer = (accumulator, curr) => accumulator + curr;
        total = totalact.reduce(reducer);
        $("#total").val(total);
        $("#total-compra").attr("hidden",true);
        document.getElementById("ventaa").innerHTML = '<small>$ </small> '+ total.toLocaleString(undefined, {minimumFractionDigits: 0, maximumFractionDigits: 0}) +'';
        document.getElementById("total_productos").innerHTML = "<p class='h2 text-right mt-4'>"+ venta.length +"</p>";

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

function reloadPage() {
  location.reload();
}




