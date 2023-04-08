<?php

namespace App\Solution;

// BEGIN (write your solution here)
function joinNumbersFromRange($start, $end) {
  $result = '';
  for ($i = $start; $i <= $end; $i++) {
    $result .= strval($i);
  }
  return $result;
}
// END
