<?php

namespace App\Solution;

// BEGIN (write your solution here)
function isLeapYear($year) {
    return (($year % 400) == 0) OR ((($year % 4) == 0) && (($year % 100) != 0));
}
// END
