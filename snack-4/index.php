<!-- PHPSnack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non
dovrà contenere lo stesso numero più di una volta -->

<?php

$random_numbers = [];

var_dump($random_numbers);




$i = 1;
while ($i <= 15) {
    // creo una variabile in cui inserire di volta in volta il numero random
    $random_number = rand(1, 15);

    if (!in_array($random_number, $random_numbers)) {
        
        $random_numbers [] = $random_number;
        
        $i++;
    } 

}

var_dump($random_numbers);


?>