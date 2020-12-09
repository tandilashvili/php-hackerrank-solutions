<?php

// URL: https://www.hackerrank.com/challenges/birthday-cake-candles

// Counts how many candles are tallest
function birthdayCakeCandles($ar) {
    
    // Counts values for each unique member
    $counts = array_count_values($ar);
    
    // Returns the count value of the tallest candles
    return $counts[max($ar)];
    
}

echo birthdayCakeCandles([3, 2, 1, 3]);
