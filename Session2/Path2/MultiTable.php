<?php
// 5x5 Multiplication Grid using nested for-loops

echo "<table border='1' cellpadding='10'>";
echo "<tr><td></td>";

// Header row
for ($i = 1; $i <= 5; $i++) {
    echo "<td><strong>$i</strong></td>";
}
echo "</tr>";

// Grid rows
for ($i = 1; $i <= 5; $i++) {
    echo "<tr><td><strong>$i</strong></td>";
    for ($j = 1; $j <= 5; $j++) {
        $product = $i * $j;
        echo "<td>$product</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>