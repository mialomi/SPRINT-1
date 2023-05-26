<?php

//Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla/

$number = 1988;
$decimal = 1.988;
$text = "This is a String.";
$option = true;

echo $number."<br>";
echo $decimal ."<br>";
echo $text ."<br>";
echo $option ."<br>";

//Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.

define("NAME", "Mia");
echo NAME ."<br>";
echo "<h1>". NAME ."</h1>" ."<br>";

?>