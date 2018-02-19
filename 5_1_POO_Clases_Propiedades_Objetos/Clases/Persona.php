<?php

	class Persona {
		public $nombre;
		public $edad;

		public function saludar(){
			return 'Hola soy '. $this->nombre .'y mi edad es '. $this->edad . '<br />';
		}
	}

?>