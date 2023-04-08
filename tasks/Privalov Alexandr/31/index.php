<?php

namespace App\Solution;

// BEGIN (write your solution here)
function sumOfSeries($start, $end) {
  $sum = 0;
  for ($i = $start; $i <= $end; $i++) {
    $sum += $i;
  }
  return $sum;
}
// END
