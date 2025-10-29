<?php
declare(strict_types=1);
require_once 'Perro.php';
require_once 'catalogo.php';


$tamanioBuscado = "Pequeño";
$perrosBuscados = buscarPerrosPorTamanio($perros, $tamanioBuscado);
echo "\nPerros de tamaño: " . $tamanioBuscado;
foreach ($perrosBuscados as $perro) {
    echo $perro->_toString() . "\n";
}   

$perroMasViejo = buscarPerroMasViejo($perros);
echo "\n<h2>El perro más viejo es:</h2>"; 
echo $perroMasViejo->_toString();

?>