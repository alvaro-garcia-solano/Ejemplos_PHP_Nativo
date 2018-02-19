<?php

	class Validador{
		const MAYOR_DE_EDAD = 18;
		
		public function __construct(){

		}

		public function validarAcceso($edad){
			if($edad > self::MAYOR_DE_EDAD){
				return false;
			}
			else{
				return true;
			}
		}
	}

?>