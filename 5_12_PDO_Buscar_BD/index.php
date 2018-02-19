<?php

require_once('clases/Persona.php');

$persona = Persona::buscarPorId(1);

if($persona){
	echo "Nombre: " . $persona->getNombre().'<br/>';
	echo "Edad: " . $persona->getEdad().'<br/>';
}else{
	echo "No se ha encontrado la persona";
}

$personas = Persona::recuperarTodos();

foreach($personas as $persona){
	echo "Nombre: ".$persona['nombre'].'<br/>';
	echo "Edad: ".$persona['edad'].'<br/>';
}


?>