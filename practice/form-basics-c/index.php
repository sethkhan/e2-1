<?php require 'index-controller.php'; ?>
<!doctype html>
<html lang='en'>

<head>

    <title></title>
    <meta charset='utf-8'>

</head>

<body>

    <form method='GET' action='process.php'>
        <h1>Word Scramble</h1>

        <p>Mystery word: kiumppn</p>
        <p>Hint: Halloween’s favorite fruit</p>

        <label for='answer'>Your guess:</label>
        <input type='text' name='answer' id='answer'>

        <button type='submit'>Check answer</button>
    </form>

    <?php if($showResults) { ?>
        <?php if ($correct) { ?>
        You got it!
        <?php } else { ?>
        Sorry, you are incorrect :(
        <?php } ?>
    <?php } ?>

</body>

</html>