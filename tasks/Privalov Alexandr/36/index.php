<?php

// phpcs:disable PSR1.Files.SideEffects

// BEGIN (write your solution here)
require_once 'src/Strings.php';

function isPalindrome($word) {
    $reversed = reverse($word);
    return $word === $reversed;
}

// END
