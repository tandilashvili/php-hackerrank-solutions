<?php

// URL: https://www.hackerrank.com/challenges/strange-code

// Finds the value displayed by the counter at time t
function strangeCounter($t) {
    
    $scnt = 3;
    
    // Loops until $scnt is less than $t+2
    while ($t+2 >= $scnt) {
        $scnt *= 2;
    }
       
    // The sum of the number pairs inside the block is 
    // always the same. The sum is less by 2 than 2*$scnt
    return $scnt-$t-2;    
}

echo strangeCounter(5);
