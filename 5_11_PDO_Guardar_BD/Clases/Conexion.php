<?php

class Conexion extends PDO{
	private $tipo = 'mysql';
	private $host = 'localhost';
	private $nombre = 'ejemplos';
	private $usuario = 'root';
	private $contraseña = '';

	public function __construct(){
		//Sobreescribo el método constructor de la clase PDO
		try{

			parent::__construct($this->tipo . ':host=' . $this->host . ';dbname=' . $this->nombre, $this->usuario, $this->contraseña);

		}catch(PDOException $e){
			echo 'Fallo en la conexión:' . $e->getMessage();
			exit;
		}
	}
}

?>