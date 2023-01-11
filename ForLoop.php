<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | For Loop</title>
</head>
<body>
    <h1>FOR LOOP</h1>
    <p>when you have to show the user multiple times, that is when the for loop comes in.</p>
    <p>inside the parenthesis you need three (3) things, and they include;</p>
    <ul>
        <li>Initial step</li>
        <li>Condition</li>
        <li>Increment</li>
    </ul>

    <?php
        for($i = 1; $i <= 10; $i++) {
            echo "{$i} i am a boy <br>";
        }

        echo "<hr>";
        echo "<h3>Multiplication table for 3</h3>". "</br>";
        $N = 3;
        for ($i = 1; $i <= 15; $i++) {

            $Result = $N * $i ;
            echo $N . " * " . $i . " = " . $Result . "</br>";
        }
    ?>
</body>
</html>