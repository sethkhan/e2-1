<?php

session_start();

$winner = null;
$coin = ['heads', 'tails'];
$choice = $_GET['choice'];

$flip = $coin[rand(0, 1)];

if ($choice == $flip) {
    $winner = true;
} else {
    $winner = false;
}

$results = [
    'winner' => $winner,
    'flip' => $flip,
    'choice' => $choice,
];

$_SESSION['results'] = $results;

header('Location: index.php');
