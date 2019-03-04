<?php
//ruteo
$path = new path();
$path->controller(array(
    '/'=>"WelcomeController",
    'store'=>"StoreController",
    'login'=>"AuthController",
    'administration'=>"ProductController",
    'help'=>"HelpController",
    'cart'=>'CartController'
));
