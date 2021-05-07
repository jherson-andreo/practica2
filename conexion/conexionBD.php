<?php
class ConexionDB{

	private $dsn = "mysql:host=localhost;dbname=freesneakers";
	private $usuario = "root";
	private $clave = "";
	public $conexion;

	public function abrir(){
        $this->conexion = new PDO($this->dsn, $this->usuario, $this->clave);
        return $this->conexion;
    }

    public function cerrar(){
        $this->conexion = null;
    }


}