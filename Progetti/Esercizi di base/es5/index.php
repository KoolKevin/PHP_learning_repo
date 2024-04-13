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