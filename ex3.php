<?php



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