<?php

// URL: https://www.hackerrank.com/challenges/cavity-map

// Finds all the cavities on the map and replaces 
// their depths with the uppercase character X
function cavityMap($grid) {
    
    $cnt = count($grid);

    // Loops through the two dimensional array rows
    for ($i = 1;  $i < $cnt-1;  $i ++) {
        
        // Loops through the elements of each row
        for ($j = 1;  $j < $cnt-1;  $j ++) {
            
            // Checks all of its adjacent cells 
            // to be less than the current cell
            if ($grid[$i][$j] > $grid[$i-1][$j]  &&
                $grid[$i][$j] > $grid[$i][$j-1]  &&
                $grid[$i][$j] > $grid[$i][$j+1]  &&
                $grid[$i][$j] > $grid[$i+1][$j]) {
                $grid[$i][$j] = 'X';
            }
        }
    }
    return $grid;
}

print_r(cavityMap(['1112', '1912', '1892', '1234']));
