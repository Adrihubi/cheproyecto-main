<?php
class Conexion extends PDO{
    private $hostBD = '127.0.0.1';
    private $nombreBD = 'att_chedraui';
    private $usuarioBD = 'root';
    private $passwordBD = 'Toledo.';
    public function __construct(){
        try {
            parent::__construct('mysql:host='.$this->hostBD.';dbname='.$this->nombreBD.';charset=utf8',$this->usuarioBD,$this->passwordBD,
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            exit;
        }
        
    }
}
?>