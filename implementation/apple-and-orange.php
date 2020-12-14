<?php

// URL: https://www.hackerrank.com/challenges/apple-and-orange

// Determines the number of apples and oranges that land on Sam's house
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {

    $cnt_a = $cnt_o = 0;
    
    // Loops through the apples array
    for ($i = 0;  $i < count($apples);  $i ++) {
        
        // Calculates the apple's position
        $apple_pos = $a + $apples[$i];
        
        // Determines whether the apple lands on Sam's house
        if ($apple_pos >= $s  &&  $apple_pos <= $t) {
            $cnt_a ++;
        }
    }
    
    // Loops through the oranges array
    for ($i = 0;  $i < count($oranges);  $i ++) {
        
        // Calculates the orange's position
        $orange_pos = $b + $oranges[$i];
        
        // Determines whether the orange lands on Sam's house
        if ($orange_pos >= $s  &&  $orange_pos <= $t) {
            $cnt_o ++;
        }
    }
    
    echo $cnt_a;
    echo "\n";
    echo $cnt_o;
}

countApplesAndOranges(7, 11, 5, 15, [-2, 2, 1], [5, -6]);
