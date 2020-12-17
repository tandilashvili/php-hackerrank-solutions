<?php

// URL: https://www.hackerrank.com/challenges/priyanka-and-toys

// Returns the minimum number of containers required to ship.
// Each container will contain items weighing within 4 units.
function toys($w) {
    
    // For the first container with  
    // weight range: first toy weight + 4
    $res = 1;

    // Sorts the toys weights to put 
    // into approptiate containers
    sort($w);
    
    // $num + 4 is the first container weight range
    $num = $w[0];
    
    // Loops through the toys weights
    $cnt = count($w);
    for ($i = 0;  $i < $cnt;  $i ++) {
        
        // If the toy weight does not fit to 
        // the current container weight range 
        // then it needs another container
        if ($w[$i] > $num + 4) {
            $res ++;
            $num = $w[$i];
        }
    }
    return $res;
}

echo toys([1, 2, 3, 21, 7, 12, 14, 21]);
