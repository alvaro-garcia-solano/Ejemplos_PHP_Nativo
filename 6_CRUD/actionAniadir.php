<?php
include_once 'Clases/Persona.php';

if( isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['edad']) && !empty($_POST['edad'])  ){

	//Se podria validar

	//Creamos objeto Persona
	$persona = new Persona($_POST['nombre'],$_POST['edad']);

	//Guardamos en BD
	$persona->guardar();

	header('Location: index.php');
}

?>
