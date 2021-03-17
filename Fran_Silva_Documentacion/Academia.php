<?php
require_once 'Profesor.php';  
require_once 'Alumno.php';  

/**
 * @category Clase Academia
 */
class Academia {

	/**
	 * Constante de la clase Academia que da el nombre
	 * 
	 * @var string Nombre de la academia
	 */
	const NOMBRE = "ESCUELA DE BAILE MOVEM"; 

	/** @var array Array de profesores */
	private $profesores=[];

	/** @var array Array de alumnos */
	private $alumnos=[];

	/**
	 * Función que añade un profesor y devuelve un objeto de tipo profesor
	 * 
	 * Función para **añadir** un profesor el cual crea un objeto *de tipo profesor* cuyos parámetros son los que
	 * recibe el método por cabecera. Este objeto lo almacena en el array y devuelve el profesor creado
	 * 
	 * @author Fran Silva
	 * 
	 * @param string $nombre Nombre del profesor
	 * @param string $apellidos Apellidos del profesor
	 * @param int $movil Móvil del profesor
	 * @param string $nif NIF del profesor
	 * 
	 * @return object Objeto profesor
	 */
	function anadirProfesor($nombre, $apellidos, $movil, $nif) {
		$p = new Profesor($nombre, $apellidos, $movil, $nif);
		array_push($this->profesores,$p);
		return $p;
	}

	/**
	 * Función que añade un alumno y devuelve un objeto de tipo alumno
	 * 
	 * Función para **añadir** un alumno el cual crea un objeto $a *de tipo alumno* cuyos parámetros son los que
	 * recibe el método por cabecera. Este objeto lo almacena en el array y devuelve el alumno creado
	 * 
	 * @author Fran Silva
	 * 
	 * @param string $nombre Nombre del alumno
	 * @param string $apellidos Apellidos del alumno
	 * @param int $movil Móvil del alumno
	 * 
	 * @return object Objeto alumno
	 */
	function anadirAlumno($nombre, $apellidos, $movil) {
		$a = new Alumno($nombre, $apellidos, $movil);
		array_push($this->alumnos,$a);
		return $a;
	}
}
?>

