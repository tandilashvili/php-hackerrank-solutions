<?php

// URL: https://www.hackerrank.com/challenges/alternating-characters

// Finds the minimum number of required deletions
function alternatingCharacters($s) {

    $res = 0;
    $l_a = $l_b = false;
    
    // Loops through the letters
    $strl = strlen($s);
    for ($i = 0;  $i < $strl;  $i ++) {
        
        // Checks if the current letter is 'A'
        if ($s[$i] == 'A') {
            
            // If the current and previous letters are 'A'
            // deletions count will increase by one
            if ($l_a === true) {
                $res ++;
            }
            
            // Sets appropriate statuses to the variables
            $l_a = true;
            $l_b = false;   
            
        } else {
            
            // If the current and previous letters are 'B'
            // deletions count will increase by one
            if ($l_b === true) {
                $res ++;
            }
            
            // Sets appropriate statuses to the variables
            $l_b = true;
            $l_a = false;
        }
    }
    return $res;
}

echo alternatingCharacters('AABAAB');
