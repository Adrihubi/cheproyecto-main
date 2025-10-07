<?php
class inventarioModel{
    
    private $inventario;

    public function __construct(){
        $this -> inventario = array();
    }

    #mostramos las vistas de inventario
    public function mostrarInventario(){
        include_once('conexion.php');
        $db = new conexion();
        $consulta = "SELECT * FROM inventario;";
        $resultado = $db ->prepare($consulta);
        $resultado -> execute();
        while($filas = $resultado->fetchall(PDO::FETCH_ASSOC)){
            $this->inventario[] = $filas;
        }
        return $this -> inventario;
    }

    public function insertarI($imagen, $nombre, $descripcion, $caducidad, $precio){
        include_once('conexion.php');
        $db = new conexion();
        $insertar = "INSERT INTO inventario(imagen, nombre, descripcion, caducidad, precio)
        VALUES ('$imagen','$nombre','$descripcion', '$caducidad','$precio');";
        $resultado=$db->prepare($insertar);
        $resultado->execute();
        if($resultado){
            echo "registrado";
        }
        else{
            echo "no se registro";
        }
    }

    public function obtenerProductoPorId($id) {
        include_once('conexion.php');
        $db = new conexion();
        $sql = "SELECT * FROM inventario WHERE id_producto = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizarProducto($id, $imagen, $nombre, $descripcion, $caducidad, $precio) {
        include_once('conexion.php');
        $db = new conexion();
        $sql = "UPDATE inventario SET imagen = ?, nombre = ?, descripcion = ?, caducidad = ?, precio = ? WHERE id_producto = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$imagen, $nombre, $descripcion, $caducidad, $precio, $id]);
    }

    public function eliminarProducto($id){
        include_once('conexion.php');
        $db = new conexion();
        $sql = "DELETE FROM inventario WHERE id_producto = ? ;";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
    }

}
?>