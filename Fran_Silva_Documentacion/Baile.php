<?php

/**
 * @category Clase Baile
 */
class Baile {

    // Atributos de la clase Baile

    /** @var string Nombre del baile */
    private $nombre;

    /** @var int Edad requerida */
    private $edadMinima;

    /**
     * Constructor de la clase Baile
     * 
     * @author Fran Silva
     * 
     * @param string $nombre Nombre
     * @param int $edadMinima Edad requerida
     */
    public function __construct($nombre, $edadMinima = 8) {
        $this->nombre = $nombre;
        $this->edadMinima = $edadMinima;
    }

    /**
     * Método para obtener la edad requerida
     * 
     * Método con el que se *lee* la información almacenada en $edadMinima
     * 
     * @author Fran Silva
     * 
     * @return int Edad requerida
     */
    public function getEdadMinima() {
        return $this->edadMinima;
    }

    /**
     * Método para obtener el nombre
     * 
     * Método con el que se *lee* la información almacenada en $nombre
     * 
     * @author Fran Silva
     * 
     * @return string Nombre
     */
    public function getNome() {
        return $this->nombre;
    }
}


