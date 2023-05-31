<?php
include_once "./shape.php";
class Rectangle extends shape{

    public function calcular_area(){
        $resultat = $this -> ample * $this -> alt;

        return $resultat;
    }
}





?>