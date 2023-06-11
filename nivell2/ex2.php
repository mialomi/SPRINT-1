<?php

/*Prograna que permeti fer calculs de total de compres*/

function candyShop() {

    $unitC = 3;
    $unitG = 2;
    $unitCar = 2;

    function choco($unitC) {
        $subChoco = $unitC * 1;
        return $subChoco;}

    function gum($unitG) {
        $subGum = $unitG * 0.50;
        return $subGum;}

    function caramel($unitCar){
        $subCar = $unitCar * 1.50;
        return $subCar;}
    
$subChoco = choco($unitC);
$subGum = gum($unitG);
$subCar = caramel($unitCar);


$total = $subChoco + $subGum + $subCar;
return $total;

}



echo "<h2> CANDY SHOP </h2> <br> 
Total amount: " . candyShop(). " € <br> Thank you!";



?>