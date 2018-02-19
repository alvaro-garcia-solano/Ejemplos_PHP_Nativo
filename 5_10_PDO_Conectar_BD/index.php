<?php


/*try{

	$pdo = new PDO('mysql:host=localhost;dbname=ejemplos', 'root', '');

}catch(PDOException $e){
	echo 'Error al conectarse a la base de datos: ' . $e->getMessage();
}
*/

require_once('clases/Conexion.php');
$conexion = new Conexion();

?>