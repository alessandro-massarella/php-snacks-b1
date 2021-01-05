<!-- PHPSnack 6
Utilizzare questo array: https://pastebin.com/CkX3680A.
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio
e i PM in un rettangolo verde. -->


<!-- collego un file di stile per css -->
<html>
<head>
<title>teachers and pm</title>
<style type="text/css">
    .gray {
        background-color: gray;
    }
    .green {
        background-color: green;
    }
</style>
</head>

<body>
    <?php
    
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];

        // stampo teachers

        echo '<div class="gray">';
        foreach ($db['teachers'] as $teacher) {

            echo  $teacher['name'] . ' ' . ($teacher['lastname'])  .  '<br />';
        }
        echo '</div>';

        // stampo pm
        echo '<div class="green">';
        foreach ($db['pm'] as $single_pm) {

            echo $single_pm['name'] . ' ' . ($single_pm['lastname']) . '<br />';
        }
        echo '</div>'
            
    ?>
</body>
</html>
