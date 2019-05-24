$(function(){
  bitacoras = {
    init: function(){
      bitacoras.events();
      bitacoras.checkStateType();
    },

    events: function(){
      $('#tipo_bitacora').on('change', function() {
        if($('#tipo_bitacora').hasClass("err")) $('#tipo_bitacora').removeClass("err");
        
        bitacoras.allTypesDisable();
        bitacoras.checkStateType();
      });
      $("#saveBookLog").on('click', bitacoras.validateForm);
    },

    allTypesDisable: function() {
      // $('#if_energia,#if_intermitencias,#if_servicios,#if_plataforma,#if_intermitencias_servicios,.if_energy_or_intermitences_or_services,.if_energy_or_platform_or_services,.servCorpDesc').css("display", "none");
      $("#validate_selection").children().remove();
    },
    
     checkStateType: function() {
       const tipoIncidente = 
       `<div class="form-group col-sm-4 if_energy_or_platform_or_services" >
          <label for="tipo_incidente">Tipo de incidente</label>
          <input type="text" class="form-control" id="tipo_incidente" placeholder="ingrese valor...">
        </div>`;

       const tiempoDeteccion = 
       `<div class="form-group col-sm-4" >
          <label for="tiempo_deteccion">Tiempo de detección</label>
          <input type="text" class="form-control" id="tiempo_deteccion" placeholder="ingrese valor...">
        </div>`;
        $("#intermitenciasx").remove();
      switch ($('#tipo_bitacora option:selected').text()) {
        case "Energía":
          $("#validate_selection").append(`

          
          ${tiempoDeteccion}

          ${tipoIncidente}


          <div class="col-sm-4" >
            <div class="form-group col-sm-12">
              <label for="tipo_falla">Tipo de falla</label>
              <input type="text" class="form-control" id="tipo_falla" placeholder="ingrese valor...">
            </div>
          </div>
        `);
            break;
          case "Intermitencias":

            $("#tipo_actividad").append(`
              <optgroup label="Intermitencias" id="intermitenciasx">
                <option value="INTERMITENCIA">INTERMITENCIA</option>
                <option value="BLOQUEO X USUARIO">BLOQUEO X USUARIO</option>
                <option value="REVISIÓN SATELITAL">REVISIÓN SATELITAL</option>
                <option value="REPORTE ELECTRIFICADORA">REPORTE ELECTRIFICADORA</option>
                <option value="REVISIÓN POWER BI">REVISIÓN POWER BI</option>
              </optgroup>
            `);
            $("#validate_selection").append(`
            ${tiempoDeteccion}

            <div class="col-md-4">
            
              <div class="form-group">
                <label for="tk_padre">TK Padre</label>
                <input type="text" class="form-control" id="tk_padre" placeholder="ingrese valor...">
              </div>
            </div>
          
            <div class="col-md-4">
              <div class="form-group">
                <label for="saltos_validados">Saltos validados</label>
                <input type="text" class="form-control" id="saltos_validados" placeholder="ingrese número..">
              </div>
            </div>
        
          `);
    
            break;
        case "Plataforma":
          $("#validate_selection").append(`

            <div class="form-group col-md-4">
              <label for="reporte_proveedores">Reporte con proveedores</label>
              <input type="text" class="form-control" id="reporte_proveedores" placeholder="ingrese número..">
            </div>

            ${tipoIncidente}

            <div class="form-group col-md-4">
              <label for="servicios_corporativos">Servicios Corporativos</label>
              <input type="text" class="form-control" id="servicios_corporativos" placeholder="ingrese cantidad..">
            </div>
          

            <div class="form-group servCorpDesc col-sm-12">
                <label for="servicios_corporativos_descripcion">Servicios Corporativos Descripción</label>
                <input type="text" class="form-control" id="servicios_corporativos_descripcion">
            </div>
        `);
            break;
        case "Servicios":

          $("#validate_selection").append(`
            <div id="if_servicios" class="col-md-4">
              <div class="form-group">
                <label for="valida_ruta_tx">Valida Ruta Tx</label>
                <input type="text" class="form-control" id="valida_ruta_tx" placeholder="ingrese valor...">
              </div>
            </div>
      
            
            <div id="if_intermitencias_servicios" class="col-md-4">
              <div class="form-group">
                <label for="saltos_validados">Saltos validados</label>
                <input type="text" class="form-control" id="saltos_validados" placeholder="ingrese número..">
              </div>
            </div>

        
            ${tiempoDeteccion}

            ${tipoIncidente}

            `);
            break;
        default:
          bitacoras.allTypesDisable();
      }
    },

    
    validateForm: function(){
      if ($('#tipo_bitacora option:selected').text() !== "Seleccione...") {
        $(".err").removeClass("err");
        const campos = $("div.frame input");
        var vacios = [];
        var data = {};
        var tipoBitacora = {};
        $.each(campos, function (i, element) {

          if ($(element).val() == null || $(element).val() == '' || $(element).val() == ' ' || $(element).val() == '  ') {
            vacios.push($(element).attr("id"));
          }else{
            if (typeof $(element).parents('.generalFields').val() === "string") {
              data[$(element).attr("id")] = $(element).val();
              
            }else{
              tipoBitacora[$(element).attr("id")] = $(element).val();
            }
          }
          
  
        });

        
        if (vacios.length == 0) {

          $.post(base_url+"Bitacoras/savebookLogsFrontEnd", 
            {
              general: data,
              tipo: tipoBitacora,
              tabla: $('#tipo_bitacora').val(),
            }
          ,
            function (data) {
              if (data == 2) {
                helper.alert_refresh('¡Bien hecho',`Se guardó la bitácora de <b>${$('#tipo_bitacora').val()}</b>.` ,'success');
              }else{
                swal({
                  "title": "Error",
                  "text" : "Ocurrió un error inesperado",
                  "type" : "error",
                });
              }
            },
          );
          
        }else{
            $.each(vacios, function (i, id) { 
              $(`#${id}`).addClass('err');
            });
            swal({
              "html" : "¡No puede dejar los campo en rojo vacios!",
              "type":"error"
            });
            console.log("vacios",vacios);
          
        }
        
      }else{
        swal({
          "title" : "¡Error!",
          "html" : "¡Debe seleccionar un tipo de bitácora!",
          "type":"error"
        });
        $('#tipo_bitacora').addClass("err");
      }

    },

  },
  bitacoras.init();
});




