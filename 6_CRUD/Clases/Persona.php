<?php

	require_once 'Clases/Conexion.php';

	class Persona {
		private $id;
		private $nombre;
		private $edad;

		const TABLA = 'personas';

		/**GETTERS**/
		public function getId(){
			return $this->id;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function getEdad(){
			return $this->edad;
		}

		/**SETTERS**/
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function setEdad($edad){
			$this->edad = $edad;
		}

		/**CONSTRUCTOR**/
		public function __construct($nombre, $edad, $id=null){
			//echo "Se acaba de crear el objeto persona";
			$this->id = $id;
			$this->nombre = $nombre;
			$this->edad = $edad;
		}

		/**DESTRUCTOR**/
		/*public function __destruct(){
			echo "El objeto ha sido destruido";
		}*/

		/**METODOS PROPIOS**/
		public function saludar(){
			return 'Hola soy '. $this->nombre .' y mi edad es '. $this->edad . '.<br />';
		}

		/**Funcion que guarda y modifica en BD**/
		public function guardar(){
			$conexion = new Conexion();

			/*Modifica persona*/
			if($this->id){
				try{
					//echo "ENTRA";
					$consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET nombre =:nombre, edad =:edad WHERE id =:id');
					$consulta->bindParam(':nombre', $this->nombre);
					$consulta->bindParam(':edad', $this->edad);
					$consulta->bindParam(':id', $this->id);
					//echo $consulta->debugDumpParams();
					$consulta->execute();
				}catch(PDOException $e){
					echo "E:" . $e->getMessage();
				}
				

			/*Añade persona*/
			}else{
				
				try{
					$consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . '(nombre, edad) VALUES (:nombre, :edad)');

					$consulta->bindParam(':nombre', $this->nombre);
					$consulta->bindParam(':edad', $this->edad);
					//echo $consulta->debugDumpParams();
					$consulta->execute();
					//$arr = $consulta->errorInfo();
					//print_r($arr);
					$this->id = $conexion->lastInsertId();
					//echo $this->id;
					//echo "FIN";
				}catch(PDOException $e){
					echo "E:" . $e->getMessage();
				}
				
			}

			$conexion = null;
		}

		public function eliminar(){
			$conexion = new Conexion();
			$id = $this->getId();
			try{
				$consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE id=:id');
				$consulta->bindParam(':id', $id);
				$consulta->execute();
			}catch(PDOException $e){
				echo "E:" . $e->getMessage();
			}	
		}

		public static function buscarPorId($id){
			$conexion = new Conexion();
			//$conexion = Conexion::getInstancia();
			$consulta = $conexion->prepare('SELECT nombre, edad FROM ' . self::TABLA . ' WHERE id=:id');
			$consulta->bindParam(':id', $id);
			//echo $consulta->debugDumpParams();
			$consulta->execute();
			$registro = $consulta->fetch();
			if($registro){
				return new self($registro['nombre'], $registro['edad'], $id);
			}else{
				return false;
			}
		}

		public static function recuperarTodos(){
			$conexion = new Conexion();
			//$conexion = Conexion::getInstancia();
			$consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' 	ORDER BY nombre');
			//echo $consulta->debugDumpParams();
			$consulta->execute();
			$registros = $consulta->fetchAll();
			//var_dump($registros);
			return $registros;
		} 
	}

?>