<div class="panel panel-default">
<div class="panel-heading">
  <div class="panel-title">
  Editar Productos
  </div>
</div>
  <div class="panel-body">


    <form action="" method="post" enctype="multipart/form-data" class="form" id="form_productoeditar">
      <input type="hidden" name="id" value="<?php echo $productos->id; ?>">
      <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="articulo" value="<?php echo $productos->articulo; ?>">
        <p class="help-block">Descripción/Color/Tamnaño</p>
      </div>
      <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="descripcion" value="<?php echo $productos->descripcion; ?>">
        <p class="help-block">Descripción Opcional</p>
      </div>
      <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="tipo" value="<?php echo $productos->tipo; ?>" >
        <p class="help-block">Tipo de vehiculo</p>
      </div>
      <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="color" value="<?php echo $productos->color; ?>" >
        <p class="help-block">Color Codigo</p>
      </div>
      <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="stock"  value="<?php echo $productos->stock; ?>">
        <p class="help-block">Inventario</p>
      </div>
      <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="tamano"  value="<?php echo $productos->tamano; ?>">
        <p class="help-block">Tamaño "Radio"/"Ancho </p>
      </div>
      <div class="form-group">
        <label for=""></label>
        <input type="text" name="medida" class="form-control" value="<?php echo $productos->medida; ?>">
        <p class="help-block">Medida</p>
      </div>
      <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="codigo" value="<?php echo $productos->codigo; ?>">
        <p class="help-block">Codigo</p>
      </div>
      <div class="form-group">
        <label for="">Imagen</label>
        <input type="file" class="form-control" name="file" tpm_name="<?php echo $productos->imagen; ?>" value="<?php echo $productos->imagen; ?>">

      </div>
      <div class="input-group">
        <span class="input-group-addon">HNL</span>
        <input type="text" class="form-control" name="precio"  value="<?php echo $productos->precio; ?>">
        <span class="input-group-addon">.00</span>

      </div>
      <br>





      <input type="submit" name="accion" value="Guardar" class="btn btn-primary">
    </form>


  </div>
  <div class="panel-footer">

  </div>
</div>
