<?php

namespace App\Solution;

// BEGIN (write your solution here)
 function calculate($oper, $first, $second) {
    switch ($oper) {
        case '+':
            return $first + $second;
        case '-':
            return $first - $second;
        case '*':
            return $first * $second;
        case '/':
            return $first / $second;
        default:
            return null;
    }
 }
// END
