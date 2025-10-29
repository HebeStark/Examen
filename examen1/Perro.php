<?php
declare(strict_types=1);

class Perro{
    private String $nombre;
    private int $edad;
    private String $tamanio;
    private int $peso;
    private String $raza;

    public  function __construct(String $nombre, int $edad, String $tamanio, int $peso, String $raza){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->tamanio = $tamanio;
        $this->peso = $peso;
        $this->raza = $raza;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getEdad(){
        return $this->edad;
    }       
    public function getTamanio(){
        return $this->tamanio;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function getRaza(){
        return $this->raza;
    }

    public function _toString(){
        return "\nNombre: " . $this->nombre . "\nEdad: " . $this->edad . "\nTamaño: " . $this->tamanio . 
        "\nPeso: " . $this->peso . "\nRaza: " . $this->raza;
    }
}

 ?>