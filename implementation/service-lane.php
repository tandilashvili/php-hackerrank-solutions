<?php

// URL: https://www.hackerrank.com/challenges/service-lane

// Calculates the maximum size vehicle that can 
// travel that segment of the service lane safely
function serviceLane($width, $cases) {

    $res = [];
    
    // Loops through the cases
    foreach ($cases as $value) {
        
        // Takes the case segment 
        $segment = array_slice($width, $value[0], ($value[1]-$value[0]+1));
        
        // Takes the min value from 
        // the segment as a result
        $res[] = min($segment);
    }
    return $res;
}

print_r(serviceLane(
    [2, 3, 1, 2, 3, 2, 3, 3], 
    [[0, 3], [4, 6], [6, 7], [3, 5], [0, 7]]
));
