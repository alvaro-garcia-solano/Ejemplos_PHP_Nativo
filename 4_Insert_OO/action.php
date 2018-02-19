<?php

if( isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['edad']) && !empty($_POST['edad']) ){

	//Conexión a BD
	$con = new mysqli("localhost", "root", "", "ejemplos");

	if($con->connect_error){
		die("Error conexión: " .$con->connect_error);
	}	
				
	//Limpiamos POST (Se puede llamara a una función de limpiado)
	$nombre = htmlspecialchars ($_POST['nombre']);
	$edad = htmlspecialchars ($_POST['edad']);

	$insert = "INSERT INTO personas (nombre, edad) VALUES ('$nombre', '$edad')";

	if( $con->query($insert) === TRUE ){
		echo "OK";

	}else{
		echo "Error: ".$con->error;
	}

	//Cerramos conexión a la BD
	$con->close();		
}
	

?>