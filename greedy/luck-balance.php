<?php

// URL: https://www.hackerrank.com/challenges/luck-balance

// Calculates what is the maximum amount of luck Lena can 
// have after competing in all the preliminary contests
function luckBalance($k, $contests) {

    $res = 0;
    $balances = [];
    $important_contests_count = 0;
    
    // Loops through the contests
    foreach ($contests as $contest) {
        
        // Sums all the contests amounts
        $res += $contest[0];
        
        // Counts only important contests
        $important_contests_count += $contest[1];
        
        // Puts only important contests amounts
        if ($contest[1]) {
            $balances[] = $contest[0];
        }
        
    }
    
    // Sorts important contests amounts to maximize Lena's luck
    // by winning the contests with the smallest amounts possible
    sort($balances);
    
    // Calculates how many contests are necessary Lena to win
    $dif = $important_contests_count - $k;
    
    // Subtracts won contests amounts
    for ($i = 0;  $i < $dif;  $i ++) {
        $res -= $balances[$i] * 2;
    }
    return $res;
}

echo luckBalance(3, [[5, 1], [2, 1], [1, 1], [8, 1], [10, 0], [5, 0]]);
