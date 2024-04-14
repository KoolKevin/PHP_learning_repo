<?php
    //null
    echo '--- Null ---' . PHP_EOL;
    //null constant
    $x = null;
    var_dump(is_null($x));
    var_dump($x === null );

    //undefined
    var_dump(is_null($y));

    //unset
    $y = 123;
    var_dump($y);
    unset($y);
    var_dump($y);

    //arrays
    echo '--- Arrays ---' . PHP_EOL;
    $array = [];
    print_r($array);
    $array = array(1, '2', 3);
    print_r($array);

    $campo_non_definito = $array[3];
    var_dump($campo_non_definito);
    var_dump(isset($array[3]));

    //push e pop
    $array[] = '4';
    print_r($array);
    array_push($array, 5, 6);
    print_r($array);

    var_dump(array_pop($array));
    print_r($array);

    //array_associativi
    $array_associativo = [
        'php' => 8.2,
        'python' => 3.9
    ];

    print_r($array_associativo);

    //aggiungo elementi ad indici che non esistevano
    $array[10] = 10;
    $array['undici'] = '11';
    var_dump($array[10]);
    print_r($array);
    $array_associativo['dieci'] = 10;
    var_dump($array_associativo['dieci']);
    print_r($array_associativo);

    //array multidimensionali
    $persone = [        # nota che se non specifico una chiave php ne assegna una con 0-base indexing
        [
            'nome' => 'kevin',
            'cognome' => 'koltraka',
            'età' => 23
        ],
        [
            'nome' => 'frank',
            'cognome' => 'roffia',
            'età' => 23,
            'hobbies' => [
                'gaming',
                'eating'
            ]
        ]
    ];

    echo $persone[1]['hobbies'][0] . PHP_EOL;

    // key override, true -> 1; 1.8 -> 1
    $array = [true => 'a', 1 => 'b', '1' => 'c', 1.8 => 'd'];
    print_r($array);

    //chiave null
    $array = [null => 'sono null'];     # la chiave null subisce un cast a -> ''
    print_r($array);
    echo $array['' /* oppure direttamente null*/] . PHP_EOL;

    //automatic indexing
    $array = ['a', 'b', 50 => 'c', 'd'];
    print_r($array);    # d ha indice 51

    //array_shift e reindexing
    $array = ['a', 'b', 50 => 'c', 'chiave' => 'd'];
    var_dump(array_shift($array));
    print_r($array);    # nota c a indice 1 invece che 50

    //unset e mancanza di reindexing
    unset($array[0], $array[1], $array['chiave']);
    print_r($array);
    $array[] = 'nuovo valore';
    print_r($array);    # nota indice 2

    //isset e array_key_exists
    $array = ['a' => 1, 'b' => null];
    var_dump(array_key_exists('b', $array));    # true
    var_dump( isset($array['b']) );             # false