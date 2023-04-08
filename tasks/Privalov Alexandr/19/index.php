<?php

namespace App\Solution;

// BEGIN (write your solution here)
    function getCurrentYear() {
        $date = date('Y-m-d');
        return (int) substr($date, 0, 4);
    }
// END
