<?php
require_once("config.php");
require_once("controlador/inventarioController.php");
require_once("controlador/promocionalController.php");


if(isset($_REQUEST['p'])):
    $metodo = $_REQUEST['p'];
    if(method_exists('promocionalController', $metodo)):
        promocionalController::{$metodo}();
    endif;
else:
if (isset($_REQUEST['e'])):
    $metodo = $_REQUEST['e'];
    if(method_exists('inventarioController', $metodo)):
        inventarioController::{$metodo}();
    endif;
else:
    if(isset($_GET['l'])):
        $metodo =  $_GET['l'];
        if(method_exists('logoController',$metodo)):
            logoController::{$metodo}();
        endif;
    else:
    inventarioController::index();
endif;
endif;
endif;
?>