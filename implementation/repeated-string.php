<?php

// URL: https://www.hackerrank.com/challenges/repeated-string

// Returns the number of letter a's in the 
// first N letters of the infinite string
function repeatedString($string, $number) {

    $ltr = 'a';
    $strl = strlen($string);

    // 'a' letter count inside the string have to be  
    // multiplied by how many times the string is repeated
    $res = substr_count($string, $ltr) * floor($number / $strl);
    
    // Remainder of the division above is the additional 
    // string part and we need to count 'a' in the string
    $res += substr_count(substr($string, 0, $number % $strl), $ltr);
    
    return $res;
}

echo repeatedString('aba', 10);
