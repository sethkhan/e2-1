<?php

session_start();

if (isset($_SESSION['correct'])) {
    $correct = $_SESSION['correct'];
    $showResults = true;
    $_SESSION['correct'] = null;
} else {
    $showResults = false;
}
