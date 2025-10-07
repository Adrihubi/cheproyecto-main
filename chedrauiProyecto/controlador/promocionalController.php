<?php
require_once('modelo/promocionalModel.php');
require_once('modelo/logoModel.php');

class promocionalController{

    private $promocionalController;

    function __construct(){
        $this -> promocionalModel = new promocionalModel();
    }
    public static function vistaCli(){
        $consultaLogo = new logoModel();
        $datosLogo = $consultaLogo -> mostrarLogo();
        $consultaPromo = new promocionalModel();
        $datos = $consultaPromo -> mostrarPromo();
        require_once('vista/clienteV/vistaPC.php');
    }

    public static function agregarImagen(){
        $consultaPromo = new promocionalModel();
        $datos = $consultaPromo -> mostrarPromo();
        require_once('vista/admin/agregarElementos.php');
    }
    public static function guardarIm(){
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
            $nombreArchivo = basename($_FILES['imagen']['name']);
            $rutaDestino = "vista/img/" . $nombreArchivo;
            move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino);
        } else {
            $rutaDestino = null; // o un valor por defecto
        }
        $insert = new PromocionalModel();
        $insert-> insertarIm($rutaDestino);
        header("location:".urlsite."index.php?p=vistaCli");
    }
    public static function guardarLo(){
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
            $nombreArchivo = basename($_FILES['imagen']['name']);
            $rutaDestino1 = "vista/img/" . $nombreArchivo;
            move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino1);
        } else {
            $rutaDestino1 = null; // o un valor por defecto
        }
        $insert = new LogoModel();
        $insert-> insertarLo($rutaDestino1);
        header("location:".urlsite."index.php?p=vistaCli");
    }
}
?>