<?php

namespace App\Solution;

// BEGIN (write your solution here)
    function convertText($str) {
        return $str[0] == ucfirst($str[0]) ? $str : strrev($str);
    }
// END
