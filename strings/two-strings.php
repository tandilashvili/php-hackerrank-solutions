<?php

// URL: https://www.hackerrank.com/challenges/two-strings

/*
// Determines if they share a common substring. 
// A substring may be as small as one character.
function twoStrings($s1, $s2) {

    $strl = strlen($s1);

    // Loops through the first string letters
    for ($i = 0;  $i < $strl;  $i ++) {
        
        // Returns 'YES' if any of the letters 
        // from $s1 exists in another string $s2
        if (strpos($s2, $s1[$i]) !== false) {
            return 'YES';
        }
    }
    
    // If the two strings ($s1, $s2) don't share a common 
    // substring, the return statement below will run
    return 'NO';
}
*/


// Determines if they share a common substring. 
// A substring may be as small as one character.
// The same as above function (without using loops)
function twoStrings($s1, $s2) {

    $res = 'NO';
    
    // Returns arrays broken down into chunks. 
    // Each chunk will be one character in length.
    $array1 = str_split($s1);
    $array2 = str_split($s2);
    
    // Checks if the strings have a common substring
    if (array_intersect($array1, $array2)) {
        $res = 'YES';   
    }
    return $res;
}
echo twoStrings('hello', 'world');
