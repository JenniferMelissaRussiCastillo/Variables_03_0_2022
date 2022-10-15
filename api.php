<?php
header('Access-Control-Allow-Origin: *');

$primerNombre="Jennifer";
$nombreCompleto="Jennifer Melissa Russi Castillo";
$edad=32;
$altura= 1.55;
$soyAlumno= true;
$pasaTiempo=["Ver peliculas","viajar"];
$misDirecciones = new stdClass();
$misDirecciones->principal= "Cigarras";
$misDirecciones->secundario= "Cabecera";
$misTelefonos= (object)[];
 

echo $primerNombre;
echo ("<br>"); 
echo $nombreCompleto;
echo ("<br>"); 
echo $edad;
echo ("<br>");
echo $altura;
echo ("<br>");
echo ("Mi pasatiempo es: ".$pasaTiempo[1]);

var_dump ($soyAlumno);
echo ("<br>");


echo $pasaTiempo[1];

var_dump($pasaTiempo);
var_dump($misTelefonos);
var_dump($misDirecciones);
echo ("<br>");
echo "Soy el servisor variables   ".$_SERVER['HTTP_HOST']." gracias por conectarme :)";
?>
