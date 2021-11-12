<?php

//1.
for ($i = 1; $i <=100; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz';
    } else if ($i % 3 === 0) {
        echo 'Fizz';
    } else if ($i % 5 === 0) {
        echo 'Buzz';
    } else {
        echo $i;
    }
    echo '<br>';
}

    echo '<br><br>';

//2.
for ($i = 1; $i <= 10000; $i++) {

    $point = 0;

    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
            $point += 1;
        }
    }


    if ($point == 2) {
        echo $i . "\n";
    } 
    echo '<br>';
}

echo '<br><br>';


