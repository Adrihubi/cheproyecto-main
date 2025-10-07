<?php
class promocionalModel{

    private $promo;

    public function __construct(){
        $this -> promo = array();
    }

    public function mostrarPromo(){
        include_once('conexion.php');
        $db = new conexion();
        $consulta = "SELECT * FROM promocional;";
        $resultado = $db ->prepare($consulta);
        $resultado -> execute();
        while($filas = $resultado->fetchall(PDO::FETCH_ASSOC)){
            $this->inventario[] = $filas;
        }
        return $this -> inventario;
    }

    public function insertarIm($imagen){
        include_once('conexion.php');
        $db = new conexion();
        $insertar = "INSERT INTO promocional(imagen)
        VALUES ('$imagen');";
        $resultado=$db->prepare($insertar);
        $resultado->execute();
        if($resultado){
            echo "registrado";
        }
        else{
            echo "no se registro";
        }
    }

}
?>