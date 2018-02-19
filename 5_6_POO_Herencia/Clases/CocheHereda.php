<?php
	
	require_once "Vehiculo.php";

	class CocheHereda extends Vehiculo{
		public function __construct($cantidad_puertas, $cantidad_ruedas, $marca){
			
			parent::__construct($cantidad_puertas, $cantidad_ruedas, $marca);
		}
	}

?>