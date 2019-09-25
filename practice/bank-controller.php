<?php

$coins = [
    'pennies' => [.01, 300],
    'nickels' => [.05, 5],
    'dimes' => [.10, 0],
    'quarters' => [.25, 125],
    'halfDollars' => [.50, 50]
];

$total = 0;
foreach ($coins as $coin => $info) {
    $total = $total + ($info[1] * $info[0]);
}
