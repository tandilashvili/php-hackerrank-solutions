<?php

// URL: https://www.hackerrank.com/challenges/making-anagrams

// Determines the minimum number of character 
// deletions required to make $s1 and $s2 anagrams
function makingAnagrams($s1, $s2) {

    $res = 0;
    
    // Counts all the letters of the string: $s1 and $s2
    $s1_cnt_values = array_count_values(str_split($s1, 1));
    $s2_cnt_values = array_count_values(str_split($s2, 1));
    
    // Counts how many $s1 letters are missing from $s2
    foreach ($s1_cnt_values as $key => $value) {
        if (!isset($s2_cnt_values[$key])) {
            $res += $value;
        }
    }
    
    // Counts how many $s2 letters are missing from $s1
    foreach ($s2_cnt_values as $key => $value) {
        if (!isset($s1_cnt_values[$key])) {
            $res += $value;
        }
    }
    
    // Counts letters that are common but differ in count
    foreach ($s1_cnt_values as $key => $value) {
        if (isset($s2_cnt_values[$key])) {
            $res += abs($value - $s2_cnt_values[$key]);
        }
    }
    
    return $res;
}

echo makingAnagrams('cde', 'abc');
