<?php

// URL: https://www.hackerrank.com/challenges/pangrams

// Returns the string "pangram" if the input string 
// is a pangram. Otherwise, it returns "not pangram"
function pangrams($s) {

    // Removes the following symbols: ' ', ',', '.'
    $string = str_replace([' ',',','.'],'',$s);
    
    // Makes all string lowercase
    $string = strtolower($string);
    
    // Turns the string letters into an individual array member
    $split_letters = str_split($string, 1);
    
    // Counts all the values of the array
    $count_values = array_count_values($split_letters);
    
    // Returns count of the array members
    $values_count = count($count_values);
    
    // If the unique values count is 26, it means it's a pangram
    return $values_count == 26 ? 'pangram' : 'not pangram';
}

echo pangrams('We promptly judged antique ivory buckles for the next prize');
