<?php

namespace App\Solution;

function printNumbers($firstNumber)
{
    // BEGIN (write your solution here)
    
    while ($firstNumber > 0) {
        print_r($firstNumber);
        print_r("\n");
        $firstNumber = $firstNumber - 1;
    }
    print_r('finished!');

    // END
}
