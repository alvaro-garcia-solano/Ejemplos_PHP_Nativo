<?php

	class Fecha_f{
		
		private static $diasSemana = array ('Lunes' , 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

		public static function getFecha(){
			$anio = date('Y');
			$mes = date('m');
			$dia = date('d');
			return $dia . '/' . $mes . '/' . $anio;
		}

		public static function getHora(){
			$hora = date('H');
			$minutos = date('i');
			$segundos = date('s');
			return $hora . ':' . $minutos . ':' . $segundos;
		}

		//Desde un metodo estatico se pueden llamar a otros métodos estaticos
		public static function getFechaHora(){
			$fecha = self::getFecha();
			$hora = self::getHora();
			return $fecha . '|' . $hora;
		} 

		public static function mostrarDiasSemana(){
			$cadena = implode(', ', self::$diasSemana);
			return $cadena;
		} 
	}

?>