<?php

namespace App\Solution;

function invertCase($text)
{
    // BEGIN (write your solution here)
    $result = '';
    $length = mb_strlen($text);
    for ($i = 0; $i < $length; $i++) {
        $char = mb_substr($text, $i, 1);
        $upperChar = mb_strtoupper($char);
        if ($char === $upperChar) {
        $result .= mb_strtolower($char);
        } else {
        $result .= $upperChar;
        }
    }
    return $result;
    // END
}
