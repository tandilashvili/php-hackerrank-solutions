<?php

// URL: https://www.hackerrank.com/challenges/anagram

// Returns the minimum number of characters to change to 
// make the words anagrams, or -1 if it's not possible.
function anagram($s) {

    $res = 0;
    
    $strl = strlen($s);
    
    // String letter count must be even in order to
    // split into two equal parts to make anagrams
    if ($strl%2) {
        return -1;
    }

    // Splits into to equal parts
    $s1 = substr($s, 0, $strl/2);
    $s2 = substr($s, $strl/2);
    
    // Counts unique letters for both parts
    $s1_cnt_values = array_count_values(str_split($s1, 1));
    $s2_cnt_values = array_count_values(str_split($s2, 1));
    
    // Loops through $s1 unique values
    foreach ($s1_cnt_values as $key => $value) {
        
        // Letter that exists in both $s1 and $s2 but  
        // occurs more often in $s1, must be balanced
        if (isset($s2_cnt_values[$key])) {            
            if ($value > $s2_cnt_values[$key]) {
                $res += $value - $s2_cnt_values[$key];
            }
        } else {
            // $s1 Letters that don't exist 
            // in $s2, must be removed from $1
            $res += $value;
        }
    }
    return $res;
}

echo anagram('xaxbbbxx');
