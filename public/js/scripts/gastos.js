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