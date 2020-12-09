<?php

// URL: https://www.hackerrank.com/challenges/compare-the-triplets

function compareTriplets($a, $b) {

    // Set initial value of the scores to 0
    $as = $bs = 0;
    
    // Loop through the challenge rating array
    for ($i = 0;  $i < 3;  $i ++) {
        if ($a[$i] > $b[$i]) {
            $as ++;
        } else if ($a[$i] < $b[$i]) {
            $bs ++;
        }
    }
    return [$as, $bs];
}

print_r(compareTriplets([1, 2, 3], [3, 2, 1]));
