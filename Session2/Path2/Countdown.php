<?php

$number = 10;

while ($number >= 1) {
    echo $number;
    if ($number > 1) {
        echo ", ";
    }
    $number--;
}

echo ", Liftoff!";
?>