<?php

// URL: https://www.hackerrank.com/challenges/happy-ladybugs

function happyLadybugs($b) {
    
    $res = 'YES';
    $strl = strlen($b);
    
    // Counts all the values of the array
    $cnts = array_count_values(str_split($b));
    
    // If there is only one letter in the string, 
    // other than '_', then the answer is "NO"
    if ($strl == 1  &&  $b[0] != '_') {
        $res = 'NO';
    }
    
    // If an underscore exists in the string
    else if (strpos($b, '_') !== false) {
        
        // Removes underscore, to check 
        // against value "1" below
        unset($cnts['_']);
        
        // If any color is only once, answer is NO
        if (in_array(1, $cnts)) {
            $res = 'NO';
        }        
    } 
    
    // If the string contains more than one 
    // letter and does not include underscore
    else {
        
        // Loops through the letters
        for ($i = 1;  $i < $strl;  $i ++) {
            
            // If the current letter is not 
            // the same as the previous one
            if ($b[$i] != $b[$i-1]) {
                
                // And the current letter is not the last 
                // one either, OR if it is not the last and 
                // at the same time its right letter is also 
                // the different, then the answer is 'NO'
                if (($i == $strl-1)  ||  (($i != $strl-1) && ($b[$i] != $b[$i+1]))) {                        
                    $res = 'NO';
                    break;
                }
            }
        }
    }
    return $res;
}

echo happyLadybugs('AABBC_C');
