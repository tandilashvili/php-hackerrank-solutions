<?php

// URL: https://www.hackerrank.com/challenges/between-two-sets

// Returns the number of integers that მeets the given conditions
function getTotalX($a, $b) {
    
    $res = 0;
    $num = 0;
    
    $a_max = max($a);
    $b_min = min($b);
    
    // If max($a) is greater than min($b)
    // there will not be any such number
    if($b_min < $a_max) {
        return 0;
    }
    
    // Loops through numbers starting from the max value of $a to 
    // the min value of $b incrementing by the max($a) to find the 
    // minimal number that is evenly divisible by all members of $a
    for ($i = $a_max;  $i <= $b_min;  $i +=$a_max) {
        
        $rems = 0;
        
        // Calculates the sum of remainders by dividing 
        // the current number on all $a elements
        foreach ($a as $item) {
            $rems += $i % $item;
        }
        
        // If sum of the remainders is equal to 0, then the number  
        // is found, that is evenly divisible by all members of $a
        if(!$rems) {
            $num = $i;
            break;
        }
    }
    
    // Loops through the numbers starting from the 
    // number found by the previous loop, to the min($b)
    for ($i = $num;  $i <= $b_min;  $i +=$num) {
        
        $rems = 0;
        
        // Calculates the sum of remainders by dividing 
        // all $b array elements on the current number
        foreach ($b as $item) {
            $rems += $item % $i;
        }
        
        // If sum of the remainders is 0, 
        // then the desired number is found
        if(!$rems) {
            $res ++;
        }
    }
    return $res;
}

echo getTotalX([2, 6], [24, 36]);
