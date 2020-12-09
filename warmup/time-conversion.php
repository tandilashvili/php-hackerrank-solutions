<?php

// URL: https://www.hackerrank.com/challenges/time-conversion

// Returns a new string representing the input time in 24 hour format
function timeConversion($s) {

    // Determines if the date is PM or AM
    $pm = substr($s, -2) == 'PM' ? true : false;
    
    // Takes hour from the date
    $hour = substr($s, 0, 2);
    
    if ($hour == 12 AND !$pm)
        $hour = '00';
    
    if ($pm && $hour != 12)
        $hour += 12;
        
    return $hour . substr($s, 2, 6);
}

echo timeConversion('07:05:45PM');
