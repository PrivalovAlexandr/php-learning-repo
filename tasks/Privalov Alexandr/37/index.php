<?php

// phpcs:disable PSR1.Files.SideEffects

namespace Solution;

require_once "Strings.php";
// BEGIN (write your solution here)
function isPalindrome($word) {
    $reversed = \Strings\reverse($word);
    return $word === $reversed;
}
// END
