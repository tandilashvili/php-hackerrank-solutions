<?php

// URL: https://www.hackerrank.com/challenges/game-of-stones-1

// Prints the name of the winner, either "First" or "Second"
function gameOfStones($n) {

    // As the pattern shows, if the remainder (after dividing the 
    // number by 7) is between 2 and 6, the first player is winner
    $remainder = $n%7;
    
    // Prints 'Second' if the remainder 
    // is 0 or 1, otherwise - 'First'
    return $remainder < 2 ? 'Second' : 'First';
}

echo gameOfStones(8);



/*
// Generates patterns of the game results till the number
function gameOfStones($n) {
    
    for ($i = 0;  $i < $n;  $i ++) {
        echo $i . ': ';
        echo $i%7 < 2 ? 'Second' : 'First';
        echo PHP_EOL;
    }
}

Generated Patterns:
0:  Second
1:  Second
2:  First
3:  First
4:  First
5:  First
6:  First
7:  Second
8:  Second
9:  First
10: First
11: First
12: First
13: First
14: Second
15: Second
16: First
17: First
18: First
19: First
20: First
21: Second
22: Second
23: First
24: First
25: First
26: First
27: First
28: Second
29: Second
30: First
*/