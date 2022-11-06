$("#creargasto").on("click", function() {
  var url1 = baseurl + "clientes/creargasto",
      categoria = $("#categoria").val(),
      fecha = $("#fecha").val(),
      precio = $("#precio").val(),
      descripcion = $("#descripcion").val();

      $.ajax({
        url: url1,
        method: "POST",
        data: {
            categoria: categoria,
            fecha: fecha,
            precio: precio,
            descripcion: descripcion
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