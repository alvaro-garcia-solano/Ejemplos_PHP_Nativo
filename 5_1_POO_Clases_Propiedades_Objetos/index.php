<?php

require_once 'Clases/Persona.php';

$persona = new Persona();

$persona->nombre='Alvaro';
$persona->edad=32;

//echo 'Nombre: '. $persona->nombre . '<br />';
//echo 'Edad: '. $persona->edad . '<br />';

echo $persona->saludar();

?>