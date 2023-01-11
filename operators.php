<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Operators</title>
</head>
<body>
    <h2>concepts</h2>
    <ul>
        <li>{}   Curly Braces </li>
        <li>()   Parenthesis </li>
        <li>[]   Bracket </li>
    </ul>
    <hr>
    <h2>Operators</h2>
    <ol>
        <li>=  Assignment operator</li>
        <li>==  Equal to operator</li>
        <li>===      Strictly Equal to operator</li>
        <li>!=   Not Equal to operator</li>
        <li>>=   Greater than or Equal to operator</li>
        <li><=   Less than or Equal to operator</li>
        <li><    Less than operator</li>
        <li> >   Greater than operator</li>
        <li> !   not operator</li>
    </ol>

    <h2>Logical Operators</h2>
    <p>There are only two types of logical operations, they include</p>
    <ol>
        <li>AND (&&)</li>
        <li>OR (||)</li></li>
    </ol>

    <hr>
    <h2>Increment & Decrement </h2>
    <?php
        $a = 5;
        // echo $a ."</br>";
        echo ++$a ."</br>";
        echo $a  ."</br>";
    echo "<hr>";
        $b= 6;
        // echo $b  ."</br>";
        echo $b++  ."</br>";
        echo $b  ."</br>";
    ?>

    <h3>Ternary Operatos</h3>
    <?php 
        $a = 10;
        $b = 5;

        if ($a > $b ) {
            $result = "a is greater than b";
        }else {
            $result = "b is greater than a";
        }

        // echo $result;

        $result = $a < $b ? "a is greater than b" : "b is greater than a";
    ?>
</body>
</html>