<?php

//ejemplo de uso
require_once 'Academia.php'; 

$a = new Academia();
$profe = $a->anadirProfesor("Laura", "Varela Ferreiro", '696999999','12345678A');
$profe->anadirBaile("SAMBA");
$profe->anadirBaile("HIP HOP");
$profe->anadirBaile("Tango",12);
$profe->anadirBaile("Tango",12);

echo '<br/>PROFESOR: ' . $profe->verInformacion();
echo '<br/>SUELDO: ' . $profe->calcularSueldo(10);
echo '<br/>IMPARTE CLASE DE: '. $profe->getBailes();

$alu1 = $a->anadirAlumno("Uxia", "Loureiro Agra", "699666999");
echo '<br/>ALUMNO: '. $alu1->verInformacion();
$alu1->setNumClases(2);
echo '<br/>A PAGAR: '.$alu1->aPagar(2);

$alu2 = $a->anadirAlumno("Manuel", "Abel Prado", "699666999");
echo '<br/>ALUMNO: '. $alu2->verInformacion();
echo '<br/>A PAGAR: '.$alu2->aPagar(2);

echo '<br/>PROFESOR: '. $profe->verInformacion();
echo '<br/>SUELDO: '.$profe->calcularSueldo(10);
$profe->eliminarBaile("Tango");
echo '<br/>IMPARTE CLASE DE: '. $profe->getBailes();

?>
