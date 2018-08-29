<?php

    #ARRAY - Variables that hold multiple data
    /*
    Array types
        - Indexed
        - Associative
        - Multi-dimensional
    */

    // Indexed
    $people = array('Sivar', 'Savan', 'Sivan');
    $ids = array(23, 55, 12);
    $cars = ['Honda', 'Toyota', 'Ford'];
    $cars[3] = 'BMW';
    $cars[] = 'Camaro';

    // echo count($cars);
    // echo $people[0];
    // echo $ids[2];
    //echo $cars[4];
    // print_r($cars);
    //var_dump($cars);

    // Associative arrays
    $people = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
    $people['Jill'] = 42;
    $ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

    // echo $people['Brad'];
    // echo $ids[22];
    // print_r($people);
    // var_dump($people);

    // Multi-dimensions
    $cars = array(
        array('Honda', 22, 23),
        array('BMW', 22, 23),
        array('TOYOTA', 22, 23)
    );

    echo $cars[1][2];