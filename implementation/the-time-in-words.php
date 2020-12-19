<?php

// URL: https://www.hackerrank.com/challenges/the-time-in-words

// Prints the time in words for the input given
function timeInWords($h, $m) {
    
    $res = '';
    
    // Described for Minutes 
    $ms = ["zero",  "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen", "twenty", "twenty one", "twenty two", "twenty three", "twenty four", "twenty five", "twenty six", "twenty seven", "twenty eight", "twenty nine"];
    
    // Described for Hours
    $hs = array_slice($ms, 0, 13);
    
    switch ($m) {
        case '00':
            $res = $hs[$h] . " o' clock";
            break;
        case '01':
            $res = $ms[1] . " minute past " . $hs[$h];
            break;
        case '15':
            $res = "quarter past " . $hs[$h];
            break;
        case '30':
            $res = "half past " . $hs[$h];
            break;
        case '45':
            $res = "quarter to " . $hs[$h+1];
            break;
    }
    
    if (!$res) {
        if ($m > 30) {
            $res = $ms[60-$m] . " minutes to " . $hs[$h+1];
        } else {
            $res = $ms[$m] . " minutes past " . $hs[$h];
        }
    }
    return $res;
}

echo timeInWords(9, 29);
