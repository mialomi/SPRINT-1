<?php
//Fes un programa que implementi una funció on es compti fins a un nombre determinat. Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). El compte s’ha de mostrar per pantalla pas per pas.

function contador($valor_defecto = 10, $metodo = 1){


    for($i = 1; $i <= $valor_defecto; $i += $metodo) { 
        echo $i;

    }
    echo $i;
}
echo contador(20, 2);



?>