<?php require 'index-controller.php'; ?>
<!doctype html>
<html lang='en'>

<head>

    <title>Coin Flip</title>
    <meta charset='utf-8'>
    <style>
        .winner {
            color: green;
        }

        .loser {
            color: red;
        }
    </style>

</head>

<body>

    <h1>Coin Flip</h1>

    <h2>Instructions</h2>
    <ul>
        <li>Choose a side (heads or tails)</li>
        <li>We'll flip a coin and if lands on your choice, you win!</li>
    </ul>

    <form method='GET' action='process.php'>

        <input type='radio' value='heads' id='heads' name='choice'>
        <label for='heads'> Heads</label>

        <input type='radio' value='tails' id='tails' name='choice'>
        <label for='tails'> Tails</label>

        <button type='submit'>Flip...</button>

    </form>

    <?php if ($showResults) { ?>
    <ul>
        <li>The coin landed on: <?php echo $results['flip']; ?>
        </li>
        <li>You chose: <?php echo $results['choice']; ?>
        </li>
        <?php if ($results['winner']) { ?>
        <li class='winner'>You won!</li>
        <?php } else { ?>
        <li class='loser'>Sorry, you lost :(</li>
        <?php } ?>
    </ul>
    <?php } ?>

</body>

</html>