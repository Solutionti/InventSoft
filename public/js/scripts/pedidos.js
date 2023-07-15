$(document).ready( function () {
  $('#table-pedidos').DataTable({
    "lengthMenu": [10, 50, 100, 200],
    "language":{
    "processing": "Procesando",
    "search": "Buscar:",
    "lengthMenu": "Ver _MENU_ Pedidos",
    "info": "Mirando _START_ a _END_ de _TOTAL_ Pedidos",
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

function verPedido(codigo){
  $("#verpedido").modal("show");
  var url = baseurl + "ventas/getpedidos/" + codigo ;

  $.ajax({
    url: url,
    method: "GET",
    success: function(data){
      data = JSON.parse(data);
       $("#codigo_pedido").val(data.consecutivo),
       $("#sede_pedido").val(data.sede),
       $("#fecha_pedido").val(data.fecha),
       $("#hora_pedido").val(data.hora),
       $("#tppago_pedido").val(data.tppago),
       $("#celular_pedido").val(data.codigo_cliente),
       $("#total_pedido").val(data.total),
       $("#nombre_pedido").val(data.nombre + ' ' + data.apellido),
       $("#direccion_pedido").val(data.direccion),
       $("#estado_pedido").val(data.estado),
       $("#domicilio_pedido").val(data.domicilio),
       $("#comentarios_pedido").val(data.comentario);
        tableDetallePedido(data.consecutivo);
      }
  })
}

function tableDetallePedido(codigo) {
  var url = baseurl + "ventas/getpeditosdetalle/" + codigo;
  const tbody = document.querySelector('.detalle_productos_pedido');
  $.ajax({
    url: url,
    method: "GET",
    success: function(data) {
      data = JSON.parse(data);
      data.map((item, index) => {
        const tr = document.createElement('tr');
        const Content = `<td>${index + 1}</td><td>${item.codigo_pedido}</td><td>${item.productonom}</td><td class="text-center">${item.cantidad}</td>`;
        tr.innerHTML = Content;
        tbody.append(tr);
      });
    }
  })
}

$("#Actualizarpedido").on("click", function(){
  var url = baseurl + "ventas/actualizarpedido";
  var domicilio = $("#domicilio_pedido").val(),
      estado = $("#estado_pedido").val();
  
  $.ajax({
    url: url,
    method: "POST",
    data: {
      domicilio:domicilio,
      estado: estado
    },
    success: function(){
      $("body").overhang({
        type: "success",
        message: "El pedido se  ha actualizado correctamente"
      });
      setTimeout(reloadPage, 2000);
    },
    error: function (){
      $("body").overhang({
        type: "error",
        message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
      });
    }
  })
});

function reloadPage() {
  location.reload();
}