<?php

namespace App\Solution;

// BEGIN (write your solution here)
function normalizeUrl($url) {
    if (strpos($url, 'https:') === 0) {
        return $url;
    } else if (strpos($url, 'http:') === 0) {
        return 'https' . substr($url, 4);
    } else {
        return 'https://' . $url;
    }
}
// END
