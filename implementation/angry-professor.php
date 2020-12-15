<?php

// URL: https://www.hackerrank.com/challenges/angry-professor


// Determines if the class is cancelled
function angryProfessor($k, $a) {

    $res = 0;
    
    // Counts how many students arrived on time
    foreach ($a as $item) {
        if ($item <= 0) {
            $res ++;
        }
    }
    
    // Prints YES if class is cancelled
    if($k > $res) {
        $res = 'YES';
    } else {
        $res = 'NO';
    }
    return $res;
}

echo angryProfessor(3, [-1, -3, 4, 2]);
