<?php

$X = 32;
$Y = 65;
$N = 72.8;
$M = 12.25;

echo $X ."<br>". $Y ."<br>";

//suma, resta, multiplciació i mòdul

echo $X + $Y . "<br>";
echo $X - $Y. "<br>";
echo $X * $Y. "<br>";
echo $X % $Y. "<br>";

//per N i M

echo $N + $M. "<br>";
echo $N - $M. "<br>";
echo $N * $M. "<br>";
echo $N % $M. "<br>";

//Per a totes les variables (X, Y, N, M):
//El doble de cada variable.

echo $X * $X. "<br>";
echo $Y * $Y. "<br>";
echo $N * $N. "<br>";
echo $M * $M. "<br>";

//La suma de totes les variables.

echo $X + $Y + $N + $M. "<br>";

//El producte de totes les variables.

//b) Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres

function calculadora($valor1, $valor2, $operacio){

switch ($operacio){
    case 'sumar':
        $resultat = $valor1 + $valor1;
        break;
    case 'restar':
        $resultat = $valor1 - $valor1;
        break;
    case 'multiplicar':
        $resultat = $valor1 * $valor2;
        break;
    case 'divisio':
        $resultat = $valor1 / $valor2;
        break;
    }
return $resultat;


}


echo calculadora(32, 12, 'sumar');
echo "HOLA MUNDO";


?>