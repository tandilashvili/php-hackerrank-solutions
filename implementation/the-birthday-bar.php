<?php

// URL: https://www.hackerrank.com/challenges/the-birthday-bar

// Returns an integer denoting the number of
// ways Lily can divide the chocolate bar
function birthday($s, $d, $m) {
    
    $res = 0;    
    $cnt = count($s);
    
    // Loops through chocolate squares
    for ($i = 0;  $i <= $cnt-$m;  $i ++) {
        
        $k = $i;
        $sum = 0;
        $j = 1;
        
        // Sums $m consecutive squares of chocolate
        while ($j <= $m)
        {
            $sum += $s[$k];
            $k ++;
            $j ++;
        }

        // Checks if the sum is equal to $d
        if ($sum == $d) {
            $res++;
        }          
    }
    return $res;
}

echo birthday([1, 2, 1, 3, 2], 3, 2);
