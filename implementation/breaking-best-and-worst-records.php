<?php

// URL: https://www.hackerrank.com/challenges/breaking-best-and-worst-records

// Finds the number of times Maria breaks her records 
// for most and least points scored during the season
function breakingRecords($scores) {
    
    // Minimum and maximum record scores
    // are set to the first score's value
    $min = $max = $scores[0];
    
    // Records are initially set to 0
    $breaks_b = $breaks_w = 0;
    
    $cnt = count($scores);
    
    // Loops through the scores
    for ($i = 1;  $i < $cnt;  $i ++) {
        
        // If the score is less than the minimum score
        // it means that there is a new minimum record 
        if ($scores[$i] < $min) {
            $breaks_w ++;
            $min = $scores[$i];
        }
        
        // If the score is more than the maximum score
        // it means that there is a new maximum record
        if ($scores[$i] > $max) {
            $breaks_b ++;
            $max = $scores[$i];
        }
    }
    return [$breaks_b, $breaks_w];
}

print_r(breakingRecords([10, 5, 20, 20, 4, 5, 2, 25, 1]));
