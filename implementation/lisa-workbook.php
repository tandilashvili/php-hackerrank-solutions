<?php

// URL: https://www.hackerrank.com/challenges/lisa-workbook

// Returns an integer that represents the 
// number of special problems in the workbook
function workbook($n, $k, $arr) {

    $res = 0;
    $page = 1;
    
    $cnt = count($arr);
    
    // Loops through the chapters
    for ($i = 0;  $i < $cnt;  $i++) {
        
        // Loops through each chapter problems
        for ($j = 1;  $j <= $arr[$i];  $j++) {
            
            // If the current problem ID and the current 
            // page is the same, the problem is SPECIAL
            if ($page == $j) {
                $res ++;
            }
            
            // A page can only contain no more than $k problems, if 
            // already $k problems are located on the page, or if there 
            // are no more problems in this chapter, new page should start
            if ($j % $k == 0  ||  $arr[$i] == $j) {
                $page ++;
            }
        }
    }
    return $res;
}

echo workbook(5, 3, [4, 2, 6, 1, 10]);
