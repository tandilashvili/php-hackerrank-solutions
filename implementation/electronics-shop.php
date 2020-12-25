<?php

// URL: https://www.hackerrank.com/challenges/electronics-shop

// Finds the optimal cost to buy the two items. If  
// it is not possible to buy both items, returns -1
function getMoneySpent($keyboards, $drives, $b) {
    
    $b_max = -1;
    
    $cnt_k = count($keyboards);
    $cnt_d = count($drives);
    
    // Loops through $keyboards
    for ($i = 0;  $i < $cnt_k;  $i ++) {
        
        // Loops through $drives
        for ($j = 0;  $j < $cnt_d;  $j ++) {
            
            // Calculates the sum of prices of the current pair
            $sum = $keyboards[$i] + $drives[$j];
            
            // If the price of the current pair is more 
            // closer (but no more) to allowed cost ($b)
            if ($sum <= $b  &&  $sum > $b_max) {
                $b_max = $sum;
            }   
        }
    }
    return $b_max;
}

echo getMoneySpent([3, 1], [8, 2, 5], 10);
