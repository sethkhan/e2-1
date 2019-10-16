<?php

$mysteryNumber = rand(0, 20);

//$guess = $_GET['guess'];
$guess = 10;

$results = checkNumber($guess, $mysteryNumber);

function checkNumber($number, $answer)
{
    if ($number == $answer) {
        return 'correct';
    } elseif ($number < $answer) {
        return 'too low';
    } else {
        return 'too high';
    }
}
