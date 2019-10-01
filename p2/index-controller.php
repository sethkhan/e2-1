<?php
$winner = null;
$coin = ['heads', 'tails'];
$playerA = $coin[rand(0, 1)];

if ($playerA == 'heads') {
    $playerB = 'tails';
} else {
    $playerB = 'heads';
}

$flip = $coin[rand(0, 1)];

if ($playerA == $flip) {
    $winner = 'Player A';
} else {
    $winner = 'Player B';
}
