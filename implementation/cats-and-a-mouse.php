<?php

// URL: https://www.hackerrank.com/challenges/cats-and-a-mouse

// Determines which cat will reach the mouse first. If the cats arrive at the same
// time, the mouse will be allowed to move and it will escape while they fight
function catAndMouse($x, $y, $z) {

    $res = 'Mouse C';
    
    // Calculates cats distances to the mouse 
    $x_d = abs($z - $x);
    $y_d = abs($z - $y);

    // If cat A has longer distance than cat B 
    if ($x_d > $y_d) {
        $res = 'Cat B';
    } else if ($x_d < $y_d) {
        $res = 'Cat A';
    }
    return $res;
}

echo catAndMouse(2, 5, 4);
