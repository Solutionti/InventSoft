
$(document).ready( function () {
  $('#table-proveedores').DataTable({
    "lengthMenu": [10, 50, 100, 200],
    "language":{
    "processing": "Procesando",
    "search": "Buscar:",
    "lengthMenu": "Ver _MENU_ Proveedores",
    "info": "Mirando _START_ a _END_ de _TOTAL_ Proveedores",
    "zeroRecords": "No encontraron resultados",
    "paginate": {
      "first":      "Primera",
      "last":       "Ultima",
      "next":       "Siguiente",
      "previous":   "Anterior"
    }
  }
  });
});

$("#crearproveedor").on("click", function(){
    var url = baseurl + "ventas/crearproveedor";
    var nit_proveedores = $("#nit_proveedores").val(), 
    nom_proveedores = $("#nom_proveedores").val(),
    tel_proveedores =$("#tel_proveedores").val(),
    correo_proveedores =$("#correo_proveedores").val(),
    desc_proveedores =$("#desc_proveedores").val();

    // llamar servicio

    $.ajax({
      url: url,
      method: "POST",
      data: {
        nit_proveedores: nit_proveedores,
        nom_proveedores: nom_proveedores,
        tel_proveedores: tel_proveedores,
        correo_proveedores: correo_proveedores,
        desc_proveedores: desc_proveedores
      },
      success: function () {
        $("body").overhang({
            type: "success",
            message: "El proveedor se  ha creado correctamente"
          });
          setTimeout(reloadPage, 2000);
      },
      error: function (){
        $("body").overhang({
            type: "error",
            message: "Alerta ! Tenemos un problema al conectar con la base de datos verifica tu red.",
          });
      }
    })

})

function reloadPage() {
  location.reload();
}