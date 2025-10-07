<?php
class logoModel{

    private $logo;

    public function __construct(){
        $this -> logo = array();
    }

    public function mostrarLogo(){
        include_once('conexion.php');
        $db = new conexion();
        $consulta = "SELECT * FROM logo;";
        $resultado = $db ->prepare($consulta);
        $resultado -> execute();
        while($filas = $resultado->fetchall(PDO::FETCH_ASSOC)){
            $this->inventario[] = $filas;
        }
        return $this -> inventario;
    }

    public function insertarLo($imagen){
        include_once('conexion.php');
        $db = new conexion();
        $insertar = "INSERT INTO logo(imagen)
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