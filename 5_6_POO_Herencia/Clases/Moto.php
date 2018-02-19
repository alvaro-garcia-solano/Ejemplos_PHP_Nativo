<?php

	class Moto {
	    private $motor_encendido = false;
	    private $cantidad_de_ruedas;
	    private $marca;
	    public function __construct($cantidad_de_ruedas, $marca) {
	       $this->cantidad_de_ruedas = $cantidad_de_ruedas;
	       $this->marca = $marca;
	    }
	    public function encenderMotor(){
	       $this->motor_encendido = true;
	    }
	    public function apagarMotor(){
	       $this->motor_encendido = false;
	    }
	    //Verifica si el motor está encendido para saber si la moto puede arrancar o no.
	    public function arrancar(){
	       return $this->motor_encendido;
    } 
 } 

?>