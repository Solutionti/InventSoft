//DATA TABLE DE GASTOS
$(document).ready( function () {
  $('#table-gastos').DataTable({
    "lengthMenu": [5,10, 50, 100, 200],
    "language":{
    "processing": "Procesando",
    "search": "Buscar:",
    "lengthMenu": "Ver _MENU_ Gastos",
    "info": "Mirando _START_ a _END_ de _TOTAL_ Gastos",
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

$("#creargasto").on("click", function() {
  var url1 = baseurl + "ventas/creargasto",
      categoria = $("#categoria_gasto").val(),
      proveedor_gasto = $("#proveedor_gasto").val(),
      fecha_limite = $("#fecha_limite").val(),
      fecha = $("#fecha_gasto").val(),
      precio = $("#precio_factura").val(),
      descripcion = $("#descripcion_gasto").val();
      porpagar = $("#porpagar:checked").val();
      
      if(porpagar == "on") {
        porpagaract = "SI";
      }
      else {
        porpagaract = "NO";
      }
      $.ajax({
        url: url1,
        method: "POST",
        data: {
            categoria: categoria,
            proveedor_gasto, proveedor_gasto,
            fecha_limite: fecha_limite,
            fecha: fecha,
            precio: precio,
            descripcion: descripcion,
            porpagaract:porpagaract
        },
        success: function () {
            $("body").overhang({
                type: "success",
                message: "El gasto se  ha creado correctamente"
          });
          setTimeout(reloadPage, 2000);  
        }
      });
});

function reloadPage() {
    location.reload();
}
100100105