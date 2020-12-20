<?php

// URL: https://www.hackerrank.com/challenges/greedy-florist

function getMinimumCost($k, $c) {

    $res = 0;
    
    // Sets 0 initially for each friend's 
    // purchases count from the beginning
    for($i = 0; $i < $k; $i++) {
        $purchases[$i] = 0;
    }
        
    // Starts purchasing with the most expensive flower
    rsort($c);
    
    $cnt = count($c);
    for($i = 0; $i < $cnt; $i++){
        
        // Purchases the current flower
        $res += $c[$i] * ($purchases[$i%$k] + 1);
        
        // Next time this person will buy the flower with
        // increased price: ((n)th purchase + 1) * price
        $purchases[$i%$k]++;
    }    
    return $res;
}

echo getMinimumCost(3, [1, 3, 5, 7, 9]);
