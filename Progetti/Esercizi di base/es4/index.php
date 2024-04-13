<?php
    //BOOLEANS
    echo PHP_EOL . 'BOOLEANS' . PHP_EOL;
    # $bool = true;
    # $bool = [1];
    $bool = '0';

    if($bool) {
        echo '$bool è true' . PHP_EOL;
    }
    else {
        echo '$bool è false' . PHP_EOL;
    }

    // printing booleans
    $true = true;
    $false = false;

    # quando si stampa qualcosa php effettua un cast a string
    echo "la stampa di \$true vale: $true" . PHP_EOL;
    echo "la stampa di \$false vale: $false" . PHP_EOL;

    # quindi stampare è equivalente a fare questo
    var_dump($true);
    var_dump($false);

    $true = (string)true;
    $false = (string)false;
    var_dump($true);
    var_dump($false);

    //is_bool()
    var_dump( is_bool(0) );
    var_dump( is_bool($true) );     # false perchè è una stringa
    $true = true;
    var_dump( is_bool($true) );

    //INTEGERS
    echo PHP_EOL . 'INTEGERS' . PHP_EOL;

    //basi per integer literals
    $int = 55;
    var_dump($int);
    $int = 0x55;
    var_dump($int);
    $int = 055;
    var_dump($int);
    $int = 0b10;
    var_dump($int);

    //integer overflow
    $max_int = PHP_INT_MAX;
    var_dump($max_int);
    $max_int = PHP_INT_MAX + 1;     # qua eccedo
    var_dump($max_int);             # nota come viene convertito a float

    //casting ad int
    $var = (int)true;
    var_dump($var);
    $var = (int)'45aasd';
    var_dump($var);
    $var = (int)'aaa45sd';
    var_dump($var);

    // is_int()/is_integer()
    var_dump(is_int($var));
    $var = null;
    var_dump(is_int($var));

    //FLOATS
    echo PHP_EOL . 'FLOATS' . PHP_EOL;
    //precisione limitata
    $x = (0.7 + 0.1) * 10;
    echo floor($x) . PHP_EOL;
    echo sprintf("%.20f", $x) . PHP_EOL;      #precisione di 20 cifre decimali

    $x = (0.1 + 0.2) * 10;
    echo ceil($x) . PHP_EOL;
    echo sprintf("%.20f", $x) . PHP_EOL;      #precisione di 20 cifre decimali

    //confronto di floats
    $x = 0.23;
    $y = 1.0 - 0.77;
    var_dump($x, $y);
    if($x == $y) {
        echo 'uguali' . PHP_EOL;
    }
    else{
        echo 'diversi' . PHP_EOL;
    }

    //INF e NAN
    var_dump(log(-1));
    var_dump(PHP_FLOAT_MAX * 2);
    var_dump(is_nan(log(-1)));
    var_dump(is_infinite(PHP_FLOAT_MAX * 2));

    //STRINGS
    echo PHP_EOL . 'STRINGS' . PHP_EOL;
    $stringa = 'sono una stringa';
    var_dump($stringa);
    //vado out of bounds
    # echo $stringa[19] . PHP_EOL;  # errore in lettura
    $stringa[19] = 'C';
    var_dump($stringa);             # padding in scrittura

    //Heredoc
    $stringa = <<<TEXT_ID
    sono del testo 
    in {$stringa}    # non sono un commento, nota però il valore di \$stringa
    "'heredoc'"!
    TEXT_ID;

    echo $stringa . PHP_EOL;
    #per browser
    # echo nl2br($stringa);

    //Nowdoc
    $stringa = <<<'TEXT_ID'
    # identificatore tra apici
    sono del testo 
    in {$stringa}
    "'heredoc'"!
    TEXT_ID;

    echo $stringa . PHP_EOL;
    #per browser
    # echo nl2br($stringa);