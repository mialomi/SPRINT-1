<?php


/*
- Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. 
- Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). 
 - Mostra per última vegada la mida de l’array.*/

$X = array (10, 20, 30, 40, 50, 60);

echo count($X). "<br>";
unset($X[3]);
//var_dump($X). "<br>";
$X = array_values($X);
//var_dump($X). "<br>";
echo count($X). "<br>";


?>