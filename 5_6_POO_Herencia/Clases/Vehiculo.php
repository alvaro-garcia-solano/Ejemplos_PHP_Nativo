<?php

//Es una clase que va a heredar Coche y Moto
class Vehiculo{

	//Los atributos deben ser protected para que se puedan heredar
	protected $motor_encendido = false;
	protected $cantidad_puertas;
	protected $cantidad_ruedas;
	protected $marca;

	//Si se quiere instanciar debería ser public
	protected function __construct($cantidad_puertas, $cantidad_ruedas, $marca){
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

	public function estadoMotor(){
		return $this->motor_encendido;
		}
}

?>