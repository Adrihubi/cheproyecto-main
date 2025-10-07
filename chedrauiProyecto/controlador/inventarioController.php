<?php
require_once('modelo/inventarioModel.php');

class inventarioController{

    private $inventarioModel;

    function __construct(){
        $this -> inventarioModel = new inventarioModel();
    }
    public static function index() {
        echo "Bienvenido al módulo de inventario.";
        
        // O si tienes una vista para mostrar:
        // require_once('vista/inventario/inicio.php');
    }
    public static function inventario(){
        $consultaInventario = new inventarioModel();
        $datos = $consultaInventario -> mostrarInventario();
        require_once('vista/inventario/inventario.php');
    }

    public static function agregarP(){
        require_once('vista/inventario/agregarProducto.php');
    }
    public static function guardarI(){
        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
            $nombreArchivo = basename($_FILES['imagen']['name']);
            $rutaDestino = "vista/img/" . $nombreArchivo;
            move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino);
        } else {
            $rutaDestino = null; // o un valor por defecto
        }
        $nombre=$_POST['nombre'];
        $descripcion=$_POST['descripcion'];
        $caducidad=$_POST['caducidad'];
        $precio=$_POST['precio'];
        $insert = new inventarioModel();
        $insert-> insertarI($rutaDestino, $nombre, $descripcion, $caducidad, $precio);
        header("location:".urlsite."index.php?e=inventario");
    }

    public static function editarP() {
        $id = $_GET['id'];
        $modelo = new inventarioModel();
        $producto = $modelo->obtenerProductoPorId($id);
        require_once('vista/inventario/editarProducto.php');
    }
    public static function actualizarP() {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $caducidad = $_POST['caducidad'];
        $precio = $_POST['precio'];

        if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
            $nombreArchivo = time() . '_' . basename($_FILES['imagen']['name']);
            $rutaDestino = "vista/img/" . $nombreArchivo;
            move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino);
        } else {
            $rutaDestino = $_POST['imagen_actual']; // Mantener imagen actual
        }

        $modelo = new inventarioModel();
        $modelo->actualizarProducto($id, $rutaDestino, $nombre, $descripcion, $caducidad, $precio);

        header("Location: index.php?e=inventario");
        exit();
    }

    public static function eliminarP(){
        $id = $_GET['id'];
        $modelo = new inventarioModel();
        $modelo->eliminarProducto($id);
        header("Location: index.php?e=inventario");
        exit();

    }

    public static function att(){
        require_once('vista/clienteV/attCliente.php');
    }

}
?>