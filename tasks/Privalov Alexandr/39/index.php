<?php

namespace App\Solution;

// BEGIN (write your solution here)
use function App\Symbols\isVowel;

function countVowels($string) {
    $count = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (isVowel($string[$i])) {
            $count++;
        }
    }
    return $count;
}

// END
