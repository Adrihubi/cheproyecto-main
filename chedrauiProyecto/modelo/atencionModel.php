<?php
class atencionModel{
    
    private $atencion;

    public function __construct(){
        $this -> atencion = array();
    }

    #mostramos las vistas de inventario
    public function atencion(){
        include_once('conexion.php');
        $db = new conexion();
        $consulta = "SELECT * FROM ayuda;";
        $resultado = $db ->prepare($consulta);
        $resultado -> execute();
        while($filas = $resultado->fetchall(PDO::FETCH_ASSOC)){
            $this->atencion[] = $filas;
        }
        return $this -> atencion;
    }

    public function insertarAt($icono, $boton, $contenido){
        include_once('conexion.php');
        $db = new conexion();
        $insertar = "INSERT INTO ayuda(icono, boton, contenido)
        VALUES ('$icono','$boton','$contenido');";
        $resultado=$db->prepare($insertar);
        $resultado->execute();
        if($resultado){
            echo "registrado";
        }
        else{
            echo "no se registro";
        }
    }

    public function obtenerIdAt($id) {
        include_once('conexion.php');
        $db = new conexion();
        $sql = "SELECT * FROM inventario WHERE id_ayuda = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function actualizarAt($id, $icono, $boton, $contenido) {
        include_once('conexion.php');
        $db = new conexion();
        $sql = "UPDATE ayuda SET icono = ?, boton = ?, contenido = ? WHERE id_ayuda = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$icono, $boton, $contenido, $id]);
    }

    public function eliminarAt($id){
        include_once('conexion.php');
        $db = new conexion();
        $sql = "DELETE FROM ayuda WHERE id_ayuda = ? ;";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
    }

}
?>