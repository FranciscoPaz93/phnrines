<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php include VIEW_PATH . "include/head.php"; ?>
  <script type="text/javascript" src="<?php asset("js/main.js") ?>">  </script>
  <link href="<?php asset("css/hondurines.css");?>" rel="stylesheet">
  <title>Hola</title>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="<?php asset("img/logo.png"); ?>" style="width:100px; margin-top:-10px;" alt="">
        </a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav ">
          <li class="active"><a href="#">Inicio<span class="sr-only">(current)</span></a></li>
          <li><a href="#">Eventos</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Herramientas <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Medidas de</a></li>
              <li><a href="#">Medidas de agujeros</a></li>

            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Iniciar Sesion</a></li>
          <li><a href="#">Resgistrarse</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <?php include VIEW_PATH .'administration/nuevo.php'; ?>
      </div>
      <div class="col-md-9">
        <div class="panel panel-default">
          <div class="panel-body">
            <table class="table">
              <thead>
                <th>Codigo</th>
                <th>Articulo</th>
                <th>Descripcion</th>
                <th>Medida</th>
                <th>Tamaño</th>
                <th>Color</th>
                <th>Precior</th>
                <th>Inventario</th>
                <th>imagen</th>
                <th>Acciones</th>
              </thead>
              <tbody>
                <?php foreach ($pro as $p): ?>
                  <tr>
                    <td><?php echo $p->codigo; ?></td>
                    <td><?php echo $p->articulo;  ?></td>
                    <td><?php echo $p->descripcion;  ?></td>
                    <td><?php echo $p->medida;  ?></td>
                    <td><?php echo $p->tamano;  ?></td>
                    <td><?php echo $p->color;  ?></td>
                    <td><?php echo $p->precio;  ?></td>
                    <td><?php echo $p->stock;  ?></td>
                    <td>

                      <button type="button" class="btn btn-default" aria-label="Left Align">
                        <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                      </button>
                    </td>

                    <td>
                      <a href="<?php url("administration/eliminar/".$p->id);?>">
                        <button type="button" class="btn btn-default" aria-label="Left Align">
                          <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </button>
                      </a>

                      <a href="<?php url("administration/modificar/".$p->id); ?>">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal" aria-label="Left Align">
                          <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </button>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="panel-footer">

          </div>
        </div>

      </div>
    </div>





  </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>
