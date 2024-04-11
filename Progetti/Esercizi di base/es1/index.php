<?php
    //echo vs print
    echo "Hello world!\r\n";
    echo print "Hello world!\r\n";
    echo "\r\ncon ", 'echo ', 'posso ', 'fare ', "questo\r\n";

    //escaping -> '
    echo 'escaping \' ';
    echo "\r\n";
    echo "not escaping \'\r\n";

    //andare a capo
    echo "vado a capo \r\n";
    echo 'non vado a capo \r\n';
    echo "\r\n";

    //assegnamento variabili
    $name = 'kevin';
    echo $name;
    echo "\r\n";
    $_123variabile = "inizio con dei numeri";
    echo $_123variabile;
    echo "\r\n";

    //stampa variabili
    echo "$name";
    echo "\r\n";
    echo '$name';
    echo "\r\n";

    //concatenazione
    echo "concateno " . "stringhe " . $name . "\r\n";

    //sintassi leggibile per variabili dentro stringhe
    echo "sintassi alternativa per variabili {$name}\r\n";

    //variabili assegnate per valore a default
    $x = 3;
    $y = $x;

    echo "y prima $y\r\n";
    $x = 10;
    echo "y dopo $y\r\n";

    //variabili assegnate per riferimento
    $x = 3;
    $y = &$x;

    echo "y prima $y\r\n";
    $x = 10;
    echo "y dopo $y\r\n";


