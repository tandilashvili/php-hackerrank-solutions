<?php

// URL: https://www.hackerrank.com/challenges/lonely-integer
/*
// Finds the unique element in an array of integers
function lonelyinteger($a) {
    
    // Loops through the numbers
    foreach ($a as $item) {
        
        // If the number already exists in the 
        // array, increase its value by one
        if (isset($occ[$item])) {
            $occ[$item] ++;
        } else {
            // First occurence of the number 
            $occ[$item] = 1;
        }
    }
    
    // Returns the index of value "1"
    // the number that has one occurence
    return array_search(1, $occ);
}
//*/


// Finds the unique element as the 
// function above but without loops
function lonelyinteger($a) {
    
    // Counts all the values of an array
    $values = array_count_values($a);
    
    // Returns the index of value "1"
    // the number that has one occurence
    return array_search(1, $values);
}

echo lonelyinteger([1, 2, 3, 4, 3, 2, 1]);
