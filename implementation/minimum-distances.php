<?php

// URL: https://www.hackerrank.com/challenges/minimum-distances

// Finds the minimum distance between any pair of equal 
// elements in the array. If no such value exists, returns -1 
function minimumDistances($a) {
    
    // Contains distances (min of them is the answer)
    $dist = [];
    
    // Contains indexes as values to calculate 
    // min distance and put it into $dist array
    $dist_v = [];
    
    // Loops through the passed array
    foreach ($a as $key => $val) {
        
        // If the same value is already passed (if $dist_v array contains the
        // current member as a key), calculates its distance to the current $key
        if (array_key_exists($val, $dist_v)) {
            $dist[] = abs($dist_v[$val] - $key);
        } else {
            
            // The current value index will be 
            // saved for future calculations
            $dist_v[$val] = $key;
        }
    }
    
    // If there are no matching elements
    if (!$dist) {
        return '-1';
    }
    
    // Returns minimal found distance
    return min($dist);
}

echo minimumDistances([7, 1, 3, 4, 1, 7]);
