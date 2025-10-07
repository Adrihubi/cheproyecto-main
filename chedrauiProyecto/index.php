<?php
//  Cargar archivos necesarios
require_once("config.php");
require_once("controlador/inventarioController.php");
require_once("controlador/promocionalController.php");
require_once("controlador/atencionController.php");

// Enrutamiento según parámetros en la URL
if (isset($_REQUEST['p'])):
    $metodo = $_REQUEST['p'];
    if (method_exists('promocionalController', $metodo)):
        promocionalController::{$metodo}();
    endif;
else:
    if (isset($_REQUEST['e'])):
        $metodo = $_REQUEST['e'];
        if (method_exists('inventarioController', $metodo)):
            inventarioController::{$metodo}();
        endif;
    else:
        if (isset($_REQUEST['l'])):
            $metodo = $_REQUEST['l'];
            if (method_exists('logoController', $metodo)):
                logoController::{$metodo}();
            endif;
        else:
            if (isset($_REQUEST['a'])):
                $metodo = $_REQUEST['a'];
                if (method_exists('atencionController', $metodo)):
                    atencionController::{$metodo}();
                else:
                    echo "El método '{$metodo}' no existe en atencionController.";
                endif;
            else:
                // Método por defecto si no se pasa ningún parámetro
                inventarioController::index();
            endif;
        endif;
    endif;
endif;
?>
