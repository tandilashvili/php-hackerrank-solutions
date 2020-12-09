<?php

// URL: https://www.hackerrank.com/challenges/staircase

/*
// Prints a staircase of the specified size using # symbols and spaces
function staircase($n) {

    // Loops through the staircase size
    for ($i = 1;  $i <= $n;  $i ++) {
        
        // Prints spaces (empty)
        for ($j = 0;  $j < $n-$i;  $j ++) {
            echo ' ';
        }
        
        // Prints # symbols
        for ($k = 0;  $k < $i;  $k ++) {
            echo '#';
        }
        
        // Starts printing on a new line
        echo "\n";
        
    }
}
*/

// Better version of the above function (in terms of performance)
function staircase($n) {

    // Loops through the staircase size
    for ($i = 0; $i < $n; $i++) {

        // Prints spaces (empty)
        echo str_repeat(" ", $n-1-$i);

        // Prints # symbols
        echo str_repeat("#", $i+1);

        // Starts printing on a new line
        echo "\n";
    }

}
staircase(10);