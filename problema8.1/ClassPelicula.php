<?php

//creamos clase sencilla para los vuelos
class Pelicula
{

    //propiedades
    // como se trata de una clase de paso,
    //es decir, solo servirá como una clase contenedora
    // necesitamos que las propiedades sean públicas
    public $nombre;
    public $genero;
    public $duracion;
    public $clasificacion;
    public $protagonista;

    //constructor
    public function __construct(string $nom, string $gen, string $dur, string $clas, string $prot)
    {

        $this->nombre = $nom;
        $this->genero = $gen;
        $this->duracion = $dur;
        $this->clasificacion = $clas;
        $this->protagonista = $prot;
    
    }
    //no necesitamos getters ni setters
}