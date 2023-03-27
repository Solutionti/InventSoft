$("#guardarnota").on("click", function(){
    var url = baseurl + "ventas/registrarnota";

    var titulo = $("#titulo").val(),
        asunto = $("#asunto").val(),
        fecha = $("#fecha").val(),
        hora = $("#hora").val();
    $.ajax({
      url: url,
      method: "POST",
      data: {
        titulo: titulo,
        asunto: asunto,
        fecha: fecha,
        hora: hora
      },
      success: function(){
        $("body").overhang({
            type: "success",
            message: "La nota se  ha creado correctamente"
          });
          setTimeout(reloadPage, 2000);
      },
      error: function(){
        $("body").overhang({
          type: "error",
          message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
        });
      }
    });
});

function reloadPage() {
  location.reload();
}