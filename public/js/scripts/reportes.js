$("#select-inputs").on("change", function() {
  var selected = $("#select-inputs").val();
  if(selected == 1) {
    $("#ventas-categoria").attr("hidden", true);
    $("#transaccion-producto").attr("hidden", true);
    $("#reporte-dia").attr("hidden", false);
  }
  else if (selected == 2) {
    $("#reporte-dia").attr("hidden", true);
    $("#transaccion-producto").attr("hidden", true);
    $("#ventas-categoria").attr("hidden", false);
  }
  else if (selected == 3) {
    $("#reporte-dia").attr("hidden", true);
    $("#ventas-categoria").attr("hidden", true);
    $("#transaccion-producto").attr("hidden", false);
  }
});

function reporteDia() {
  var fecha_inicial = $("#fecha_inicial").val(),
      fecha_final = $("#fecha_final").val(),
      usuario = $("#usuario").val();

  url = baseurl  + "clientes/reportedia/" + fecha_inicial + "/" + fecha_final + "/" + usuario;
  window.open(url, "_blank", " width=500, height=400");
}

function reporteCategoriaVenta() {
  var fecha_inicial = $("#fecha_inicial_categoria").val(),
      fecha_final = $("#fecha_final_categoria").val(),
      categoria = $("#tp_categoria").val();

  url = baseurl  + "clientes/reportecategoriaventa/" + fecha_inicial + "/" + fecha_final + "/" + categoria;
  window.open(url, "_blank", " width=500, height=400");
}
