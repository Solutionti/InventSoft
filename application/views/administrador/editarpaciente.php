<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion / Editar paciente</title>
    <?php require("componentes/head.php"); ?>
</head>
<body>

<div class="container">
   <br>
    <img src="<?php echo base_url(); ?>public/img/theme/logo.png" width="70px;" class="img-fluid">
    <small class="font-weight-bold ml-3"> DATOS DE LOS PACIENTES</small>
    <br>
    <br>
    <div class="row">
      <div class="col-md-4" hidden>
        <div class="form-group input-group-sm has-validation">
          <label>id</label>
          <input type="number" class="form-control" id="id2" value="" >
        </div>
      </div>
            <?php $pacientes = $paciente->result()[0]; ?>
            <div class="col-md-4">
                <div class="form-group input-group-sm has-validation">
                    <label>DNI</label>
                    <input type="number" class="form-control" id="dni2" value="<?php echo $pacientes->documento; ?>" readonly>
                    <div class="invalid-feedback">
                      Campo obligatorio.
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group input-group-sm has-validation">
                    <label>Apellido</label>
                    <input type="text" class="form-control" id="apellido2" value="" >
                    <div class="invalid-feedback">
                      Campo obligatorio.
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group input-group-sm has-validation">
                    <label>Nombre</label>
                    <input type="text" class="form-control" id="nombre2" value="" >
                    <div class="invalid-feedback">
                      Campo obligatorio.
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group input-group-sm">
                    <label>No HC</label>
                    <input type="text" class="form-control" id="hc2" readonly>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
              <div class="form-group input-group-sm has-validation">
                 <label>Celular</label>
                 <input type="number" class="form-control" id="celular2" value="">
                 <div class="invalid-feedback">
                      Campo obligatorio.
                    </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group input-group-sm has-validation" >
                <label>Sexo</label>
                  <select class="form-control" id="sexo2" >
                    <option value="">Seleccione el sexo</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                    <option value="O">Otro</option>
                  </select>
                  <div class="invalid-feedback">
                      Campo obligatorio.
                  </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group input-group-sm has-validation">
                 <label>Fecha de nacimiento</label>
                 <input type="date" class="form-control" id="fecha_nacimiento2" >
                 <div class="invalid-feedback">
                      Campo obligatorio.
                  </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group input-group-sm">
                 <label>Edad</label>
                 <input type="number" class="form-control" id="edad2" >
                 <div class="invalid-feedback">
                      Campo obligatorio.
                 </div>
              </div>
            </div>
         </div>
         <div class="row">
           <div class="col-md-4">
              <div class="form-group input-group-sm">
                 <label>Dirección</label>
                 <input type="text" class="form-control" id="direccion2">
                 <div class="invalid-feedback">
                      Campo obligatorio.
                    </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group input-group-sm">
                <label>Departamento</label>
                  <select class="form-control"  id="departamento2">
                  <option value="">Seleccione el departamento</option>
                   <?php foreach($departamento->result() as $departamentos) { ?>
                  <option value="<?php echo $departamentos->id; ?>"><?php echo $departamentos->name; ?></option>
                  <?php } ?>
                  </select>
                  <div class="invalid-feedback">
                      Campo obligatorio.
                    </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group input-group-sm">
                <label>Provincia</label>
                  <select class="form-control" id="provincia2">
                    <option value="">Seleccione la provincia</option>
                    <?php foreach($provincia->result() as $provincias) { ?>
                    <option value="<?php echo $provincias->id; ?>"><?php echo $provincias->name; ?></option>
                    <?php } ?>
                  </select>
                  <div class="invalid-feedback">
                      Campo obligatorio.
                    </div>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group input-group-sm">
                <label>Distrito</label>
                  <select class="form-control" id="distrito2">
                  <option value="">Seleccione el distrito</option>
                  <?php foreach($distrito->result() as $distritos) { ?>
                    <option value="<?php echo $distritos->id; ?>"><?php echo $distritos->name;  ?></option>
                  <?php } ?>
                  </select>
                  <div class="invalid-feedback">
                      Campo obligatorio.
                    </div>
              </div>
            </div>
         </div>
         <div class="row">
           <div class="col-md-4">
               <div class="form-group input-group-sm">
                   <label>Ocupación</label>
                   <input type="text" class="form-control" id="ocupacion2" value="">
                   <div class="invalid-feedback">
                      Campo obligatorio.
                    </div>
               </div>
           </div>
           <div class="col-md-4">
               <div class="form-group input-group-sm">
                   <label>Grado Academico</label>
                   <select class="form-control" id="grado_academico2">
                      <option value="">Seleccione el grado academico</option>
                      <option value="Kinder">Kinder</option>
                      <option value="Preescolar">Pre Escolar</option>
                      <option value="analfabeto">Analfabeto</option>
                      <option value="Primaria">Primaria</option>
                      <option value="Segundaria">Secundaria</option>
                      <option value="Superior">Superior</option>
                  </select>
                  <div class="invalid-feedback">
                      Campo obligatorio.
                    </div>
               </div>
           </div>
           <div class="col-md-4">
               <div class="form-group input-group-sm">
                   <label>Estado civil</label>
                   <select class="form-control" id="estado_civil2">
                        <option value="">Seleccione estado civil</option>
                        <option value="Soltero">Soltero(a)</option>
                        <option value="Casado">Casado(a)</option>
                        <option value="Viudo">Viudo(a)</option>
                        <option value="Conviviente">Conviviente(a)</option>
                        <option value="Divorciado">Divorciado(a)</option>
                        <option value="Otro">Otro(a)</option>
                   </select>
                   <div class="invalid-feedback">
                      Campo obligatorio.
                    </div>
               </div>
           </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h4>¿Es menor de edad?</h4>
                 
            </div>
        </div>
        <div class="responsable" >
          <div class="row">
            <div class="col-md-6">
              <div class="form-group input-group-sm">
                 <label>Documento</label>
                 <input type="text" class="form-control" id="documento2">
                 
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group input-group-sm">
                  <label>Familiar Responsable</label>
                  <input type="text" class="form-control" id="fresponsable2">
                </div>
              </div>
            </div>
          </div>
          <button class="btn btn-primary" id="btn-actualizar">Actualizar</button>
</div>
<?php require("componentes/scripts.php"); ?>

    <script>
        $(document).ready(function (){
            
            var url1 = "<?php echo base_url(); ?>administracion/pacienteid",
            dni = $("#dni2").val(),
            nombre = $("#nombre2"),
            apellido = $("#apellido2"),
            celular = $("#celular2"),
            hc = $("#hc2"),
            edad = $("#edad2"),
            sexo = $("#sexo2"),
            fecha_nacimiento = $("#fecha_nacimiento2"),
            direccion = $("#direccion2"),
            departamento = $("#departamento2"),
            provincia = $("#provincia22"),
            distrito = $("#distrito22"),
            ocupacion = $("#ocupacion2"),
            academico = $("#grado_academico2"),
            estado_civil = $("#estado_civil2"),
            documento = $("#documento2"),
            fresponsable = $("#fresponsable2");
            $.ajax({
              url: url1,
              method: "POST",
              data: { dni: dni },
              success: function(data) {
                  data =  JSON.parse(data);
                //   console.log(data);
                  $("#id2").val(data.codigo_paciente);
                  nombre.val(data.nombre);
                  apellido.val(data.apellido);
                  hc.val(data.hc);
                  edad.val(data.edad);
                  celular.val(data.telefono);
                  sexo.val(data.sexo).prop("selected", true);
                  fecha_nacimiento.val(data.fecha_nacimiento);
                  direccion.val(data.direccion);
                  departamento.val(data.departamento).prop("selected", true);
                  provincia.val(data.provincia).prop("selected", true);
                  distrito.val(data.distrito).prop("selected", true);
                  ocupacion.val(data.ocupacion);
                  academico.val(data.grado_academico).prop("selected", true);
                  estado_civil.val(data.estado_civil).prop("selected", true);
                  documento.val(data.familiar_documento);
                  fresponsable.val(data.familiar_nombre);

              }
          });
        
          $("#btn-actualizar").on("click", function() {

    var url4 = "<?php echo base_url(); ?>administracion/actualizarpacientes",
    id = $("#id2").val(),
    dni = $("#dni2").val(),
    celular = $("#celular2").val(),
    sexo = $("#sexo2").val(),
    edad = $("#edad2").val(),
    direccion = $("#direccion2").val(),
    fecha_nacimiento = $("#fecha_nacimiento2").val(),
    departamento = $("#departamento2").val(),
    provincia = $("#provincia22").val(),
    distrito = $("#distrito22").val(),
    ocupacion = $("#ocupacion2").val(),
    grado_academico = $("#grado_academico2").val(),
    estado_civil = $("#estado_civil2").val(),
    documento = $("#documento2").val(),
    fresponsable = $("#fresponsable2").val();

    $.ajax({
      url: url4,
      method: "POST",
      data: { 
        id: id,
        dni: dni, 
        celular: celular, 
        direccion: direccion,
        fecha_nacimiento: fecha_nacimiento,
        departamento: departamento,
        edad: edad,
        sexo: sexo,
        provincia: provincia,
        distrito: distrito,
        ocupacion: ocupacion,
        grado_academico: grado_academico,
        estado_civil: estado_civil,
        documento: documento,
        fresponsable: fresponsable
      },
      success: function(json) {// json parametro de respuesta para validar la respuesta
        json =  JSON.parse(json);

        if(json.success == 1){//Paciente Actualizado Correctamente,
          $("body").overhang({
            type: "success",
            message: json.message
          });
			    setTimeout(reloadPage, 3000);
        }else{//Ya existe un paciente con este NRO DOC - WARNING
          $("body").overhang({
            type: "warn",
            message: json.message
          });
        }
      }
    });
});
const reloadPage = () => {
            location.reload();
         }
        });
    </script>

    
  <script>
    var departamento = <?php echo json_encode($departamento->result()); ?>;
    var provincia = <?php echo json_encode($provincia->result()); ?>;
    var distrito = <?php echo json_encode($distrito->result()); ?>;

      $("#departamento2").change(function(){
        var id_departamento = ($('#departamento2').find(":selected").val()).slice(0,2);
        $("#provincia2").html("");
        $("#distrito2").html("");
        
        $("#provincia2").append('<option value="" >Seleccione la Provincia</option>');
        $("#distrito2").append('<option value="" >Seleccione el Distrito</option>');
        for (var i = 0; i < provincia.length; i++) {
          if((provincia[i]['id']).slice(0,2) == id_departamento){
            $("#provincia2").append('<option value="'+provincia[i]['id']+'" >'+provincia[i]['name']+'</option>');
          }
        }
        for (var i = 0; i < distrito.length; i++) {
          if((distrito[i]['id']).slice(0,2) == id_departamento){
            $("#distrito2").append('<option value="'+distrito[i]['id']+'" >'+distrito[i]['name']+'</option>');
          }
        }

        $('#provincia2  option[value=""]').attr('selected','selected');
        $('#distrito2  option[value=""]').attr('selected','selected');
      });

      $("#provincia2").change(function(){
        var id_provincia = ($('#provincia2').find(":selected").val()).slice(0,2);
        $('#departamento2  option[value="'+id_provincia+'"]').attr('selected','selected');

        $("#distrito2").html("");
        $("#distrito2").append('<option value="" selected>Seleccione el Distrito</option>');
        for (var i = 0; i < distrito.length; i++) {
          if((distrito[i]['id']).slice(0,2) == id_provincia){
            $("#distrito2").append('<option value="'+distrito[i]['id']+'" >'+distrito[i]['name']+'</option>');
          }
        }
        $('#distrito2  option[value=""]').attr('selected','selected');

      });

      $("#distrito2").change(function(){
        var id_distrito = ($('#distrito2').find(":selected").val()).slice(0,2);
        $('#departamento2  option[value="'+id_distrito+'"]').attr('selected','selected');

        $("#provincia2").html("");
        $("#provincia2").append('<option value="">Seleccione la Provincia</option>');
        for (var i = 0; i < provincia.length; i++) {
          if((provincia[i]['id']).slice(0,2) == id_distrito){
            $("#provincia2").append('<option value="'+provincia[i]['id']+'" >'+provincia[i]['name']+'</option>');
          }
        }
        
        var id_distrito = ($('#distrito2').find(":selected").val()).slice(0,4);
        for (var i = 0; i < provincia.length; i++) {
          if((provincia[i]['id']).slice(0,4) == id_distrito){
            $('#provincia2  option[value="'+id_distrito+'"]').attr('selected','selected');
            i = provincia.length;
          }
        }
      });

  </script>
</body>
</html>