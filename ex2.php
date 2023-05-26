<?php
//Imprimeix per pantalla "Hello, World!" utilitzant una variable.

$text = "Hello, World!";

echo $text. "<br>";

//Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.

echo strtoupper($text). "<br>";

//Imprimeix per pantalla la mida (longitud) de la variable.

echo strlen($text). "<br>";

//Imprimeix per pantalla l'string en ordre invers de caràcters.

echo strrev($text). "<br>";

//Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per pantalla la concatenació de tots dos strings.

$text2 = " Aquest és el curs de PHP.";

echo $text . $text2. "<br>";


?>