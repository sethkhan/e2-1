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
        <li>Player A picks <?php echo $playerA; ?></li>
        <li>Player B defaults to <?php echo $playerB; ?></li>
        <li>The coin landed on <?php echo $flip; ?></li>
        <li>The winner is <?php echo $winner; ?></li>
    </ul>

</body>

</html>