<?php

// URL: https://www.hackerrank.com/challenges/string-construction

/*
// Returns the minimum cost of copying a string
function stringConstruction($s) {
    
    $res = [];
    $strl = strlen($s);
    
    // Loops through the string letters
    for ($i = 0;  $i < $strl;  $i ++) {
        
        // Puts the letter into the array
        // if it does not exist inside it
        if (!in_array($s[$i], $res)) {
            $res[] = $s[$i];
        }
    }
    return count($res);
}
*/

// Returns the minimum cost of copying a string
function stringConstruction($s) {
    
    // Splits the string letters one by one
    $splitted = str_split($s, 1);
    
    // Puts unique letters into $count_values array
    $count_values = array_count_values($splitted);
    
    // Returns count of the unique letters
    return count($count_values);
}

echo stringConstruction('abcd');

