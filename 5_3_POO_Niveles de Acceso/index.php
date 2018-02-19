<?php

require_once 'Clases/Producto.php';

$producto = new Producto(111, "Pendrive", "Pendrive con 8GB de capacidad", 150);

//Mostramos atributos del producto
echo "Id: " . $producto->get_id() . '<br />';
echo "Nombre: " . $producto->get_nombre() . '<br />';
echo "Descripcion: " . $producto->get_descripcion() . '<br />';
echo "Precio: " . $producto->get_precio() . '<br />';

//Cambiamos atributos del producto
$producto->set_nombre("Ya no es un pendrive");
$producto->set_precio(300);

//Volvemos a mostrar producto
echo "<br/>";
echo "DESPUES DE CAMBIAR ATRIBUTOS <br/>";
echo "Id: " . $producto->get_id() . '<br />';
echo "Nombre: " . $producto->get_nombre() . '<br />';
echo "Descripcion: " . $producto->get_descripcion() . '<br />';
echo "Precio: " . $producto->get_precio() . '<br />';

?>