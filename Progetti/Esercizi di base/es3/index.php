<?php
    # declare(strict_types=1);

    $boolean = false;
    $stringa = "stringa bella";

    echo gettype($boolean) . PHP_EOL;
    var_dump($boolean);
    echo gettype($stringa) . PHP_EOL;
    var_dump($stringa);

    //type hinting e coercion
    function sum(int $x, int $y) {
        echo "Sommo $x e $y" . PHP_EOL;
        var_dump($x, $y);

        return $x + $y;
    }

    $sum = sum(2, '3');     # nota come passo una stringa ed essa viene convertita automaticamente
    echo $sum . PHP_EOL;
    var_dump($sum);

    //casting
    $intero = (int)'10';
    echo $intero . PHP_EOL;
    # nota come questo cast non fallisce mentre la coercion si
    $intero = 3 + (int)'ciao';
    echo $intero . PHP_EOL;
    #$intero = 1 + 'ciao';
    #echo $intero . PHP_EOL;