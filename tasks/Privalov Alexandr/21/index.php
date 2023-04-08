<?php

namespace App\Solution;

// BEGIN (write your solution here)
    function getHiddenCard($card, $hide = 4) {
        return str_repeat('*', $hide) . substr($card, -4);
    }
// END
