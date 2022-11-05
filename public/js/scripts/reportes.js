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