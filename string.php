<?php

// Array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels
function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split(strtolower($str)) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Function to reverse a string
function reverseString($str) {
    return strrev($str);
}

// result
foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = reverseString($string);
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString <br/>";
}
?>
