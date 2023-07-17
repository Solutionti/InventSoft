// $(document).ready(function () {
//     $("#login").on("click", function () {
//       var correo = $("#correo").val(),
//           password = $("#password").val();

//       if(correo == "") {
//         $(".correo").addClass("is-invalid");
//       }
//       else if (password == "") {
//         $(".password").addClass("is-invalid");
//       }
//       else {
//         $(".password").addClass("is-valid");
//         $(".correo").addClass("is-valid");
//           $.ajax({
//             url: url1,
//             method: "POST",
//             data: { correo: correo, password: password },
//             success: function (data) {
//               if(data === "error"){
//                 $(".messageError").html('<div class="alert text-white alert-success">El usuario y contraseña ingresado son invalidos.</div>');
//                 $(".password").addClass("is-invalid");
//                 $(".correo").addClass("is-invalid");
//                }
//                else {
//                 window.location = baseurl + "clientes/inicio";
//                }
//              }
//            })
//         }
//     })
// });

$("#FormLOG").submit(function (event) {
	event.preventDefault();
  Suubtmit();
});
function Suubtmit() {
  var correo = $("#correo").val(),
  password = $("#password").val();
  $.ajax({
    url: url1,
    method: "POST",
    data: { correo: correo, password: password },
    success: function (data) {
      if(data === "error"){
        $(".messageError").html('<div class="alert text-white alert-success">El usuario y contraseña ingresado son invalidos.</div>');
        $(".password").addClass("is-invalid");
        $(".correo").addClass("is-invalid");
       }
       else {
         window.location = baseurl + "clientes/inicio";
       }
     }
   });
  }

  $("#vercontra").on("change", function(){
     var check = $("input:checkbox[name=vercontra]:checked").val();
     if (check == "on"){
      $("#password").prop("type", "text");
    }
    else {
      $("#password").prop("type", "password");
     }
  });