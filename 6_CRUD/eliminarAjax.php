<?php

require_once './Clases/Persona.php';


$id = $_POST['id'];

$persona = Persona::buscarPorId($id);

if($persona!=false){
	
	$persona->eliminar();
	echo $id;	
}




?>