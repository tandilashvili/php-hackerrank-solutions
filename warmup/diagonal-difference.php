<?php

// URL: https://www.hackerrank.com/challenges/diagonal-difference

// Calculates the absolute difference between the sums of its diagonals
function diagonalDifference($arr) {

    $cnt = count($arr);
    // Sets initial values of the diagonals to 0
    $lrds = $rlds = 0;
    
    // Loop through the matrix size
    for ($i = 0;  $i < $cnt;  $i ++) {
        // Calculate sums of the left and right diagonals
        $lrds += $arr[$i][$i];
        $rlds += $arr[$i][$cnt-1-$i];
    }
    // Return absolute difference of the diagonals
    return abs($lrds - $rlds);
}

print_r(diagonalDifference([
    [1, 2, 5], 
    [4, 5, 6],
    [7, 8, 12]
]));