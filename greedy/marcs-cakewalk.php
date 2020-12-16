<?php

// URL: https://www.hackerrank.com/challenges/marcs-cakewalk

// Prints a long integer denoting the minimum number 
// of miles Marc must walk to maintain his weight
function marcsCakewalk($cals) {

    $res = 0;
    
    // Sorts with descending order to
    // start with the biggest number
    rsort($cals);
    
    // Loops through the numbers 
    $cnt = count($cals);
    for ($i = 0;  $i < $cnt;  $i ++) {
        
        // Calculates the minimum number of miles
        $res += pow(2, $i) * $cals[$i];
    }
    return $res;
}

echo marcsCakewalk([7, 4, 9, 6]);
