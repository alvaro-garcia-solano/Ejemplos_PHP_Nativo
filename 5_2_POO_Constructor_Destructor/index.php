<?php

require_once 'Clases/Persona.php';

//Se le pasan parametros al constructor
$persona = new Persona("Alvaro", 32);

//$persona->nombre='Alvaro';
//$persona->edad=32;

//echo 'Nombre: '. $persona->nombre . '<br />';
//echo 'Edad: '. $persona->edad . '<br />';

echo $persona->saludar();

//Destruimos el objeto para liberar memoria
//Se llama al destructor
unset($persona);

?>