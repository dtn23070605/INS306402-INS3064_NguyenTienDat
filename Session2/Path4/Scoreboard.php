<?php

function analyzeScores($scores) {
    // Calculate statistics
    $average = array_sum($scores) / count($scores);
    $max = max($scores);
    $min = min($scores);
    
    // Filter scores above average
    $topPerformers = array_filter($scores, function($score) use ($average) {
        return $score > $average;
    });
    
    // Sort top performers in descending order
    rsort($topPerformers);
    $topPerformers = array_values($topPerformers);
    
    // Format output
    $topList = '[' . implode(', ', $topPerformers) . ']';
    return "Avg: " . round($average, 2) . ", Top: " . $topList;
}

// Example usage
$scores = [45, 60, 75, 80, 90, 55, 70, 85];
echo analyzeScores($scores);

?>