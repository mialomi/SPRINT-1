<?php

//Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

/*Condicions:

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.*/

function verificar_alumne($nota){

//$nota1 = ($nota * 10) /100;

if($nota >= 60){
    echo "L'alumne és de Primera Divisió.";}
elseif($nota >= 45 or $nota <= 59){
    echo "L'alumne és de Segona Divisó.";}
elseif($nota >= 33 or $nota <=44){
    echo "L'alumne és de Tercera Divisó.";}
else{
    echo "L'estudiant reprovarà.";
}
}

verificar_alumne(6,8);


?>