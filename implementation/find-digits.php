<?php

// URL: https://www.hackerrank.com/challenges/find-digits

// Counts the number of divisors occurring within the integer
function findDigits($n) {

    $res = 0;
    $n_s = (string)$n;
    
    // Assigns digits count
    $strl = strlen($n_s);
    
    // Loops through the number digits count
    for ($i = 0;  $i < $strl;  $i ++ ) {
        
        // Checks if the digit is greater than 0
        if ($n_s[$i]) {
            
            // Checks if the number is  
            // divisible by the digit 
            if(!($n % intval($n_s[$i]))) {
                $res ++;
            }
        }
    }    
    return $res;
}

echo findDigits(1012);