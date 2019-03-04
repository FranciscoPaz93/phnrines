<?php include VIEW_PATH.'include/head.php';?>
<style href="<?php asset("css/administration.css");?>"></style>
<body>
    <header>
            <!-- TOP HEADER -->
            <div id="top-header">
                <div class="container">

                    <ul class="header-links pull-right">

                        <li><a href="<?php url('login')?>"><i class="fa fa-user-o"></i> <?php session_start(); echo  (isset($_SESSION['usuario'])) ? $_SESSION['usuario'] : "Entrar";?></a></li>
                    </ul>
                </div>
            </div>
            <!-- /TOP HEADER -->

            <!-- MAIN HEADER -->
            <div id="header">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- LOGO -->
                        <div class="col-md-3">
                            <div class="header-logo">
                                <a href="<?php url("")?>" class="logo">
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- row -->
                </div>
                <!-- container -->
            </div>
            <!-- /MAIN HEADER -->
        </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 lateral">
    <div class="row">
        <div class="col-md-12 logo-lateral">
           <center><img src="<?php asset("img/logo-sm.png");?>" alt="" ></center>

        </div>
    </div>


                <h2>Administracion</h2>
                <ul class="list-group">
                    <li class="list-group-item">Productos</li>
                    <li class="list-group-item">Contenedores</li>
                    <li class="list-group-item">Usuarios</li>
                </ul>
            </div>
            <div class="col-md-8 col-lg-offset-2">

            </div>

        </div>



    </div>


</body>
<script src="<?php asset("js/jquery.min.js")?>"></script>
<script src="<?php asset("js/bootstrap.min.js")?>"></script>
<script src="<?php asset("js/slick.min.js")?>"></script>
<script src="<?php asset("js/nouislider.min.js")?>"></script>
<script src="<?php asset("js/jquery.zoom.min.js")?>"></script>
<script src="<?php asset("js/main.js")?>"></script>
<script src="<?php asset("js/clock.js")?>"></script>
<script src="<?php asset("js/lightbox.js")?>"></script>
<script src="<?php asset("js/redirect.js")?>"></script>
</html>
