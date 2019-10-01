<?php
session_start();

$correct = $_SESSION['correct'];

unset($_SESSION['correct']);
