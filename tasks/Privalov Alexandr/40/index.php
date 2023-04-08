<?php

namespace App\Number;

// BEGIN (write your solution here)
function reverse(int $num): int {
  $numStr = (string) abs($num);
  $reversedStr = strrev($numStr);
  $reversed = (int) $reversedStr;
  return $num < 0 ? -$reversed : $reversed;
}
// END
