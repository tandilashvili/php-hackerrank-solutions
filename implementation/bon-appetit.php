<?php

// URL: https://www.hackerrank.com/challenges/bon-appetit

// prints "Bon Appetit" if the bill is fairly split. Otherwise, 
// it prints the integer amount of money that Brian owes Anna
function bonAppetit($bill, $k, $b) {
    
    // Calculates Anna's portion
    $bill_r = (array_sum($bill) - $bill[$k]) / 2;
    
    // Checks if the third parameter is exactly Anna's portion
    if ($bill_r == $b) {
        echo 'Bon Appetit';
    } else {
        // Prints the integer amount of money that Brian owes Anna
        echo $bill[$k] / 2;
    }
}

bonAppetit([3, 10, 2, 9], 1, 12);
