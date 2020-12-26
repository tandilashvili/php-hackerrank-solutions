<?php

// URL: https://www.hackerrank.com/challenges/chocolate-feast

// Returns the number of chocolates Bobby can eat 
// after taking full advantage of the promotion
function chocolateFeast($n, $c, $m) {

    // Calculates the initial chocolates that he bought. After
    // the purchase he received the same amount of $wrapper
    $res = $wrapper = floor($n / $c);
    
    // Loops until he can exchange wrappers to a chocolate
    while ($wrapper > 0) {
        
        // If his wrappers are enough to exchange to a chocolate
        if ($m <= $wrapper) {
            $wrapper -= $m;
            $wrapper ++;
            $res ++;
        } else {
            // Stops the loop, wrappers are not enough
            $wrapper = 0;
        }
    }
    return $res;
}

echo chocolateFeast(10, 2, 5);
