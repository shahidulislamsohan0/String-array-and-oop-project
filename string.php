<?php
//function for count vowel
function countVowels($word)
{
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;

    for ($i = 0; $i < strlen($word); $i++) {
        if (in_array($word[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}
$string = ["Hello", "World", "PHP", "Programming"];
$n = count($string);

for ($i = 0; $i < $n; $i++) {
    $vowelCount = countVowels($string[$i]);
    $reversedString = strrev($string[$i]);
    echo "Original string: {$string[$i]}, Vowel count: {$vowelCount}, Reversed string: {$reversedString}" . "<br>";
}
