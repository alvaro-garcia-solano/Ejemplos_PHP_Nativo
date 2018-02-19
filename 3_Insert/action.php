<?php

if( isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['edad']) && !empty($_POST['edad']) ){

	//Conexión a BD
	$con = mysqli_connect("localhost", "root", "");

	if($con){
		
		if( mysqli_select_db($con,"ejemplos") ){
			
			//Limpiamos POST (Se puede llamara a una función de limpiado)
			$nombre = htmlspecialchars ($_POST['nombre']);
			$edad = htmlspecialchars ($_POST['edad']);

			$insert = "INSERT INTO personas (nombre, edad) VALUES ('$nombre', '$edad')";

			if( mysqli_query($con,$insert) ){
				echo "OK";

			}else{
				echo "Error: ".mysqli_error($con);
			}

			//Cerramos conexión a la BD
			mysqli_close($con);	
		}

	}	
}
	

?>