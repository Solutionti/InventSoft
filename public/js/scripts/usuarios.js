$("#crearusuario").on("click", function () {
    var url1 = baseurl + "ventas/crearusuario", 
    apellido = $("#apellido").val(),
    nombre = $("#nombre").val(),
    tp_usuario = $("#tp_usuario").val(),
    telefono = $("#telefono").val(),
    correo = $("#correo").val(),
    usuario = $("#usuario").val(),
    password = $("#password").val();

    $.ajax({
        url: url1,
        method: "POST",
        data: {
            apellido: apellido,
            nombre: nombre,
            tp_usuario: tp_usuario,
            telefono: telefono,
            correo: correo,
            usuario: usuario,
            password: password
        },
        success: function () {
          $("body").overhang({
            type: "success",
            message: "El usuario se  ha creado correctamente"
          });
          setTimeout(reloadPage, 2000);
        }
    });
});
function verUsuarios (codigo) {
  var url = baseurl + "ventas/getusuario/" + codigo;
  $("#actualizarUsuario").modal("show");

  $.ajax({
    url: url,
    method: "GET",
    success: function (data) {
      data = JSON.parse(data);
      console.log(data);
      $("#apellido-act").val(data.apellido);
      $("#nombre-act").val(data.nombre);
      $("#tp_usuario-act").val(data.rol_usuario).attr("selected", true);
      $("#telefono-act").val(data.telefono);
      $("#correo-act").val(data.email);
      $("#usuario-act").val(data.usuario);
    }
  });
}

$("#actualizar-usuario").on("click", function () {
  var url2 = baseurl + "ventas/actualizarusuario",
  telefono = $("#telefono").val(),
  direccion = $("#direccion").val();
  if(telefono === "") {
    $("#telefono").addClass("is-invalid");
    $("#direccion").removeClass("is-invalid");
  }
  else if (direccion == "") {
    $("#direccion").addClass("is-invalid");
    $("#telefono").removeClass("is-invalid");
  }
  else {
    $.ajax({
      url: url2,
      method: "POST",
      data: {
        telefono: telefono,
        direccion: direccion
      },
      success: function () {
        $("body").overhang({
          type: "success",
          message: "El usuario se ha actualizado correctamente"
        });
        setTimeout(reloadPage, 2000);
      }
    })
  }
});

function reloadPage() {
    location.reload();
}