<?php


/*try{

	$pdo = new PDO('mysql:host=localhost;dbname=ejemplos', 'root', '');

}catch(PDOException $e){
	echo 'Error al conectarse a la base de datos: ' . $e->getMessage();
}
*/

require_once('clases/Persona.php');
//$persona = new Persona('Alvaro',34);
//$persona->guardar();

//Para modificar hay que pasar un id existente
$persona = new Persona('Alvaro',34,1);
//echo $persona->getId();
//echo $persona->getNombre();
$persona->guardar();

?>