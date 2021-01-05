<!-- PHPSnack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un
nuovo paragrafo. -->

<?php

$la_luisona = 'Al bar Sport non si mangia quasi mai. C’è una bacheca con delle paste, ma è puramente
coreografica. Sono paste ornamentali, spesso veri e propri pezzi d’artigianato. Sono lì da anni,
tanto che i clienti abituali ormai le conoscono una per una. Entrando dicono: La meringa è un
po’ sciupata oggi. Sarà il caldo. Oppure: E’ ora di dar la polvere al krapfen. Solo, qualche
volta, il cliente occasionale osa avvicinarsi al banco di queste paste. Una volta, ad
esempio, entrò un rappresentante di Milano. Aprì la bacheca e si mise in bocca una grande
pasta bianca e nera. Subito nel bar si sparse la voce: Hanno mangiato la Luisona!';


// var_dump($la_luisona);

// uso la funzione explode per creare un array con i vari paragrafi, utilizzando il punto
$la_luisona_arr = (explode(".", $la_luisona));

// var_dump($la_luisona_arr);

// uso un ciclo foreach per stampare i paragrafi (ogni elemento dell'array e' un paragrafo)

echo '<h1>' . 'La Luisona' . '</h1>';

foreach ($la_luisona_arr as $paragrafo) {
    echo '<p>' . ($paragrafo) . '.' . '</p>'; 
}

?>