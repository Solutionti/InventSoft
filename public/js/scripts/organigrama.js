

$("#crearorganigrama").on("click", function(){
    var url = baseurl + "ventas/insertarOrganigrama";
    var tipo_cancha = $("#tipo_cancha").val(),
    estado = $("#estado").val(),
    fecha = $("#fecha").val(),
    hora = $("#hora").val(),
    nombre = $("#nombre").val(),
    documento = $("#documento").val(),
    celular = $("#celular").val(),
    comentarios = $("#comentarios").val();
    if(tipo_cancha == ""){
      $("#tipo_cancha").addClass("is-invalid");
    }
    else if(fecha == "") {
      $("#fecha").addClass("is-invalid");
    }
    else if(hora == "") {
      $("#hora").addClass("is-invalid");
    }
    else if (nombre == "") {
      $("#nombre").addClass("is-invalid");
    }
    else if (documento == "") {
      $("#documento").addClass("is-invalid");
    }
    else if (celular == "") {
      $("#celular").addClass("is-invalid");
    }
    else {
      $.ajax({
          url: url,
          method: "POST",
          data: {
            tipo_cancha: tipo_cancha,
            estado: estado,
            fecha: fecha,
            hora: hora,
            nombre: nombre,
            documento: documento,
            celular: celular,
            comentarios: comentarios,
          },
          success: function() {
            $("body").overhang({
              type: "success",
              message: "el partido se ha apartado correctamente"
            });
            setTimeout(reloadPage, 3000);
          },
          error: function() {
            $("body").overhang({
              type: "error",
              message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
            });
          }
      });
    }
});


$("#actualizarorganigrama").on("click", function(){
  var url = baseurl + "ventas/actualizarOrganigrama";
  var tipo_cancha = $("#tipo_cancha_act").val(),
      estado = $("#estado_act").val(),
      nombre = $("#nombre_act").val(),
      comentarios = $("#comentarios_act").val();
  
    $.ajax({
        url: url,
        method: "POST",
        data: {
          tipo_cancha: tipo_cancha,
          estado: estado,
          nombre: nombre,
          comentarios: comentarios,
        },
        success: function() {
          $("body").overhang({
            type: "success",
            message: "el partido se ha cambiado de estado correctamente"
          });
          setTimeout(reloadPage, 3000);
        },
        error: function() {
          $("body").overhang({
            type: "error",
            message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
          });
        }
    });
});

$("#celular").on("blur", function() {
  var url = baseurl + "ventas/buscarcliente";
  var celular = $("#celular").val();

  $.ajax({
    url: url,
    method: "POST",
    data: {
      celular: celular
    },
    success: function(data) {
      data = JSON.parse(data);
      $("#documento").val(data.documento);
      $("#nombre").val(data.nombre);
      
      $("body").overhang({
        type: "success",
        message: "Se encontro un coincidencia con la busqueda"
      });
      
    },
    error: function() {
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