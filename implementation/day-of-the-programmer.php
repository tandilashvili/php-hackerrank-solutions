<?php

// URL: https://www.hackerrank.com/challenges/day-of-the-programmer

// Returns a string representing the date of the 256th day of the year given
function dayOfProgrammer($year) {
    
    // As the transition from the Julian to Gregorian calendar system 
    // occurred in 1918, the result is valid only for the given year
    if ($year == 1918) {
        $res = '26.09.1918';
    } else if (
            // Every year that was evenly divisible by 
            // 4, was leap year as per Julian calendar
            (($year <= 1917) && ($year%4 == 0))
            || 
            
            // Formula to calculate leap year as per Gregorian calendar 
            ($year > 1918  &&  (!($year%400)  ||  (!($year%4) && ($year%100))))
        ) {
        $res = '12.09.' . $year;
    } else {
        
        // If the year is a regular year (if the year is not leap year)
        $res = '13.09.' . $year;
    }
    return $res;
}

echo dayOfProgrammer(2017);
