<?php

// URL: https://www.hackerrank.com/challenges/designer-pdf-viewer

// Determines the area of the highlighted rectangle
function designerPdfViewer($h, $word) {

    // Creates $alph array of 26 with 
    // values of the alphabet letters
    $alph = 'abcdefghijklmnopqrstuvwxyz';
    $alph = str_split($alph);
    
    // Loops through the alphabet letters
    // count to calculate each letter's height
    for ($i = 0;  $i < 26;  $i ++) {
        $heights[$alph[$i]] = $h[$i];
    }
    
    // Calculates the letters count of the word
    $strl = strlen($word);
    
    // Loops through the word letters and 
    // calculates the word letters heights
    for ($i = 0;  $i < $strl;  $i ++) {
        $word_h[] = $heights[$word[$i]];
    }
    
    // Calculates the result by multiplying the 
    // max height by the word letters count
    return max($word_h) * $strl;
}

echo designerPdfViewer([1,3,1,4,1,4,1,3,2,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5], 'abd');
