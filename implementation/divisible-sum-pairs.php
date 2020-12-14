<?php

// URL: https://www.hackerrank.com/challenges/divisible-sum-pairs

// Returns the integer count of pairs meeting the criteria (the pair 
// must be divisible by $k and the index of the first number must be )
function divisibleSumPairs($n, $k, $ar) {

    // Sets the result initially to 0
    $res = 0;
    
    $cnt = count($ar);
    
    // Loops through the array for the first number of the pair
    for ($i = 0;  $i < $cnt;  $i ++) {
        
        // Loops through the array for the second  
        // member of the pair (starts from $i+1)
        for ($j = $i+1;  $j < $cnt;  $j ++) {
            
            // If the pair is divisible by $k
            if (($ar[$i] + $ar[$j]) % $k == 0) {
                $res ++;
            }
        }
    }
    return $res;
}

echo divisibleSumPairs(6, 3, [1, 3, 2, 6, 1, 2]);
