<?php

require_once 'Clases/CocheHereda.php';
require_once 'Clases/MotoHereda.php';


//NO DEJA INSTANCIAR UNA CLASE ABSTRACTA
$vehiculo = new Vehiculo(5, 5, 'BMW');

$coche = new CocheHereda(4, 4, 'Ford');
$coche->encenderMotor();

if($coche->estadoMotor()){
	echo 'El coche esta arrancado <br/>';
}else{
	echo 'El coche no esta arrancado <br/>';
}

$moto = new MotoHereda(2, 'Yamaha');
$moto->encenderMotor();

if($moto->estadoMotor()){
	echo 'La moto esta arrancada <br/>';
}else{
	echo 'La moto no esta arrancada <br/>';
}

?>