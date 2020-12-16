<?php

// URL: https://www.hackerrank.com/challenges/camelcase

// Determines the number of words in the string
function camelcase($s) {

    // Sets to 1 as the first word 
    // letters are all lowercase
    $res = 1;
    
    // Loop through the concatenated string letters
    $strl = strlen($s);
    for ($i = 0;  $i < $strl;  $i ++) {
        
        // Checks if the letter is UPPERCASE
        if (ctype_upper($s[$i])) {
            $res ++;
        }
    }
    return $res;
}

echo camelcase('saveChangesInTheEditor');
