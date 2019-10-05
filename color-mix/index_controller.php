<?php

$primaryColorArray = ['red', 'blue', 'yellow'];

/*
Initialize an array of secondary colors
Where each key is the color name and each
value will represent the count of how many times
that color is mixed.
*/
$secondaryColorArray = [
    'green' => 0,
    'orange' => 0,
    'purple' => 0,
];

$matchingCounts = 0;
$mostCounted = null;
$results = [];

# Do a color mix 50 times
for ($a = 1; $a <= 50; $a++) {

    # Each time we pick two primary colors to mix
    $primaryColorPair = [
        $primaryColorArray[rand(0, 2)],
        $primaryColorArray[rand(0, 2)]
    ];

    # If the primary color pair contains the colors red and blue, it makes purple
    if (in_array('red', $primaryColorPair) and in_array('blue', $primaryColorPair)) {
        $resultingColor = 'purple';
    # If the primary color pair contains the colors red and yellow, it makes orange
    } elseif (in_array('red', $primaryColorPair) and in_array('yellow', $primaryColorPair)) {
        $resultingColor = 'orange';
    # If the primary color pair contains the colors blue and yellow, it makes green
    } elseif (in_array('blue', $primaryColorPair) and in_array('yellow', $primaryColorPair)) {
        $resultingColor = 'green';
    # If none of the above mixes were found, the two colors were the same
    } else {
        $matchingCounts++;
        $resultingColor = 'the same color';
    }

    # If it wasn't a match, increment our secondary color count
    if ($resultingColor != 'the same color') {
        $secondaryColorArray[$resultingColor]++;
    }

    # Accumulate our results for display purposes
    $results[] = [
        'primary1' => $primaryColorPair[0],
        'primary2' => $primaryColorPair[1],
        'resultingColor' => $resultingColor
    ];
}

/*
At the end of the above loop we end up with an array like the following examples:

Each color had a unique count, with green being the winner:
    $secondaryColorArray = [
        'green' => 11,
        'orange' => 9,
        'purple' => 7,
    ];

Two-way tie between green and orange:
    $secondaryColorArray = [
        'green' => 11,
        'orange' => 11,
        'purple' => 7,
    ];

Two-way tie for second and third, but green is the winner
    $secondaryColorArray = [
        'green' => 11,
        'orange' => 5,
        'purple' => 5,
    ];

Using this array, we need to figure out which color(s) were counted the most out of all 3...
*/

# Sort associative arrays in descending order, according to the value (counts)
# This will make the color with the most counts at the start of the array
# Ref: https://www.php.net/manual/en/function.arsort.php
arsort($secondaryColorArray);

# Count how many unique counts we had - we'll use this to determine if there were ties
$uniqueCounts = count(array_unique($secondaryColorArray));

# If there are 3 unique counts, we know there was not a tie
# and the color at the start of the array was counted the most (based on the sorting done above)
if ($uniqueCounts == 3) {
    $mostCounted = array_key_first($secondaryColorArray); # This extracts the color at the start of the array
# If there is only 1 unique count, we can assume there was a three-way tie
} elseif ($uniqueCounts == 1) {
    $mostCounted = 'a three-way tie between red, green, and blue';
# If there are 2 unique counts, we can assume there was a two-way tie and we'll need to figure out if it's a tie for first
} elseif ($uniqueCounts == 2) {
    $colors = array_keys($secondaryColorArray);

    # If the first and second color have the same count, it's a tie between those two for first
    if ($secondaryColorArray[$colors[0]] == $secondaryColorArray[$colors[1]]) {
        $mostCounted = 'a two-way tie between '.$colors[0]. ' and '.$colors[1];
    # Otherwise we can assume the tie was between the second and third color, and therefor the first color is the winner
    } else {
        $mostCounted = array_key_first($secondaryColorArray); # This extracts the color at the start of the array
    }
}
