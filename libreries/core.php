<?php
/**
 * Created by PhpStorm.
 * User: FRAN
 * Date: 14/10/2016
 * Time: 2:03
 */
ini_set('display_errors', '1');

require_once "help/helps.php";

define("APP_PATH",RUTA_BASE."app/");
define("VIEW_PATH",RUTA_BASE."view/");
define("LIBRERIA",RUTA_BASE."libreries/");
define("PATH",APP_PATH."paths/");
define("MODELS",APP_PATH."model/");
define('ASSET_PATH', RUTA_BASE .'assets/');

 //configure
require_once RUTA_BASE."config/config.php";
require_once "ORM/Connection.php";
require_once "ORM/FpORM.php";
require_once "ORM/Modelo.php";
require_once LIBRERIA."help/inputfilter.php";
require_once "fpdf/fpdf.php";

//librerias
require_once "vendor/Redirecciona.php";
require_once "vendor/Session.php";

includeModels();
require_once "view.php";
include "path.php";
include PATH."paths.php";
