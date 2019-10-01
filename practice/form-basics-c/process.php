<?php

session_start();

if ($_GET['answer'] == 'pumpkin') {
    $correct = true;
} else {
    $correct = false;
}

$_SESSION['correct'] = $correct;

header('Location: index.php');
