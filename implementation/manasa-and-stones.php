<?php

// URL: https://www.hackerrank.com/challenges/manasa-and-stones

// Compute all possible numbers that might occur on the last stone
function stones($n, $a, $b) {
    
    $res = [];
    
    $n_z_s = $n - 1;
    
    // If the difference between $a and $b is 0, 
    // there will be only one possible answer
    if ($a == $b) {
        return [$n_z_s * $a];
    }
    
    // Needs to choose min and max of the numbers 
    // to loop through the possible answers
    $min = min($a, $b);
    $max = max($a, $b);
    
    // As the pattern shows (from the Explanation) the difference  
    // of the answer's numbers is exactly the same as the difference  
    // between the last two parameters: $a and $b, in this case: 90
    $diff = $max - $min;
    for ($i = $n_z_s*$min;  $i <= $max*$n_z_s;  $i += $diff) {
        $res[] = $i;
    }
    return $res;
}

print_r(stones(4, 10, 100));


/*
With differences 10 and 100, all possible series for the second test case are the following:

0, 10, 20, 30
0, 10, 20, 120
0, 10, 110, 120
0, 100, 110, 120
0, 10, 110, 210
0, 100, 110, 210
0, 100, 200, 210
0, 100, 200, 300
Hence the answer 30 120 210 300

As the pattern shows (from the Explanation) the difference  
of the answer's numbers is exactly the same as the difference  
between the last two parameters: $a and $b, in this case: 90
*/
