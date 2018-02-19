<?php

class Conexion extends PDO{
	private $tipo = 'mysql';
	private $host = 'localhost';
	private $nombre = 'ejemplos';
	private $usuario = 'root';
	private $contraseña = '';

	private static $instancia = null;

	private function __construct(){
		//Sobreescribo el método constructor de la clase PDO
		try{

			parent::__construct($this->tipo . ':host=' . $this->host . ';dbname=' . $this->nombre, $this->usuario, $this->contraseña);

		}catch(PDOException $e){
			echo 'Fallo en la conexión:' . $e->getMessage();
			exit;
		}
	}

	public static function getInstancia(){
		if(!self::$instancia){
			new self();
		}
		return self::$instancia;
	}

	public static function cerrar(){
		self::$instancia = null;
	}
}

?>