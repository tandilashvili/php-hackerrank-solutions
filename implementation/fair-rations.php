<?php

// URL: https://www.hackerrank.com/challenges/fair-rations

// Returns an integer that represents the minimum number of loaves required.
function fairRations($B) {

    // It's unable to distribute loaves with the  
    // specified rules if there is an odd sum of the
    // given elements because it would be unable to make
    // all the elements even, with the specified rules
    if (array_sum($B) % 2) {
        return 'NO';
    } else {
        
        $res = 0;
        $cnt = count($B);
    
        // Loops through the array members
        for ($i = 0;  $i < $cnt;  $i ++) {
            
            // If the current element is odd, increases the element value right to it
            if($B[$i] % 2){
                // Its contiguous right element will be increased by one. The last 
                // element will always be even, after the previous operations
                $B[$i+1] ++;
                $res += 2;
            }
        }
    }
    return $res;
}

echo fairRations([2, 3, 4, 5, 6]);
