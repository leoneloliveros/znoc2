<div class="m-content frame">
  <div class="row">
    <div class="form-group col-sm-offset-4 col-md-4">
      <label for="tipo_bitacora">Tipo de bitácora</label>
      <select id="tipo_bitacora" class="form-control">
        <option selected>Seleccione...</option>
        <option value="energias">Energía</option>
        <option value="intermitencias">Intermitencias</option>
        <option value="plataformas">Plataforma</option>
        <option value="servicios">Servicios</option>
      </select>
    </div>
  </div>
  <div class="generalFields">
    <hr>
    <div class="row">
      <div class="form-group col-md-4 input-group-sm">
        <label for="inicio_alarma">Inicio Alarma</label>
        <input type="text" class="form-control" id="inicio_alarma" placeholder="Ingrese fecha y hora">
      </div>
      <div class="form-group col-md-4 input-group-sm">
        <label for="creacion_tk">Creación TK</label>
        <input type="text" class="form-control" id="creacion_tk" placeholder="Ingrese fecha y hora">
      </div>
      <div class="form-group col-md-4 input-group-sm">
        <label for="inicio_actividad">Inicio Actividad</label>
        <input type="text" class="form-control" id="inicio_actividad" placeholder="Ingrese fecha y hora">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-4 input-group-sm">
        <label for="fin_actividad">Fin Actividad</label>
        <input type="text" class="form-control" id="fin_actividad" placeholder="Ingrese fecha y hora">
      </div>
      <div class="form-group col-md-4 input-group-sm">
        <label for="tiempo_atencion">Tiempo Atención</label>
        <input type="text" class="form-control" id="tiempo_atencion" placeholder="Ingrese valor">
      </div>
      <div class="form-group col-md-4 input-group-sm">
        <label for="tipo_actividad">Tipo de Actividad</label>
        <select class="form-control" id="tipo_actividad">
          <option value="">Seleccione...</option>
          <option value="APERTURA">APERTURA</option>
          <option value="SEGUIMIENTO">SEGUIMIENTO</option>
          <option value="CIERRE">CIERRE</option>
          <option value="ATENCIÓN LLAMADA">ATENCIÓN LLAMADA</option>
          <option value="REVISIÓN MAIL">REVISIÓN MAIL</option>
        </select>
      </div>
    </div>


    <div class="row">
      <div class="form-group col-md-4 input-group-sm">
        <label for="estado">Estado</label>
        <select id="estado" class="form-control">
          <option value="">Seleccione...</option>
          <option value="ABIERTO">ABIERTO</option>
          <option value="ASIGNADO">ASIGNADO</option>
          <option value="EN PROGRESO">EN PROGRESO</option>
          <option value="PENDIENTE ">PENDIENTE </option>
          <option value="RESUELTO">RESUELTO</option>
          <option value="CERRADO ">CERRADO </option>
          <option value="CANCELADO">CANCELADO</option>
        </select>
      </div>
      <div class="form-group col-md-4 input-group-sm">
        <label for="num_tk_incidente">Tk incidente</label>
        <input type="text" class="form-control" id="num_tk_incidente" placeholder="Ingrese número">
      </div>
      <div class="form-group col-md-4 input-group-sm">
        <label for="descripcion">Descripción</label>
        <input type="textArea" class="form-control" id="descripcion" placeholder="">
      </div>
    </div>


    <div class="row">
      <div class="form-group col-md-4 input-group-sm">
        <label for="id_users">Ingeniero</label>
        <input type="text" class="form-control" id="id_users" placeholder="Seleccione...">
      </div>
      <!-- <div class="form-group col-md-4 input-group-sm">
      <label for="cedulaBitacora">Cédula</label>
      <input type="text" class="form-control" id="cedulaBitacora" placeholder="Ingrese número" value="no existe en db">
    </div> -->
      <div class="form-group col-md-4 input-group-sm">
        <label for="turno">Turno</label>
        <input type="textArea" class="form-control" id="turno" placeholder="">
      </div>
      <div class="form-group col-md-4 input-group-sm">
        <label for="ot_tarea">OT / Tarea</label>
        <input type="text" class="form-control" id="ot_tarea" placeholder="Seleccione...">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-4 input-group-sm">
        <label for="area_asignacion">Área asignación</label>
        <input type="text" class="form-control" id="area_asignacion" placeholder="Ingrese número">
      </div>
      <div class="form-group col-md-4 input-group-sm">
        <label for="responsable">Responsable</label>
        <input type="textArea" class="form-control" id="responsable" placeholder="">
      </div>
      <div class="form-group col-md-4 input-group-sm">
        <label for="caso_de_uso">Caso de Uso</label>
        <input type="text" class="form-control" id="caso_de_uso" placeholder="Seleccione...">
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-4 input-group-sm">
        <label for="prioridad">Prioridad</label>
        <input type="text" class="form-control" id="prioridad" placeholder="Ingrese número">
      </div>
      <div class="form-group col-md-4 input-group-sm">
        <label for="estaciones_afectadas">Estaciones Afectadas</label>
        <input type="text" class="form-control" id="estaciones_afectadas" placeholder="Ingrese cantidad">
      </div>
      <div class="form-group col-md-4 input-group-sm">
        <label for="estaciones_afectadas_descripcion">Estaciones Afectadas Descripción</label>
        <input type="textArea" class="form-control" id="estaciones_afectadas_descripcion" placeholder="">
      </div>
    </div>

  </div>

  <hr>

  <div id="validate_selection" class="row">

  </div>

  <button id="saveBookLog" class="btn btn-primary">Subir Bitácora</button>
</div>