<?php
require_once 'Persona.php';
require_once 'Baile.php';

/**
 * @category Clase Profesor que extiende la clase Persona
 * @see Persona
 */
final class Profesor extends Persona {

    // Atributos de la clase Profesor

    /** @var string NIF */
    private $nif;

    /** @var array Bailes */
    private $bailes = array();

    /**
     * Constructor de la clase Profesor
     * 
     * Constructor de la clase que a su vez **extiende el constructor de la clase padre**
     * 
     * @author Fran Silva
     * 
     * @param string $nombre Nombre del profesor
     * @param string $apellidos Apellidos del profesor
     * @param int $movil Móvil del profesor
     * @param string $nif NIF del profesor
     */
    public function __construct($nombre, $apellidos, $movil, $nif) {     
        parent::__construct($nombre, $apellidos, $movil);
        $this->nif = $nif;
    }

    /**
     * Función que calcula el sueldo
     * 
     * Método que calcula el sueldo con los parámetros que recibe por cabecera
     * y **devuelve** este cálculo
     * 
     * @author Fran Silva
     * 
     * @param int $horas Horas
     * @param int $importeHora Precio/hora
     * 
     * @return int Total del cálculo
     */
    public function calcularSueldo($horas, $importeHora = 16) {
        return $horas*$importeHora;
    }

    /**
     * Función que añade un baile
     * 
     * Método que añade un baile con los parámetros que recibe por cabecera. 
     * Comprobará que no está vacío y, si no lo está, recorrerá el array 
     * *$bailes*. Si encuentra en este array un baile con el mismo nombre
     * no hará nada; si no existe, lo **añadirá** *creando un objeto de clase Baile*
     * 
     * @author Fran Silva
     * 
     * @param string $nombreBaile Nombre del baile
     * @param int $edadMin Edad requerida
     * 
     * @return null Nada
     */
    public function anadirBaile($nombreBaile, $edadMin = 8) {
        if (!empty($this->bailes)) {
            foreach($this->bailes as $baile) { 
                if ($baile->getNome() == $nombreBaile) {
                  return; 
                }
            }
        } 
        $this->bailes[] = new Baile($nombreBaile, $edadMin);
    }

    /**
     * Función que borra un baile
     * 
     * Método que recorre el array *$bailes*. Si encuentra un baile cuyo nombre 
     * sea el mismo que el que recibe por cabecera, **lo elimina**
     * 
     * @author Fran Silva
     * 
     * @param string $nombreBaile Nombre del baile
     */
    public function eliminarBaile($nombreBaile) {
        foreach($this->bailes as $key=>$baile) {
            if ($baile->getNome() == $nombreBaile) { //Busco si existe
                unset($this->bailes[$key]); //Y lo elimino
            }
        }
    }

    /**
     * Función que obtiene los bailes y devuelve una cadena de texto
     * 
     * Método que **devuelve una cadena** con los bailes existentes recorriendo 
     * el array *$bailes*
     * 
     * @author Fran Silva
     * 
     * @return string Cadena de información de bailes
     */
    public function getBailes() {
        $cadena = '<br/>';
        foreach($this->bailes as $baile) {
            $cadena .= $baile->getNome() . ' (edad mínima:'.$baile->getEdadMinima().
            ' años)<br />';
        }
        return $cadena;
    }
}


