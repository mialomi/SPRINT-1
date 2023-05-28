<?php

/*Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.*/

$llistat = array("dilluns", "dimarts", "dimecres", "dijous", "divendres");
$s = "s"; //"e";

function trobar_valor($llistat, $s){

foreach($llistat as $caracter){
    if(strpos($caracter, $s) === false){
        return "FALSE";
    } 
    
}
return "TRUE";

}

echo trobar_valor($llistat, $s);






?>