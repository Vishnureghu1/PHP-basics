<?php
    $number = 100;

    for ($i = 100; $i >=2; $i--) {
        $isPrime = 1;

        for ($j = 2; $j <= ceil($i/2); $j++) {
            if ($i % $j === 0) {
                $isPrime = 0;
                break;
            }
        }

        if ($isPrime === 1) {
            echo 'Last prime number is: '.$i;
            break;
        }
    }

?>