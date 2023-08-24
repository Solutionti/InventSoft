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
      console.log(data);
      $("#mesa_detalle").val(data.mesa);
      $("#mesero_detalle").val(data.mesero);
      $("#propina_detalle").val(data.propina);
      $("#descuento_detalle").val(data.descuento);
      $("#codigo_detalle").val('VNT'+data.detalle_pedido);
      $("#estado_detalle").val(data.estado);
      $("#descripcion_detalle").val(data.descripcion);
      getTablaPedidosMesa(data.mesa);
    },
    error: function(){

    } 
  });
}

function getTablaPedidosMesa(mesa) {
  var url = baseurl + "ventas/getpedidomesa/" + mesa;
  const tbody = document.querySelector('.detalle_pedido_mesas');
  var contador =  0;
  $.ajax({
    url: url,
    method: "GET",
    success: function(data) {
      data = JSON.parse(data);
      data.map((item, index) => {
        const tr = document.createElement('tr');
        const Content = `<td>VNT${item.codigo_pedido_mesa}</td><td>${item.nombre}</td><td class="text-center">${item.cantidad}</td><td class="text-center">${'$'+ item.precio}</td><td class="text-center">${'$'+ item.cantidad * item.precio}</td>`;
        tr.innerHTML = Content;
        tbody.append(tr);
        contador = (item.cantidad * item.precio) + contador;
      });
      $("#total").val(contador);
    }
  })
}

function cerrarMesas(){
  var url = baseurl  + "ventas/cerrarmesas",
      nro_mesa = $("#mesa_detalle").val(),
      mesero = $("#mesero_detalle").val(),
      propina = $("#propina_detalle").val(),
      descuento = $("#descuento_detalle").val(),
      estado = $("#estado_detalle").val(),
      descripcion = $("#descripcion_detalle").val(),
      total = $("#total").val();

      $("body").overhang({
        type: "confirm",
        primary: "#40D47E",
        accent: "#27AE60",
        yesColor: "#3498DB",
        yesMessage: "Si",
        noMessage: "No",
        message: "Realmente Desea Cerrar la  Mesa?",
        overlay: true,
        callback: function (value) {
          var response = value ? "Yes" : "No";
          if(response == "Yes"){
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
          else if(response == "No") {
            
          }
        }
      });
  
      //
      //  
  
}

function imprimirCocina() {
  var mesa = $("#mesa_detalle").val(),
      codigo = $("#codigo_detalle").val();
  url = baseurl  + "ventas/imprimircocina/" + mesa + "/" + codigo;
  window.open(url, "_blank", " width=800, height=800"); 

}

function reloadPage() {
  location.reload();
}

function refreshMesas() {
  location.reload();
}
