$("#crearMesas").on("click", function(){
  let url = baseurl  + "ventas/agregarmesa";
      nro_mesa = $("#nro_mesa").val(),
      puestos = $("#puestos").val(),
      estado = $("#estado").val();

  $.ajax({
    url: url,
    method: "POST",
    data: {
      nro_mesa: nro_mesa,
      puestos: puestos,
      estado: estado
    },
    success: function(){
      $("body").overhang({
        type: "success",
        message: "La Mesa se  ha creado correctamente"
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
})

function abrirModalMesasDatos(mesa) {
  $("#exampleModal").modal("show");
  $("#mesa_detalle").val("");
  $("#mesero_detalle").val("");
  $("#propina_detalle").val("");
  $("#descuento_detalle").val("");
  $("#estado_detalle").val("");
  $("#descripcion_detalle").val("");
  
  var url = baseurl + "ventas/germesasdetalle";
  $.ajax({
    url: url,
    method: "POST",
    data: {
      mesa: mesa,
    },
    success: function(data){
      data = JSON.parse(data);
      // console.log(data);
      $("#mesa_detalle").val(data.mesa);
      $("#mesero_detalle").val(data.mesero);
      $("#propina_detalle").val(data.propina);
      $("#descuento_detalle").val(data.descuento);
      $("#estado_detalle").val(data.estado);
      $("#descripcion_detalle").val(data.descripcion);
    },
    error: function(){

    } 
  });
}

function cerrarMesas(){
  var url = baseurl  + "",
      nro_mesa = $("#mesa_detalle").val(),
      mesero = $("#mesero_detalle").val(),
      propina = $("#propina_detalle").val(),
      descuento = $("#descuento_detalle").val(),
      estado = $("#estado_detalle").val(),
      descripcion = $("#descripcion_detalle").val(),
      total = $("#total").val();
      
  $.ajax({
    url: url,
    method: "POST",
    data: {
      nro_mesa: nro_mesa,
      mesero: mesero,
      propina: propina,
      descuento: descuento,
      estado: estado,
      descripcion: descripcion,
      total: total
    },
    success: function(){
      $("body").overhang({
        type: "success",
        message: "La mesa se  ha cerrado con exito"
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
}

function reloadPage() {
  location.reload();
}

function refreshMesas() {
  location.reload();
}
