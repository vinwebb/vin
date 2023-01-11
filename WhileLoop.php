<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | While Loop</title>
</head>
<body>
    <h1>WHILE LOOP</h1>
    <p>The While Loop does the same thing with the For Loop but the only difference is in the "<b>declaration</b>".</p>
    <p>the initial value is defined outside the parenthesis .</p>
    <p>the condition is passed inside the parenthesis .</p>
    <p>The increment is passed inside the curly braces .</p>


    <?php
        $P = 1;
        while( $P <= 10 ) {
            echo "Vintech_Webb.com <br>";
            $P++;
        }

    ?>
    <h4><b>NOTE :</b></h4>
    <i>the only difference between the <b>FOR LOOP</b> & <b>WHILE LOOP</b> is the <b>SYNTAX</b> .</i>
</body>
</html>