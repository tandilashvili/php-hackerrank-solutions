<?php

// URL: https://www.hackerrank.com/challenges/counting-valleys 

// Finds the number of valleys walked through (given 
// the sequence of up and down steps during a hike).
function countingValleys($steps, $path) {
    
    $level = 0;
    $valleys = 0;
    
    // Loops through the path's steps
    $len = strlen($path);
    for($i = 0; $i < $len; $i ++) {
        
        // If it was an uphill, $level 
        // must increment by one
        if ($path[$i] == 'U') {
            ++$level;
            
            // Checks if it was a step up to sea 
            // level, which means it's new valley
            if ($level == 0) {
                ++$valleys;
            }
        } else {
            // If it was a downhill, $level 
            // must decrement by one
            --$level;
        }
    }
    return $valleys;
}

echo countingValleys(8, 'UDDDUDUU');