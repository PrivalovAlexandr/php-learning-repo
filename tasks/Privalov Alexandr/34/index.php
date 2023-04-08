<?php

namespace App\Text;

// BEGIN (write your solution here)
function isPalindrome($word) {
    $length = mb_strlen($word);
    $halfLength = ceil($length / 2);
    for ($i = 0; $i < $halfLength; $i++) {
        if (mb_substr($word, $i, 1) !== mb_substr($word, $length - 1 - $i, 1)) {
            return false;
        }
    }
    return true;
}
// END
