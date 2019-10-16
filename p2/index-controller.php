<?php
$winner = null;

$playerA = flipCoin();

$playerB = ($playerA == 'heads') ? 'tails' : 'heads';

$flip = flipCoin();

$winner = ($playerA == $flip) ? 'Player A' : 'Player B';


function flipCoin()
{
    $coin = ['heads', 'tails'];
    return $coin[rand(0, 1)];
}
