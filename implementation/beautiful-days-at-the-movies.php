<?php

// URL: https://www.hackerrank.com/challenges/beautiful-days-at-the-movies

// Determines the number of days in the range that are beautiful
function beautifulDays($i, $j, $k) {
    
    $res = 0;
    
    // Loops through the days
    for (;  $i <= $j;  $i ++) {
        
        // Calculates whether the day is beautiful or not
        if ((($i - intval(strrev((string)$i))) % $k) == 0) {
            $res ++;
        }
    }
    return $res;
}

echo beautifulDays(20, 23, 6);
