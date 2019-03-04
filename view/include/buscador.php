

<div class="form-group">
  <label for="">Numero de Aro</label>
  <select class="form-control" name="tamano" >
       <option value="0"></option>
      <?php foreach ($tamano as $val): ?>
     <option value="<?php echo $val[0] ?>"> <?php echo $val[0] ?> </option>
      <?php endforeach;?>
  </select>
</div>
<div class="form-group">
  <label for="">Medidas</label>
  <select class="selected form-control" name="medida">
   <option value="0"></option>
<?php foreach ($medidas as $val): ?>
     <option value="<?php echo $val[0] ?>"> <?php echo $val[0] ?> </option>
      <?php endforeach;?>
  </select>

</div>
<div class="form-group">
  <label for="">Tipo de vehiculo</label>
  <select class="selected form-control" name="">
    <option value="turismo">Turismo</option>
    <option value="camioneta">Camioneta</option>
    <option value="pickup">Pick-up</option>
  </select>

</div>
<!-- <div class="form-group">
  <label for="">Precio</label>
  <input type="range" class="form-control" value="0" list="grade" id="" placeholder="">
  <p class="help-block">0~12000 <small>Lempiras</small></p>
  <datalist id="grade">
    <option value="0">Hola</option>
    <option value="20"></option>
    <option value="40"></option>
    <option value="60"></option>
    <option value="80"></option>
    <option value="100"></option>

  </div> -->
  <div class="form-group">
    <label for=""></label>
    <input type="submit" class="form-control" value="Buscar" id="" placeholder="">

  </div>
