$("#select-inputs").on("change", function() {
  var selected = $("#select-inputs").val();
  if(selected == 1) {
    $("#ventas-categoria").attr("hidden", true);
    $("#transaccion-producto").attr("hidden", true);
    $("#ganancia-general").attr("hidden", true);
    $("#kardex-general").attr("hidden", true);

    $("#reporte-dia").attr("hidden", false);
  }
  else if (selected == 2) {
    $("#reporte-dia").attr("hidden", true);
    $("#transaccion-producto").attr("hidden", true);
    $("#ganancia-general").attr("hidden", true);
    $("#kardex-general").attr("hidden", true);

    $("#ventas-categoria").attr("hidden", false);
  }
  else if (selected == 3) {
    $("#reporte-dia").attr("hidden", true);
    $("#ventas-categoria").attr("hidden", true);
    $("#ganancia-general").attr("hidden", true);
    $("#kardex-general").attr("hidden", true);
    
    $("#transaccion-producto").attr("hidden", false);
  }
  else if (selected == 4) {
    $("#reporte-dia").attr("hidden", true);
    $("#ventas-categoria").attr("hidden", true);
    $("#transaccion-producto").attr("hidden", true);
    $("#kardex-general").attr("hidden", true);

    $("#ganancia-general").attr("hidden", false);
    
  }
  else if (selected == 5) {
    $("#reporte-dia").attr("hidden", true);
    $("#ventas-categoria").attr("hidden", true);
    $("#transaccion-producto").attr("hidden", true);
    $("#ganancia-general").attr("hidden", true);
    $("#kardex-general").attr("hidden", false);
    
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

function kardexPdf(){
  var fecha_inicial = $("#fecha_inicial_kardex").val(),
      fecha_final = $("#fecha_final_kardex").val();

  url = baseurl  + "clientes/reportekardex/" + fecha_inicial + "/" + fecha_final;
  window.open(url, "_blank", " width=500, height=400");
     
}

$("#generalcategoria").on("change", function () {
  var url = baseurl + "clientes/gananciageneral", 
  categoria = $("#generalcategoria").val();

  $.ajax({
    url: url,
    method: "POST",
    data: {
      categoria: categoria,
    },
    success: function (data) {
      data = JSON.parse(data);
      document.getElementById("table-ganancia-general").innerHTML = '<tr><td class="text-xs text-dark mb-0"> ' +'$'+ data.ganancia + ' </td><td class="text-xs text-dark mb-0"> ' +'$'+ data.proveedor + ' </td><td class="text-xs text-dark mb-0"> ' + data.nombre + '</td></tr>';
    }
  });

})
