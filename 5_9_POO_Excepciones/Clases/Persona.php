<?php

	class Persona {
		public $nombre;
		public $edad;

		public function __construct($nombre, $edad){
			//echo "Se acaba de crear el objeto persona";
			$this->nombre = $nombre;
			$this->edad = $edad;
		}

		public function __destruct(){
			echo "El objeto ha sido destruido";
		}

		public function saludar(){
			return 'Hola soy '. $this->nombre .' y mi edad es '. $this->edad . '.<br />';
		}

		public static function getUsuarioPorDefecto(){
			return new self('Fernando',30);
		}

		
	}

?>