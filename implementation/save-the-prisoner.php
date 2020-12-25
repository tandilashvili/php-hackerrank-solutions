<?php

// URL: https://www.hackerrank.com/challenges/save-the-prisoner

// Returns an integer representing the chair number of  
// the prisoner that will take the candy that tastes awful
function saveThePrisoner($prisoners, $candies, $start) {

    // Remainder is the key to determine who takes the last
    // awful candy, because we are not interested in how many
    // times candies go all around, what we need to know is how
    // many of them is left after going around several times
    if ($candies > $prisoners) {
        $candies = $candies % $prisoners;
    }
    
    // If $candies is evenly divisible by 
    // $prisoners there is no candies left
    if ($candies == 0) {
        $candies = $prisoners;
    }
    
    // Decreasing $starts by one because giving 
    // candies started including $start chair
    $start--; 
    
    // The result is valid, if the sum 
    // of $candies and $starting number is 
    // not greater than quantity of prisoners
    $res = $candies + $start;

    // If the sum of $candies and $starting 
    // number is greater than quantity of 
    // prisoners then the result is the difference 
    // between the sum and quantity of prisoners
    return $res > $prisoners ? $res - $prisoners : $res;
}

echo saveThePrisoner(5, 17, 2);
// echo saveThePrisoner(5, 19, 4);
// echo saveThePrisoner(5, 2, 2);
