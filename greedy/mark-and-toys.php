<?php

// URL: https://www.hackerrank.com/challenges/mark-and-toys

// Determineს the maximum  
// number of gifts Mark can buy
function maximumToys($prices, $k) {

    $res = 0;
    
    // Sort the prices with ascending order 
    // for maximizing the number of toys
    sort($prices);
    
    // Loops through the toys prices
    $cnt = count($prices);
    for ($i = 0;  $i < $cnt;  $i ++) {
        
        // Checks if the amount (left to spend)
        // is more or equal to the current toy
        // price to make the payment for the toy
        if ($k >= $prices[$i]) {
            $k -= $prices[$i];
            $res ++;
        }
        else {
            break;
        }
    }
    return $res;
}

echo maximumToys([1, 12, 5, 111, 200, 1000, 10], 50);
