<?php

// URL: https://www.hackerrank.com/challenges/utopian-tree

/*
// Calculates how tall will the 
// tree be after N growth cycles
function utopianTree($n) {

    $val = 1;
    
    // Loops through the years
    for ($i = 0;  $i < $n; $i ++) {
        
        // Doubles the result for every odd year
        if (!($i % 2)) {
            $val *= 2;
        } else {
            // Increases by one for every even year
            $val ++;
        }
    }
    return $val;
}

echo utopianTree(5);
*/


// The same function - Loop was replaced by Math formula
function utopianTree($n) {

    // Math formula for odd years
    if ($n % 2) {
        $val = 2 * (pow(2, (floor($n/2)+1)) - 1);
    } else {
        // for even years
        $val = pow(2, ($n/2 + 1)) - 1;
    }
    return $val;
}

echo utopianTree(5);

/*  Patterns for creating Math formula
0      1    2** (0/2 + 1) - 1 = 2**1-1 = 1
1      2    (2** (1/2 + 1) - 1) * 2 = 2
2      3    2** (2/2 + 1) - 1 = 2**2-1 = 3
3      6    (2** (3/2 + 1) - 1) * 2 = 6
4      7    2** (4/2 + 1) - 1 = 2**3-1 = 7
5      14   (2** (5/2 + 1) - 1) * 2 = 14
6	   15   2** (6/2 + 1) - 1 = 2**4-1 = 15
7 	   30   (2** (7/2 + 1) - 1) * 2 = 30
8 	   31   ...
*/




/*
ციკლი 	ხის სიმაღლე	ორობითი სისტემა 
0	1	1
1	2	10
2	3	11
3	6	110
4	7	111
5	14	1110

// David Bagaturia's solution
int utopianTree(int n) {

    if (n == 0)
        return 1;
    else
        n--;

    unsigned long long int H = 18446744073709551615;
    int shiftLeft = 63 - int(n / 2);
    int value = n % 2;

    H = ((H >> shiftLeft) << 1) + value;
    return H;
}
*/
