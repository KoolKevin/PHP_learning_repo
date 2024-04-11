<?php
    //costanti
    $var = "sono una variabile";
    $var = "cambio valore";
    echo "$var\r\n";

    define("COSTANTE", "sono una costante");
    echo COSTANTE . "\r\n";

    //controllo se una costante è stata definita o meno
    echo defined("COSTANTE") . "\r\n";
    echo defined("COSTANTE_NON_DEFINITA") . "\r\n";
    # define("COSTANTE", "cambio valore?");

    //sintassi alternativa per definizione di costanti
    const COSTANTE2 = "sono una costante2";
    echo COSTANTE2 . "\r\n";

    //differenze tra i due metodi
    if(true) {
        define("COSTANTE_DINAMICA", "sono stata creata a runtime");
        # const COSTANTE_DINAMICA = "sono stata creata a runtime?");
    }

    echo COSTANTE_DINAMICA . "\r\n";

    //nome dinamico di costante
    $suffisso = "EPICA";
    define("COSTANTE_" . $suffisso, "sono una costante con un nome dinamico");
    # l'IDE giustamente non riconosce questo nome, perché sarà definito solo a runtime
    echo COSTANTE_EPICA . "\r\n";

    //costanti predefinite
    echo PHP_INT_SIZE, PHP_EOL, PHP_INT_MAX, PHP_EOL, PHP_FLOAT_EPSILON, PHP_EOL;

    //costanti magiche
    echo __LINE__ . PHP_EOL;
    echo __LINE__ . PHP_EOL;
    echo __FILE__ . PHP_EOL;

    //variable variables
    $foo = "bar";
    $$foo = "baz";      # equivalente a prendere il valore di foo e fare: $bar = "baz";

    echo $foo . " " . $$foo . PHP_EOL;
    # oppure così; anche qua $bar viene definita solo a runtime come per le costanti con define()
    echo $foo . " " . $bar . PHP_EOL;

    //stampa di variable variables
    echo "$foo, $$foo" . PHP_EOL;         # così non funziona
    echo "$foo, {$$foo}" . PHP_EOL;
    echo "$foo, {${$foo}}" . PHP_EOL;

    # poss andare avanti quanto voglio a definire variable variables
    $$$foo = "zab";
    echo "$foo, {$$foo}, {$$$foo}" . PHP_EOL;
