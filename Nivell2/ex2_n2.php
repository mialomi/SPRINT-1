<?php


$classA_Maths = array(
    "Marc" => array(8, 5, 7, 6, 9),
    "Beth" => array(6, 5, 4, 6, 6),
    "Peter" => array(4, 5, 3, 5, 4),
    "Liz" => array(8, 8, 10, 9, 9),
    "Ana" => array(6, 5, 7, 6, 6),
    "Cindy" => array(7, 8, 5, 9, 8),
    "Yasmin" => array(3, 4, 3, 4, 4),
    "Cinthia" => array(7, 8, 6, 5, 6),
    "David" => array(6, 5, 4, 5, 4)
);
/*print_r ($classA_Maths)."<br>";
foreach($classA_Maths as $student => $marks);
    /*echo $alumne. ": <br>";
    foreach($notas as $nota)
    echo $nota. "<br>"; }*/


function average_student($class) {
    $average = array();
    foreach($class as $student => $marks){
        $average_student = array_sum($marks) / count($marks);
        $average[$student] = $average_student;}

    return $average;}

function average_class($class) {
    $sumClass = array();

    foreach($class as $student => $marks){
       $sumClass = array_merge($sumClass, $marks);}

    $averageClass = array_sum($sumClass) / count($sumClass);

    return $averageClass;}


$averagexStudent = average_student($classA_Maths);
foreach($averagexStudent as $student => $averageStudent){
    echo $student . ": " . $averageStudent . "<br>";}


$averageClassM = average_class($classA_Maths);
echo "The average of this class is: ". $averageClassM;


?>