<?php
declare(strict_types=1);
require_once 'Perro.php';

$perro1 = new Perro("Rocky", 5, "Grande", 30, "Pastor Alemán");
$perro2 = new Perro("Luna", 3, "Mediano", 20, "Bulldog Francés");
$perro3 = new Perro("Torito", 2, "Pequeño", 10, "Chihuahua");
$perro4 = new Perro("Max", 4, "Grande", 35, "Labrador Retriever");
$perro5 = new Perro("Milena",2,"Pequeño",8,"Sznawzer");

$perros = [$perro1, $perro2, $perro3, $perro4,$perro5];

echo "<h1>Información de los Perros</h1>" . "\n";
foreach ($perros as $perro) {       
    echo $perro->_toString() . "\n";
}


function buscarPerrosPorTamanio(array $perros, string $tamanio): array {
    $perrosBuscados = [];
    foreach ($perros as $perro) {
        if ($perro->getTamanio() == $tamanio) {
            $perrosBuscados[] = $perro;
        }
    }
    return $perrosBuscados;
}
function buscarPerroMasViejo(array $perros): Perro {
    $perroMasViejo = $perros[0];
    foreach ($perros as $perro) {
        if ($perro->getEdad() > $perroMasViejo->getEdad()) {
            $perroMasViejo = $perro;
        }
    }
    return $perroMasViejo;
}


?>