<?php

// URL: https://www.hackerrank.com/challenges/grading

// The code below automates the rounding process
function gradingStudents($grades) {
    
    $res = [];
    
    // Loops through the grades
    for ($i = 0;  $i < count($grades);  $i ++) {
        
        //  if the grade is greater than 37
        if ($grades[$i] > 37) {
            
            // Calculates the remainder 
            $rem = $grades[$i] % 5;
            
            // determines whether the difference between the grade and the 
            // next multiple of 5 is less than 3 (if the remainder is 3 or 4)
            if (in_array($rem, [3, 4])) {
                
                // Rounds the grade to its next multiple
                // of 5 according to the remainder 
                if ($rem == 4) {
                    $grades[$i] += 1;
                } else {
                    $grades[$i] += 2;
                }
            }
        }
    }
    return $grades;
}

print_r(gradingStudents([73, 67, 38, 33]));