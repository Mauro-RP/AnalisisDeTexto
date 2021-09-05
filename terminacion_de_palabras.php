<?php
/* Alumnos: Prieto, Mauro  --- Quartero, Nicolas
Dado un texto y una letra por medio de un programa HTML, 
se desea determinar la cantidad de palabras terminadas en esa letra.*/

$texto = strtoupper($_GET['texto']);
$letra = strtoupper($_GET['letra']);

$cont=0;
$cant = strlen($texto);
//echo "<br>cantidad de caracteres: ",$cant;
$pos = strpos($texto, $letra);
echo "<br>caracter: ",$_GET['letra'];

for ($i=1; $i < $cant; $i++) 
{ 
	if ($texto[$i-1]==$letra and $texto[$i]== " ") 
	{
		$cont += 1;
	}
}

echo "<br> contador:",$cont;
echo "<br>Cantidad de palabras terminadas en ",$letra," son: ", $cont;

?>