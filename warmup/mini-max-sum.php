<?php

// URL: https://www.hackerrank.com/challenges/mini-max-sum

// Prints two space-separated integers on one line: the minimum sum and the maximum sum of 4 of 5 elements
function miniMaxSum($arr) {

    // Calculates the sum of the array members
    $sum = array_sum($arr);

    // Calculates the difference between the sum and max
    // member of the array and between the sum and min
    echo ($sum-max($arr)) . ' ' . ($sum-min($arr));

}

miniMaxSum([1, 3, 5, 7, 9]);
