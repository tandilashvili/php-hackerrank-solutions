<?php

// URL: https://www.hackerrank.com/challenges/drawing-book

// Finds the minimum number of pages that 
// must be turned in order to arrive at page $p
function pageCount($n, $p) {
    
    // If $p is closer to the beginning of the 
    // book, then we need to floor the answer
    $forward = floor(($p)/2);
    
    // If $p is closer to the end and $n is even, then we  
    // need to round the result, otherwise we need to floor it
    $backward = ($n%2==0 && $n/2<$p) ? round(($n-$p)/2) : floor(($n-$p)/2);
    
    // Returns minimum of the two possible answer
    return min($forward, $backward);
}

// Round needed
echo pageCount(6, 5);

// // Floor needed
// echo pageCount(7, 6);