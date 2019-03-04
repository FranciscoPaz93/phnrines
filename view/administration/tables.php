<!DOCTYPE html>
<html lang="en">
<head>
<title>HonduRines</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php asset("css/bootstrap.min.css")?>" />
<link rel="stylesheet" href="<?php asset("css/bootstrap-responsive.min.css")?>" />
<link rel="stylesheet" href="<?php asset("css/uniform.css")?>" />
<link rel="stylesheet" href="<?php asset("css/select2.css")?>"/>
<link rel="stylesheet" href="<?php asset("css/matrix-style.css")?>" />
<link rel="stylesheet" href="<?php asset("css/matrix-media.css")?>" />
<link rel="stylesheet" href="<?php asset("font-awesome/css/font-awesome.css")?>"  />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header" >
<a href="dashboard.html" style="margin: auto;"><img src="<?php asset("img/logo-sm.png");?>" alt="" ></a>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">

</div>

<!--start-top-serch-->
<div id="search">

    <ul class="nav">
        <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text"><?php echo $_SESSION['usuario']; ?></span><b class="caret"></b></a>
            <ul class="dropdown-menu">

                <li class="divider"></li>
                <li><a href="#"><i class="icon-check"></i> Mis Tareas</a></li>
                <li class="divider"></li>
                <li><a href="<?php url("login/disconect")?>"><i class="icon-key"></i>Salir</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
  <ul>
    <li><a href="<?php url("administration");?>"><i class="icon icon-home"></i> <span>Productos</span></a> </li>
      <li><a href="<?php url("");?>"><i class="icon icon-picture"></i> <span>Pagina Principal Clientes</span></a> </li>

  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Inicio" class="tip-bottom"><i class="icon-home"></i> Inicio</a> <a href="#" class="current">Productos</a> </div>
    <h1>Tables</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Productos</h5><a href="" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Nuevo</a>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table display" id="producto">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Articulo</th>
                            <th>Marca</th>
                            <th>Descripcion</th>
                            <th>Medida</th>
                            <th>Tamaño</th>
                            <th>Color</th>
                            <th>Precio</th>
                            <th>Inventario</th>
                            <th>Top Ventas</th>
                            <th>Promocion</th>
                            <th>Descuento</th>
                            <th>Estrellas</th>
                            <th>Contenedor</th>
                            <th>Oferta</th>
                            <th>Disponible</th>
                            <th>Produccion</th>
                            <th>Categoria</th>
                            <th>imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($pro as &$p): ?>
                        <tr>
                            <td><?php echo $p['codigo']; ?></td>
                            <td><?php echo $p['articulo'];  ?></td>
                            <td><?php echo $p['marca'];  ?></td>
                            <td><?php echo $p['descripcion'];  ?></td>
                            <td><?php echo $p['medida'];  ?></td>
                            <td><?php echo $p['tamano'];  ?></td>
                            <td><?php echo $p['color'];  ?></td>
                            <td><?php echo $p['precio'];  ?></td>
                            <td><?php echo $p['stock'];  ?></td>
                            <td><?php echo ($p['top_ventas']==0) ? "No": "Si" ;  ?></td>
                            <td><?php echo ($p['promocion']==0) ? "No": "Si";  ?></td>
                            <td><?php echo $p['descuento'];  ?></td>
                            <td><?php echo $p['points'];  ?></td>
                            <td><?php echo $p['contenedor'];  ?></td>
                            <td><?php echo ($p['oferta']==0) ? "No": "Si";  ?></td>
                            <td><?php echo ($p['disponible']==0) ? "No": "Si";  ?></td>
                            <td><?php echo ($p['produccion']==0) ? "No": "Si";  ?></td>
                            <td><?php echo $p['categoria'];  ?></td>
                            <td>
                                <button type="button" class="btn btn-default imagen-btn" data-imagen="<?php asset("cata/". $p['imagen']); ?>" aria-label="Left Align">
                                    <span class="icon icon-picture" aria-hidden="true"></span>
                                </button>
                            </td>
                            <td>
                                <a href="<?php url("administration/eliminar/".$p['id']);?>">
                                    <button type="button" class="btn btn-default" aria-label="Left Align">
                                        <span class="icon icon-trash" aria-hidden="true"></span>
                                    </button>
                                </a>


                                    <a class="btn btn-default editor" data-id="<?php echo $p['id'];?>"  data-toggle="modal" data-target="#editarModal" aria-label="Left Align">
                                        <span class="icon icon-pencil" aria-hidden="true"></span>
                                    </a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                  
                    </tbody>
                </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Registrar Nuevo</h4>
            </div>
            <div class="modal-body">

                <form method="post" action="<?php url("administration/agregar")?>" enctype="multipart/form-data" id="nuevo">
                        <div class="form-group" style="">
                            <label for="codigo">Codigo</label>
                            <input type="text" class="form-control"  name="codigo" placeholder="" required>
                        </div>
                        <div class="form-group" style="position: static;">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion" placeholder="" required>
                        </div>
                        <div class="form-group" style="position: static;">
                            <label for="marca">Marca</label>
                            <input type="text" class="form-control"  name="marca" placeholder="" required>
                        </div>
                    <div class="form-group" style="position: static;">
                        <label for="tipo">Tipo Vehiculo</label>
                        <select class="form-control" id="contenedor" name="tipo" required>
                            <option value="Turismo">Turismo</option>
                        </select>
                    </div>
                        <div class="form-group" style="position: static;">
                            <label for="tamano">Tamaño</label>
                            <input type="text" class="form-control"  name="tamano" placeholder="" required>
                        </div>
                        <div class="form-group" style="position: static;">
                            <label for="precio">Precio</label>
                            <input type="number" class="form-control" name="precio" placeholder="" required>
                        </div>
                        <div class="form-group" style="position: static;">
                            <label for="etiqueta">Etiqueta</label>
                            <input type="text" class="form-control"  name="etiqueta" placeholder="" >
                        </div>
                        <div class="form-group" style="width: 661px; height: 79px; z-index: 1000; left: -722px; top: 635px;">
                            <label for="Categoria">Categoria</label>
                            <select class="form-control"  name="categoria" required>
                                <option value="rines">Rines</option>
                                <option value="llantas">Llantas</option>
                                <option value="accesorios">Accesorios</option>
                            </select>
                        </div>
                        <div class="form-group" style="position: static;">
                            <label for="estrellas">Estrellas</label>
                            <input type="number" max="5" class="form-control" name="estrellas" placeholder="" >
                        </div>
                        <div class="form-group" style="position: static;">
                            <label for="contenedor">N° Contenedor</label>
                            <select class="form-control" name="contenedor" required>
                                <option value="1">contenedor 1</option>
                                <option value="2">contenedor 2</option>
                                <option value="3">contenedor 3</option>
                                <option value="4">contenedor 4</option>
                            </select>
                        </div>
                        <div class="form-group" style="width: 661px; height: 79px; z-index: 1000; left: 717px; top: -23px;">
                            <label for="descuento">Descuento</label>
                            <input type="text" class="form-control"  name="descuento" placeholder="">
                        </div>
                        <div class="form-group" style="position: static;">
                            <label for="articulo">Articulo</label>
                            <input type="text" class="form-control" name="articulo" placeholder="" required>
                        </div>
                        <div class="form-group" style="position: static;">
                            <label for="medida">Medida</label>
                            <input type="text" class="form-control"  name="medida" placeholder="" required>
                        </div>
                        <div class="form-group" style="">
                            <label for="color">Color</label>
                            <input type="text" class="form-control"  name="color" placeholder="" required>
                        </div>
                        <div class="form-group" style="position: static;">
                            <label for="stock">Stock</label>
                            <input type="number" class="form-control"  name="stock" placeholder="" required>
                        </div>
                        <div class="checkbox" style="position: static;">
                            <label>
                                <input type="checkbox"  name="top" value="1"> <span>Top Ventas</span>

                            </label>
                        </div>
                        <div class="checkbox" style="position: static;">
                            <label>
                                <input type="checkbox"  name="promocion" value="1"> <span>Promocionar</span>

                            </label>
                        </div>
                        <div class="checkbox" style="">
                            <label>
                                <input type="checkbox"  name="oferta" value="1"> <span>Oferta</span>

                            </label>
                        </div>
                        <div class="checkbox" style="">
                            <label>
                                <input type="checkbox"  name="disponible" value="1"> <span>Disponible</span>

                            </label>
                        </div>
                        <div class="checkbox" style="">
                            <label>
                                <input type="checkbox" name="produccion" value="1"> <span>Produccion</span>

                            </label>
                        </div>
                    <div class="checkbox" style="">
                        <label>
                            <input type="checkbox" name="transito" value="1"> <span>Transito</span>

                        </label>
                    </div>
                        <div class="form-group ui-sortable-helper" style="width: 666px; height: 67px; position: static; z-index: 1000; left: 840px; top: 413px;">
                            <label for="file">Imagen</label>
                            <input type="file" name="file">
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
<div id="mimodal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <span class="glyphicon glyphicon-ban-circle cerrar" data-dismiss="modal"></span>
        <img src="" class="modal-content recibir-imagen" width="100%" height="100%">

        <div class="modal-footer">
            <p><strong class="texto-imagen"></strong></p>
        </div>
    </div>
</div>
<?php include VIEW_PATH."/administration/include/editor.php";?>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2018 &copy; HEXSOFT <div class="prueba"></div></div>
</div>
<!--end-Footer-part-->
<script src="<?php asset("js/administration.js")?>"></script>
<script src="<?php asset("js/administrador.js")?>"></script>
<script src="<?php asset("js/jquery.min.js")?>"></script>
<script src="<?php asset("js/jquery.ui.custom.js")?>"></script>
<script src="<?php asset("js/bootstrap.min.js")?>"></script>

<script src="<?php asset("js/select2.min.js")?>"></script>
<script src="<?php asset("js/jquery.dataTables.min.js")?>"></script>
<script src="<?php asset("js/lightbox.js")?>"></script>




<script src="<?php asset("js/datatables.min.js")?>"></script>
<script type="application/javascript" >


</script>

</body>
</html>
