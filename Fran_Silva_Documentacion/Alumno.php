<?php
require_once 'Persona.php';

/**
 * @category Clase Alumno que extiende la clase Persona
 * @see Persona
 */
final class Alumno extends Persona {

  /** @var int Atributo que albergará un número */
  private $numClases;

  /**
   * Método que establece el valor del atributo
   * 
   * Método que **establece el valor** del atributo de la clase el cual viene dado por el parámetro de cabecera
   * 
   * @author Fran Silva
   * 
   * @param int $num Número
   * 
   * @return int Nuevo número 
   */
  public function setNumClases($num) {
    $this->numClases = $num;
  }

  /**
   * Función que devolverá una cantidad a pagar
   * 
   * Método que comprobará si está establecido el atributo de la clase *$numClases*. 
   * Si no está establecido devolverá un mensaje comentando que debe indicarse; si lo está:
   * 1. Si va a una clase, pagará 20
   * 2. Si va a dos clases, pagará 32 
   * 3. Si va a más clases, pagará 40
   * 
   * @author Fran Silva
   * 
   * @return int|string Cantidad a pagar | Mensaje
   */
  public function aPagar() {
    if (isset($this->numClases)) {
      if ($this->numClases === 1) {
        return 20;
      }
      elseif ($this->numClases===2) {
        return 32;
      }
      else {
        return 40;
      }
    }
    else {
      return 'Debe indicar previamente el número de clases';
    }
  }
}


