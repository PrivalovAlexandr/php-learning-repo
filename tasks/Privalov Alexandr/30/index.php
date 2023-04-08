<?php

namespace App\Solution;

// BEGIN (write your solution here)
function isArgumentsForSubstrCorrect($str, $index, $length) {
  if ($length < 0) {
    return false;
  }
  
  if ($index < 0) {
    return false;
  }
  
  if ($index > strlen($str)-1) {
    return false;
  }
  
  if ($index + $length > strlen($str)) {
    return false;
  }
  
  return true;
}
// END
