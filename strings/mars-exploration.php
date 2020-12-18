<?php

// URL: https://www.hackerrank.com/challenges/mars-exploration

// Determines how many letters of the SOS 
// message have been changed by radiation
function marsExploration($string) {

    $res = 0;
    
    $sos_c = 0;
    $sos = 'SOS';
    
    // Loops through the string letters
    $strl = strlen($string);
    for ($i = 0;  $i < $strl;  $i ++) {
        
        // Checks if the current letter of the 
        // string is equal to one of the letters 
        // of "SOS" depending on the $sos_c value
        if ($string[$i] !== $sos[$sos_c]) {
            $res ++;
        }
        
        // Increasing is needed to compare the 
        // current letter to the next letter in "SOS"
        $sos_c ++;
        
        // Defaults to 0, if it exceeds "SOS" letter indexes
        if ($sos_c == 3) {
            $sos_c = 0;
        }
    }
    return $res;
}

echo marsExploration('SOSSPSSQSSOR');
