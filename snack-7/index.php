<!-- PHPSnack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni
alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$students = [
    [
        'name' => 'Peter',
        'surname' => 'Clemenza',
        'votes' => [
            'mathematics' => 5,
            'history' => 6,
            'geography' => 8,
            'literature' => 7 
        ]
    ],
    [
        'name' => 'Emilio',
        'surname' => 'Barzini',
        'votes' => [
            'mathematics' => 4,
            'history' => 8,
            'geography' => 6,
            'literature' => 9 
        ]
    ],
    [
        'name' => 'Luca',
        'surname' => 'Brasi',
        'votes' => [
            'mathematics' => 2,
            'history' => 6,
            'geography' => 3,
            'literature' => 9 
        ]
    ],
    [
        'name' => 'Carmela',
        'surname' => 'Tattaglia',
        'votes' => [
            'mathematics' => 9,
            'history' => 9,
            'geography' => 9,
            'literature' => 8 
        ]
    ]
];

// var_dump($students);
$somma;
foreach ($students as $key => $value) {

    $voto = $value['votes'];
    // var_dump($voto);

    $somma = array_sum($voto);
    // var_dump($somma);
    
    $media = $somma/count($value['votes']);
    // var_dump($media);
    
    
    echo $value['name'] . ' ' . $value['surname'] . ' - ' . 'Media Voto:' . ' ' . $media . '<br />';




}



?>





<!-- // calcolo la media voti di ogni studente
    $somma += $student['votes'];
    $media = $somma/count($student['votes']);
    var_dump($somma);


    var_dump($student['votes']);

        // echo $student['name'] . ' ' . $student['surname'] . $media . '<br />';

        // var_dump($somma);
 -->


