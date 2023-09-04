<?php
function pattern_count($text, $pattern)
{
    $count = 0;
    $text_length = strlen($text);
    $pattern_length = strlen($pattern);
    for ($i = 0; $i <= $text_length - $pattern_length; $i++) {
        $substring = substr($text, $i, $pattern_length);
        if ($substring == $pattern) {
            $count++;
        }
    }
    return $count;
}
$text = "palindrom";
$pattern = "ind";
echo pattern_count($text, $pattern); //hasil 1

$text = "abakadabra";
$pattern = "ab";
echo pattern_count($text, $pattern); //hasil 2

$text = "hello";
$pattern = " ";
echo pattern_count($text, $pattern); //hasil 3

$text = "ababab";
$pattern = "aba";
echo pattern_count($text, $pattern); //hasil 4

$text = "aaaaaa";
$pattern = "aa";
echo pattern_count($text, $pattern); //hasil 5

$text = "hell";
$pattern = "hello";
echo pattern_count($text, $pattern); //hasil 6
