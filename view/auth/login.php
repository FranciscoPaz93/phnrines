<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>Login</title>
        <?php include VIEW_PATH . 'include/head.php'; ?>
    </head>
    <body style="background-image: url(<?php asset("/img/cleandatabase.jpg"); ?>); background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                     
                        
                        <div class="panel-body">
                            <div class="thumbnail">
                                <img class="img-circle" src="<?php asset("/img/logo.png")?>">
                            </div>
                            <form role="form" action="<?php url("login/check") ?>" method="post">

                                <fieldset>
                                    <input value="<?php csrf_token(); ?>" name="_token" type="hidden">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Usuario" name="user" type="text" required autofocus >
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" required value="">
                                    </div>
                                    <?php if (Session::has("estado") && Session::has("mensaje")) { ?>
                                        <div class="alert alert-danger">
                                            <strong>Recarga - </strong><?php echo Session::get("mensaje"); ?>
                                        </div>
                                    <?php } ?>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <input type="submit" class="btn btn-lg btn-success btn-block" value="Acceder">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
