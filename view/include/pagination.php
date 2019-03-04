<?php
foreach ($catalogo as $producto): ?>
<div class="col-sm-6 col-md-3" id="catalogo">
  <div class="thumbnail">
    <img src="<?php asset("cata/". $producto->imagen); ?>" alt="rines" class="img-thumbnail" style="width:250px;   height:250px;"alt="...">
    <div class="caption">
      <h4>
      <?php
      if (strlen($producto->articulo)>=16) {
        echo substr($producto->articulo, 0, 18) . "...";
      }else {
        echo $producto->articulo;
      }?>
    </h4>
    <table class="table">
      <tr>
        <td><b>Codigo:</b></td>
        <td><?php echo $producto->codigo ?></td>
      </tr>
      <tr>
        <td><b>Precio:</b></td>
        <td><?php echo money_format("%i",$producto->precio) . " HNL"; ?></td>
      </tr>
      <tr>
        <td><b>Medida:</b></td>
        <td><?php echo $producto->medida ?></td>
      </tr>
      <tr>
        <td><b>Tamaño:</b></td>
        <td><?php echo $producto->tamano ?></td>
      </tr>
    </table>
    <p><a href="#" class="btn btn-primary" role="button">Agregar</a> <a href="#" class="btn btn-default" role="button">Ver</a></p>
  </div>
</div>
</div>
<?php endforeach; ?>
