<?php

// URL: https://www.hackerrank.com/challenges/hackerrank-in-a-string

// Prints YES if the string contains 
// hackerrank, otherwise, prints NO
function hackerrankInString($string) {

    // The substring is going to be
    // searched in the passed string
    $hackerrank = 'hackerrank';
    
    $cnt = 0;
    
    // Loops through the string letters
    $strls = strlen($string);
    for ($i = 0;  $i < $strls;  $i ++) {
        
        // If the current letter is equal to the hackerrank's 
        // next letter, the counter will increase by one
        if ($string[$i] == $hackerrank[$cnt]) {
            $cnt ++;
        }
    }
    
    // $res will be equal to "YES" if all the 
    // letters inside "hackerrank" were found
    $res = $cnt == strlen($hackerrank) ? 'YES' : 'NO';
    
    return $res;
}

echo hackerrankInString('hereiamstackerrank');
