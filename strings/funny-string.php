<?php

// URL: https://www.hackerrank.com/challenges/funny-string

// Determines whether a given string is funny. If it 
// is, returns "Funny", otherwise returns "Not Funny"
function funnyString($string) {
    
    $strl = strlen($string);
    
    // Creates an array of the string letters ASCII codes
    for ($i = 0;  $i < $strl;  $i ++) {
        $s_a[$i] = ord($string[$i]);
    }
    
    // Creates an array with reverse 
    // order from the above array
    $s_a_r = array_reverse($s_a);
    
    // Loops through the string letters
    for ($i = 1;  $i < $strl;  $i ++) {
        
        // Creates an array with absolute 
        // difference values of adjacent members 
        // from the ordinal values of the passed string
        $adj1[] = abs($s_a[$i] - $s_a[$i-1]);
        
        // Creates an array based on the above rules
        // but for the array of reverse ordinal values
        $adj2[] = abs($s_a_r[$i] - $s_a_r[$i-1]);
    }
    
    // // For debugging purposes
    // print_r([$string, $s_a, $s_a_r, $adj1, $adj2]);
    
    // Checks if the two arrays are the same (if they 
    // are the same, it means the string is funny)
    if ($adj1 == $adj2) {
        $res = 'Funny';
    } else {
        $res = 'Not Funny';
    }
    return $res;
}

echo funnyString('acxz');
