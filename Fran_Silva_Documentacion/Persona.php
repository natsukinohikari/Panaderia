<?php

/**
 * @category Clase Persona que será la clase padre de Profesor y Alumno
 */
class Persona {

    // Atributos de la clase Persona

    /** @var string Nombre de la persona */
    protected $nombre;

    /** @var string Apellidos de la persona */
    protected $apellidos;

    /** @var int Móvil de la persona */
    protected $movil;

    /**
     * Constructor de la clase Persona
     * 
     * @author Fran Silva
     * 
     * @param string $nombre Nombre de la persona
     * @param string $apellidos Apellidos de la persona
     * @param int $movil Móvil de la persona
     */
    public function __construct($nombre, $apellidos, $movil) { 
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->movil = $movil;
    }

    /**
     * Función que establece una cadena de texto y lo devuelve
     * 
     * Método que **devolverá** un mensaje que estará formado por los *atributos
     * de la clase* de manera concatenada
     * 
     * @author Fran Silva
     * 
     * @return string Cadena con la información de la persona
     */
    public function verInformacion() {
        return $this->nombre.' '.$this->apellidos.' ('.$this->movil.')';
    }
}
?>


