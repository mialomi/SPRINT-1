<?php

class calcularNota{


    function calcularNota($nota) {
        switch($nota){

            case ($nota >= 6):
                echo "L'alumne és de Primera Divisió.";
            
            case ($nota > 4.5 && $nota < 6):
                echo "L'alumne és de Segona Divisó.";
                
            case ($nota > 3.3 && $nota < 4.5):
                echo "L'alumne és de Tercera Divisó.";
                
            case ($nota < 3.3):
                echo "L'estudiant reprovarà.";
            
        }
    }
}
$nota = 6;
$alumne1 = new calcularNota($nota);
echo $alumne1->calcularNota(6);

?>