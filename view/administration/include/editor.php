<?php
/**
 * Created by PhpStorm.
 * User: hexsoft
 * Date: 3/08/18
 * Time: 18:53
 */?>

<div id="editarModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Actualizar Producto</h4>
            </div>
            <div class="modal-body">

                <form method="post" action="<?php url("administration/actualizar")?>" enctype="multipart/form-data" id="editar">
                    <input type="hidden" name="img-old" id="img-old" value="">
                    <input type="hidden" name="id" id="objeto">
                    <div class="form-group" style="">
                        <label for="codigo">Codigo</label>
                        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="">
                    </div>
                    <div class="form-group" style="position: static;">
                        <label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="">
                    </div>
                    <div class="form-group" style="position: static;">
                        <label for="marca">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca" placeholder="">
                    </div>
                    <div class="form-group" style="position: static;">
                        <label for="tipo">Tipo Vehiculo</label>
                        <select class="form-control" id="contenedor" name="tipo">
                            <option value="Turismo">Turismo</option>
                        </select>
                    </div>
                    <div class="form-group" style="position: static;">
                        <label for="tamano">Tamaño</label>
                        <input type="text" class="form-control" id="tamano" name="tamano" placeholder="">
                    </div>
                    <div class="form-group" style="position: static;">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" id="precio" name="precio" placeholder="">
                    </div>
                    <div class="form-group" style="position: static;">
                        <label for="etiqueta">Etiqueta</label>
                        <input type="text" class="form-control" id="etiqueta" name="etiqueta" placeholder="">
                    </div>
                    <div class="form-group" style="width: 661px; height: 79px; z-index: 1000; left: -722px; top: 635px;">
                        <label for="Categoria">Categoria</label>
                        <select class="form-control" id="categoria" name="categoria">
                            <option value="rines">Rines</option>
                        </select>
                    </div>
                    <div class="form-group" style="position: static;">
                        <label for="estrellas">Estrellas</label>
                        <input type="number" max="5" class="form-control" id="estrellas" name="estrellas" placeholder="">
                    </div>
                    <div class="form-group" style="position: static;">
                        <label for="contenedor">N° Contenedor</label>
                        <select class="form-control" id="contenedor" name="contenedor">
                            <option value="1">contenedor 1</option>
                        </select>
                    </div>
                    <div class="form-group" style="width: 661px; height: 79px; z-index: 1000; left: 717px; top: -23px;">
                        <label for="descuento">Descuento</label>
                        <input type="text" class="form-control" id="descuento" name="descuento" placeholder="">
                    </div>
                    <div class="form-group" style="position: static;">
                        <label for="articulo">Articulo</label>
                        <input type="text" class="form-control" id="articulo" name="articulo" placeholder="">
                    </div>
                    <div class="form-group" style="position: static;">
                        <label for="medida">Medida</label>
                        <input type="text" class="form-control" id="medida" name="medida" placeholder="">
                    </div>
                    <div class="form-group" style="">
                        <label for="color">Color</label>
                        <input type="text" class="form-control" id="color" name="color" placeholder="">
                    </div>
                    <div class="form-group" style="position: static;">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" placeholder="">
                    </div>
                    <div class="checkbox" style="position: static;">
                        <label>
                            <input type="checkbox" name="top" id="top" value="1"> <span>Top Ventas</span>

                        </label>
                    </div>
                    <div class="checkbox" style="position: static;">
                        <label>
                            <input type="checkbox" name="promocion" id="promocion" value="1"> <span>Promocionar</span>

                        </label>
                    </div>
                    <div class="checkbox" style="">
                        <label>
                            <input type="checkbox" name="oferta" id="oferta" value="1"> <span>Oferta</span>

                        </label>
                    </div>
                    <div class="checkbox" style="">
                        <label>
                            <input type="checkbox" name="disponible" id="disponible" value="1"> <span>Disponible</span>

                        </label>
                    </div>
                    <div class="checkbox" style="">
                        <label>
                            <input type="checkbox" name="produccion" id="produccion" value="1"> <span>Produccion</span>

                        </label>
                    </div>
                    <div class="checkbox" style="">
                        <label>
                            <input type="checkbox" name="transito" id="transito" value="1"> <span>Transito</span>

                        </label>
                    </div>
                    <div class="form-group ui-sortable-helper" style="width: 666px; height: 67px; position: static; z-index: 1000; left: 840px; top: 413px;">
                        <label for="file">Imagen</label>
                        <input type="file" id="file" name="file">
                    </div>
                    <div class="form-group ui-sortable-helper" style="padding-right: 20px; position: static; width: 661px; height: 54px; z-index: 1000; left: 879px; top: 718px;">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>

    </div>
</div>