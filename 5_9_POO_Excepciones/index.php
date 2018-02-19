<?php

function sumar($numero1, $numero2){
	if( is_numeric($numero1) && is_numeric($numero2) ){
		return $numero1 + $numero2;
	}
	else{
		//Se crea una excepcion
		throw new Exception('Los valores ingresados no son númericos');
		return 0;
	}
}

try{

	echo sumar(9,5);

}catch (Exception $e){
	echo $e->getMessage();
}


?>