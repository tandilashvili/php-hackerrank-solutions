<?php

// URL: https://www.hackerrank.com/challenges/the-hurdle-race

// Calculates how many doses of the potion must the 
// character take to be able to jump all of the hurdles
function hurdleRace($k, $height) {
    
    // Calculates the highest hurdle
    $max = max($height);

    // Calculates the hurdles needed for the character
    $res = $max - $k;
    
    // Sets the value of the result to 0
    // if the value is negative number
    if ($res < 0) {
        $res = 0;
    }

    return $res;
}

echo hurdleRace(4, [1, 6, 3, 5, 2]);
