<?php

/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().*/

abstract class shape{
    protected $ample = 0;
    protected $alt = 0;

    public function __construct($ample, $alt){
        $this -> ample = $ample;
        $this -> alt = $alt;
    }

    public function getAmple(){
        return $this -> ample;
    }
    public function getAlt(){
        return $this -> alt;
    }

   public abstract function calcular_area();
}

?>