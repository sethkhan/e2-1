<?php

session_start();

if ($_POST['answer'] == 'pumpkin') {
    $correct = true;
} else {
    $correct = false;
}

$_SESSION['correct'] = $correct;

# Note: There can be *no* output to the page before header is invoked
# Any output - even empty white space - will cause the redirect to fail
header('Location: done.php');
