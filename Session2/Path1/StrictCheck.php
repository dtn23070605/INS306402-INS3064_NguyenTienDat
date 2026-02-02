<?php

// Loose comparison (==) - compares values only
$result_loose = (5 == '5');

// Strict comparison (===) - compares values and types
$result_strict = (5 === '5');

// Print results
echo "Equal (==): " . ($result_loose ? "True" : "False") . ", Identical (===): " . ($result_strict ? "True" : "False");

?>