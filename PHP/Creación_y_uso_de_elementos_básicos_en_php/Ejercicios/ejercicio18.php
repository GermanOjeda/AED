<?php

function isPalindrome(String $word="ana") {
    $lowerCaseWord = strtolower($word);
    $invertedWord = strrev($lowerCaseWord);

    if($invertedWord == $lowerCaseWord){
        echo "Es palindromo";
    } else {
        echo "No es palindromo";
    }
}

isPalindrome("Jamaj")
?>