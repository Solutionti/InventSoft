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

function limpiarCache(){
  if ('caches' in window) {
    caches.keys().then(cacheNames => {
      cacheNames.forEach(cacheName => {
        caches.delete(cacheName);
      });
    });
    setTimeout(() => { // Reload the page to ensure that all resources have been downloaded.
      window.location.reload();
    }, 800);
  } else {
    $("body").overhang({
      type: "error",
      message: "Por el momento tu navegador no cuenta con cache para realizar la limpieza.",
    });
  }
}

function reloadPage() {
  location.reload();
}