<?php require 'index-controller.php'; ?>
<!doctype html>
<html lang='en'>

<head>

    <title>Coin Flip</title>
    <meta charset='utf-8'>

</head>

<body>

    <h1>Coin Flip</h1>

    <h2>Mechanics</h2>

    <h2>Results</h2>
    <ul>
        <li>Player A picks <?= $playerA ?>
        </li>
        <li>Player B defaults to <?= $playerB ?>
        </li>
        <li>The coin landed on <?= $flip ?>
        </li>
        <li>The winner is <?= $winner ?>
        </li>
    </ul>

</body>

</html>