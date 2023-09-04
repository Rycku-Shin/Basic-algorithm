<?php
function count_letters($string)
{
    $letters = array_count_values(str_split($string));
    uksort($letters, 'strcasecmp');
    return $letters;
}
$string = "Hello World";
$letters = count_letters($string);
print_r($letters); // hasil 1

$string = "Bismillah";
$letters = count_letters($string);
print_r($letters); //hasil 2

$string = "MasyaAllah";
$letters = count_letters($string);
print_r($letters); //hasil 3
