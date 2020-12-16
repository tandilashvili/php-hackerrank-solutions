<?php

// URL: https://www.hackerrank.com/challenges/the-love-letter-mystery

// Returns the integer representing the minimum number 
// of operations needed to make the string a palindrome
function theLoveLetterMystery($s) {
    
    $res = 0;
    $strl = strlen($s);
    
    // Loops through the string letters from 
    // backward and forward at the same time
    for($i = 0, $j = $strl-1;  $i < $j;  $i++, $j--) {
        
        // Finds difference between the two symmetric
        // letters ASCII codes - finds the minimum number of  
        // operations needed to make the two letters the same
        $res += abs(ord($s[$i]) - ord($s[$j]));
    }
    return $res;
}

echo theLoveLetterMystery('abcd');
