<?php

// URL: https://www.hackerrank.com/challenges/migratory-birds

/*
// Returns the lowest type number of 
// the most frequently sighted bird.
function migratoryBirds($arr) {
    
    $res_a = [];
    $cnt = count($arr);
    
    // Assigns 0 to each type
    for ($i = 1;  $i < 6;  $i ++) {
        $res_a[$i] = 0;
    }
    
    // Counts occurrences of each values
    for ($i = 0;  $i < $cnt;  $i ++) {
        $res_a[$arr[$i]] ++;
    }
    
    // Sorts the array in ascending 
    // order, according to the key
    ksort($res_a);
    
    // Returns the first occurence 
    // key, that has max value
    return array_search(max($res_a), $res_a);

}
*/


// Returns the lowest type number of the most 
// frequently sighted bird without using loops
function migratoryBirds($arr) {
    
    $res_a = [];
    $cnt = count($arr);
    
    // Counts occurrences of each values
    $res_a = array_count_values($arr);
    
    // Sorts the array in ascending 
    // order, according to the key
    ksort($res_a);
    
    // Returns the first occurence 
    // key, that has max value
    return array_search(max($res_a), $res_a);

}

echo migratoryBirds([1, 4, 4, 4, 5, 3]);
