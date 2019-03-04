<div class="panel panel-default">
<div class="panel-heading">
  <div class="panel-title">
  Registrar Nuevo
  </div>
</div>
  <div class="panel-body">
    <form action="<?php url('administration/agregar')?>" method="post" enctype="multipart/form-data" class="form" id="form_producto">

      <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="articulo">
        <p class="help-block">Descripción/Color/Tamnaño</p>
      </div>
      <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="descripcion">
        <p class="help-block">Descripción Opcional</p>
      </div>
      <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="color">
        <p class="help-block">Color Codigo</p>
      </div>
      <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="stock" >
        <p class="help-block">Inventario</p>
      </div>
      <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="tipo">
        <p class="help-block">Tipo de vehiculo</p>
      </div>
      <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="tamano">
        <p class="help-block">Tamaño "Radio"/"Ancho </p>
      </div>
      <div class="form-group">
        <label for=""></label>
        <input type="text" name="medida" class="form-control">
        <p class="help-block">Medida</p>
      </div>
      <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="codigo">
        <p class="help-block">Codigo</p>
      </div>
      <div class="form-group">
        <label for="">Imagen</label>
        <input type="file" class="form-control" name="file">

      </div>
      <div class="input-group">
        <span class="input-group-addon">HNL</span>
        <input type="text" class="form-control" name="precio">
        <span class="input-group-addon">.00</span>

      </div>
      <br>





      <input type="submit" name="accion" value="Guardar" class="btn btn-primary">
    </form>

  </div>
  <div class="panel-footer">

  </div>
</div>
