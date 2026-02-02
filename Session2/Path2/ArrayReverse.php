<?php

$input = [1, 2, 3, 4, 5];
$reversed = [];

// Manually reverse the array
for ($i = count($input) - 1; $i >= 0; $i--) {
    $reversed[] = $input[$i];
}

echo "Original: " . json_encode($input) . "\n";
echo "Reversed: " . json_encode($reversed) . "\n";