<?php

// URL: https://www.hackerrank.com/challenges/sherlock-and-squares

/*
// Returns an integer representing the number of 
// square integers in the inclusive range from $a to $b
function squares($a, $b) {

    $res = 0;
    
    $min = floor(sqrt($a));
    $max = ceil(sqrt($b));
    
    // Loops from sqrt($a) to sqrt($b)
    for ($i = $min;  $i <= $max;  $i ++) {
        
        // Calculates the square of the number
        $m = $i * $i;
        
        // Checks if square of the current  
        // number is between the passed numbers
        if ($m >= $a  &&  $m <= $b) {
            $res ++;
        }
    }
    return $res;
}
*/

// Returns an integer representing the number of 
// square integers in the inclusive range from $a to $b
// The same as the function above, but without using loops
function squares($a, $b) {

    $min = ceil(sqrt($a));
    $max = floor(sqrt($b));
    
    // Result is the difference between $max and $min, 
    // plus 1, because we ceil the result of sqrt($a)
    return $max - $min + 1;
}

echo squares(3, 9);
