<?php

namespace App\Vars;

// BEGIN (write your solution here)
function swap(&$a, &$b): void {
  $temp = $a;
  $a = $b;
  $b = $temp;
}
// END
