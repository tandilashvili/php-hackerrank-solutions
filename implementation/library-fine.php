<?php

// URL: https://www.hackerrank.com/challenges/library-fine

// Calculates the fine, if the book is returned late
function libraryFine($d1, $m1, $y1, $d2, $m2, $y2) {
    
    $hacks = 0;
    
    // If the book is returned after the calendar 
    // year, there is a fixed fine of 10,000 Hackos
    if ($y1 > $y2) {
        $hacks = 10000;
    } 
    
    // If the book is returned after the expected return 
    // month but still within the same calendar year
    else if ($m1 > $m2  &&  $y1 == $y2) {
        $hacks = 500 * ($m1 - $m2);
    }
    
    // If the book is returned after the expected return 
    // day but still within the same calendar month and year
    else if ($d1 > $d2  &&  $m1 == $m2  &&  $y1 == $y2) {
        $hacks = 15 * ($d1 - $d2);
    }
    return $hacks;
}

echo libraryFine(9, 6, 2015, 6, 6, 2015);
