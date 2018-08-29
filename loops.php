<?php
    #LOOPS - Execute code set number of times

    /*
        For
        While
        Do..while
        Foreach
    */

    # For loop
    # @params - init, condition, inc

    //  for($i = 3; $i <= 10; $i++) {
    //      echo 'Number ' . $i;
    //      echo '<br>';
    //  }

    # While loop
    # @params - condition

    // $i = 0;
    // while($i < 10) {
    //     echo $i;
    //     echo '<br>';
    //     $i++;
    // }

    # Do..while
    # @params - condition

    // $i = 0;
    // do {
    //     echo $i;
    //     echo '<br>';
    //     $i++;
    // } while ($i < 10);


    # Foreach loop - for arrays
    //$people = array('Sivar', 'Sivan', 'Savan');
    //foreach($people as $person) {
    //    echo $person;
    //    echo '<br>';
    //}

    $people = array('Sivar' => 'sivar@example.com', 'Sivan' => 'sivan@example2.com', 'Savan' => 'savan@example3.com');
    foreach($people as $person => $email) {
        echo $person. ': ' .$email;
        echo '<br>';
    }
    