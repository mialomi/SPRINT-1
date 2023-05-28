<?php

/*Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el resultat de:

La intersecció dels dos arrays (nombres en comú)
La mescla dels dos arrays*/

$llista1 = [11, 2.2, 33, 44, 55, 6.6, 77, 88, 9.9];
$llista2 = [1.1, 2.2, 3.3, 44, 5.5, 6.6, 77, 8.8, 9.9];

$matches = array_intersect($llista1, $llista2);
print_r($matches);






?>