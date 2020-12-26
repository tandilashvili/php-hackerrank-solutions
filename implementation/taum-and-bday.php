<?php

// URL: https://www.hackerrank.com/challenges/taum-and-bday

function taumBday($b, $w, $bc, $wc, $z) {

    $res = 0;
    
    // If the cost ($z) to convert one color gift to the 
    // other color is smaller than the difference between 
    // the gifts prices, then it's better to exchange gifts
    if (abs($bc - $wc) > $z) {
        
        // If black color gift price is higher, 
        // we need to buy white color gifts
        if ($bc > $wc) {
            $res = ($b + $w) * $wc + ($b * $z);
        }
        
        // If white color gift price is higher, then
        // we need to buy black color gifts and part
        // of them to exchange for white gifts
        else {
            $res = ($b + $w) * $bc + ($w * $z);
        }
    } 
    
    // If exchange cost ($z) is higher than the difference 
    // between the prices, better to buy with its original prices
    else {
        $res = $b * $bc + $w * $wc;
    }
    return $res;
}

echo taumBday(5, 9, 2, 3, 4);
