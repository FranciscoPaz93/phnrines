<?php include VIEW_PATH.'include/head.php';?>
<body>
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
       
        <div class="row">

            <div class="col-md-4 login" style="margin: auto"><img src="<?php asset('img/logo-md.png')?>" alt="">
            <br>
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Iniciar Secion</a></li>
                <li><a data-toggle="tab" href="#menu1">Registrarse</a></li>

            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <form name="loginform" method="post" action="<?php url('login/check')?>">
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="text" class="form-control" name="user">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Contraseña</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox"> Recordarme</label>
                        </div>
                        <center><button type="submit" class="btn btn-lg btn-primary" id="logeo">Entrar</button></center>
                        <br>
                        <div class="alert alert-warning hidden" id="ingresando">
                            <strong>Ingresando</strong>...
                        </div>
                    </form>
                    <br>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <form name="registro" method="post" action="<?php url("login/nuevousuario")?>" >
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="last">Correo</label>
                            <input type="text" class="form-control" name="last">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Contraseña</label>
                            <input type="password" class="form-control" name="pwd">
                        </div>
                        <div class="form-group">
                            <label for="pwdcf">Verique Contraseña</label>
                            <input type="password" class="form-control" name="pwdcf">
                        </div>

                        <center><button type="submit" class="btn btn-primary" id="registar">Registar</button></center>

                    </form>
                    <br><br>
                </div>

            </div>
        </div>

        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<br><br>
<!-- /SECTION -->

<!-- NEWSLETTER -->

<!-- /NEWSLETTER -->

<!-- FOOTER -->
<!-- FOOTER -->
<footer id="footer">
    <!-- top footer -->

    <!-- /top footer -->

    <!-- bottom footer -->
    <div id="bottom-footer" class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="footer-payments">
                        <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                        <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                    </ul>
                    <span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Diseñado por HEXOSFT <i class="fa fa-copyright" aria-hidden="true"></i>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
                </div>
            </div>

            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

    <!-- /bottom footer -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="<?php asset("js/jquery.min.js")?>"></script>
<script src="<?php asset("js/bootstrap.min.js")?>"></script>
<script src="<?php asset("js/slick.min.js")?>"></script>
<script src="<?php asset("js/nouislider.min.js")?>"></script>
<script src="<?php asset("js/jquery.zoom.min.js")?>"></script>
<script src="<?php asset("js/main.js")?>"></script>
<script src="<?php asset("js/clock.js")?>"></script>
<script src="<?php asset("js/lightbox.js")?>"></script>
<script src="<?php asset("js/redirect.js")?>"></script>
<script src="<?php asset("js/hondurines.js")?>"></script>
</body>
</html>
