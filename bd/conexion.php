<?php 

class DBGGestionLibreria{

private $servidor = 'localhost';
private $dataBase = 'db_libreria';
private $user = 'root';
private $password = '';




private function getConexion(){
$dns = "mysql:host=$this->servidor;dbname=$this->dataBase";
$obPDO = new PDO($dns, $this->user, $this->password);
return $obPDO;

}

public function getLibros(){
    $pdoConexion = $this->getConexion();
    $resultado = [];

    if( is_object($pdoConexion)){
        $sql = "SELECT * FROM titulos";
        $resultado = $pdoConexion->query($sql);
    }
    return $resultado;
}

public function getAutores(){
    $pdoConexion = $this->getConexion();
    $resultado = [];

    if( is_object($pdoConexion)){
        $sql = "SELECT * FROM autores";
        $resultado = $pdoConexion->query($sql);
    }
    return $resultado;
}


}



?>
