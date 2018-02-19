<?php

	require_once "Vehiculo.php";

	class MotoHereda extends Vehiculo{
		public function __construct($cantidad_ruedas, $marca ){
			parent::__construct(0, $cantidad_ruedas, $marca);
		}
	}

?>