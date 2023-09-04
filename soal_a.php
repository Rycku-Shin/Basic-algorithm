<?php
$array = array(12, 9, 30, "A", "M", 99, 82, "J", "N", "B");

foreach ($array as $key => $value) {
    if (ctype_digit($value)) {
        $array[$key] = intval($value);
    }
}

sort($array);
print_r($array);
