<?php

// URL: https://www.hackerrank.com/challenges/strange-advertising

// Determines how many people have liked 
// the ad by the end of a given day
function viralAdvertising($n) {

    // The first day numbers
    $shared = 0;
    $liked = 2;
    $cumulative = 2;
    
    // Loops through the days
    for ($i = 2;  $i <= $n;  $i ++) {
        
        $shared = $liked * 3;
        
        // Calculates how many people have 
        // liked the ad for the given loop
        $liked = floor($shared /  2);
        
        // Calculates how many people have liked the ad
        $cumulative += $liked;
    }
    return $cumulative;
}

echo viralAdvertising(5);
