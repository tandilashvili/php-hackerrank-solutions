<?php

// URL: https://www.hackerrank.com/challenges/plus-minus

// Calculates the ratios of the array elements that are positive, negative, and zero
function plusMinus($arr) {
    
    // Sets initial values to 0
    $r = [0,0,0];
    
    // Loop through the array members
    foreach ($arr as $item) {
        if ($item > 0) {
            $r[0]++;
        } else if ($item < 0) {
            $r[1]++;
        } else {
            $r[2]++;
        }
    }
    // Calculates the sum of the array members
    $s = array_sum($r);
    
    // Calculates each ratio and rounds the result to 6 digits
    $res = [round($r[0]/$s, 6), round($r[1]/$s, 6), round($r[2]/$s, 6)];
    
    echo $res[0] . "\n";
    echo $res[1] . "\n";
    echo $res[2] . "\n";

}

plusMinus([-4, 3, -9, 0, 4, 1]);
