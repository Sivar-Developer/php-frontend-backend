<?php
    // single line comment
    # single line comment
    /*
        Multi line
        Comment
    */

    #VARIABLES
    /*
        - prefix $
        - start with letter or underscore
        - only letters, numbers, underscores
        - Case sensetive
    */

    #DATA TYPES
    /*
        String
        Integer
        Float
        Booleans
        Arrays
        NULL
        Resource
    */
    $_output = 'Hello World!';
    $num1 = 4;
    $num2 = 10;
    $sum = $num1 + $num2;
    $string1 = 'Hello';
    $string2 = 'World!';
    $greeting = $string1 . ' ' . $string2 . '!';
    $greeting2 = "$string1 $string2";
    $string3 = 'They\'re Here';
    $float1 = 4.4;
    $bool = true;

    define('GREETING', 'Hello Everyone', true);

    echo greeting;
    echo GREETING;
    echo $_output;
    echo $sum;
    echo $greeting;
    echo $greeting2;
    echo $string3;