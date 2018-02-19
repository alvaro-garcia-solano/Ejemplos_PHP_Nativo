<?php

require_once 'Clases/Fecha_f.php';
require_once 'Clases/Persona.php';

echo 'Fecha y hora: ' . Fecha_f::getFechaHora() . '<br />';
 
echo 'Los días de la semana: ' . Fecha_f::mostrarDiasSemana() . '<br/>';

$persona = Persona::getUsuarioPorDefecto();

echo $persona->saludar() . '<br />';

?>