<?php

	class Coche{
		private $motor_encendido = false;
		private $cantidad_puertas;
		private $cantidad_ruedas;
		private $marca;

		public function __construct($cantidad_puertas, $cantidad_ruedas, $marca){
			$this->cantidad_puertas = $cantidad_puertas;
			$this->cantidad_ruedas = $cantidad_ruedas;
			$this->marca = $marca;
		}

		public function encenderMotor(){
			$this->motor_encendido = true;
		}

		public function apagarMotor(){
			$this->motor_encendido = false;
		}

		public function arrancarMotor(){
			return $this->motor_encendido;
		}
	}

?>