<?php
echo "Empleado/a 1";
echo "<br>";
$Empleado1 = array('Nombre'=>'Alfredo', 'Apellido'=>'Morales', 'Cedula'=>'25907640',
'Sueldo'=>'25$', 'Departamento'=>'Area de Sistemas', 'Lugar de trabajo'=>'Sala de computacion 4');

foreach($Empleado1 as $clave=>$dato)
{
echo  $clave . ": " . $dato;
echo "<br>";
 }
 echo "<br>";
 echo "Empleado/a 2";
 echo "<br>";
 $Empleado2 = array('Nombre'=>'Leonel', 'Apellido'=>'Morales', 'Cedula'=>'20379661',
'Sueldo'=>'100$', 'Departamento'=>'Area de Mantenimiento de Aeronáutica', 'Lugar de trabajo'=>'Hangar 2');

foreach($Empleado2 as $clave=>$dato)
{
echo  $clave . ": " . $dato;
echo "<br>";
 }
 echo "<br>";
 echo "Empleado/a 3";
 echo "<br>";
 
 $Empleado3 = array('Nombre'=>'Liliana', 'Apellido'=>'Villalobos', 'Cedula'=>'9759530',
 'Sueldo'=>'30$', 'Departamento'=>'Area de Finanzas', 'Lugar de trabajo'=>'Oficina 9');
 
 foreach($Empleado3 as $clave=>$dato)
 {
 echo  $clave . ": " . $dato;
 echo "<br>";
  }
?>