<?php

// URL: https://www.hackerrank.com/challenges/maximizing-xor

// Returns an integer representing the 
// maximum XOR value between the numbers
function maximizingXor($min, $max) {

    $res = 0;
    
    // Loops between $min to $max including the numbers
    for ($i = $min;  $i <= $max;  $i ++) {
        
        // Loops between $i's current value and  
        // $max not to repeat already calculations
        for ($j = $i;  $j <= $max;  $j ++) {
            
            // If XOR value of the current pair is greater than 
            // all the previous XORs, then it will be replaced
            if ($res < ($i ^ $j)) {
                $res = $i ^ $j;
            }
        }
    }
    return $res;
}

echo maximizingXor(10, 15);
