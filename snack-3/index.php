<!-- PHPSnack 3 -->
<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in
questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di
post associati a quella data.
Stampare ogni data con i relativi post.

Qui l’array di esempio:
https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts= [
    '01-01-2021' => [
        [
            'title' => 'post1',
            'author' => 'Alessandro Massarella',
            'text' => 'lorem testo 1'
        ]
    ],
    '02-01-2021' => [
        [
            'title' => 'post2',
            'author' => 'Alessandro Massarella',
            'text' => 'lorem testo 2'
        ],
        [
            'title' => 'post3',
            'author' => 'Alessandro Massarella',
            'text' => 'lorem testo 3'
        ],
    ],
    '03-01-2021' => [
        [
            'title' => 'post4',
            'author' => 'Alessandro Massarella',
            'text' => 'lorem testo 4'
        ],
        [
            'title' => 'post5',
            'author' => 'Alessandro Massarella',
            'text' => 'lorem testo 5'
        ],
        [
            'title' => 'post6',
            'author' => 'Alessandro Massarella',
            'text' => 'lorem testo 6'
        ],
    ],
    '04-01-2021' => [
        [
            'title' => 'post7',
            'author' => 'Alessandro Massarella',
            'text' => 'lorem testo 7'
        ]
    ]
];




// uso ciclo foreach
foreach ($posts as $key => $value) {

    foreach ($value as $single_post) {
        echo '<h4>' . ($key) . ':'. '</h4>' . '<p>' . (($single_post)['text']) . '</p>';
    }

};



?>