<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Strings </title>
</head>
<body>
    <!-- Strings is the combination of characters -->
    <!-- They are enclosed in between "double" / 'single' quote. -->

    <!-- NOTE:
        1) when using the double quote, make use of the single quote inside the double quote.
        2) Also when using the single quote, make use of the double quote inside the single quote.
    -->

    <?php

    echo "my name is Vincent Onyejekwe, but my friends call me 'VINTECH' in short </br>";
    echo "I am 25 years of age </br>";
    echo 'i am a programmer expert in front end. </br>';

    ?>

    <hr>


    <!-- CONCATENATION  -->
    <h4>CONCATENATION IN PHP</h4>
    <?php
    $sur_name= "Onyejekwe";
    $first_name= 'Vincent';
    $color = "Blue";

    $full_name = $sur_name." ".$first_name;

    echo $full_name."</br>";
    echo "{$color} is my favorable color.";
    ?>

    <hr>

    <!-- STRING FUNCTION -->
    <h4>STRING FUNCTION</h4>
    <?php
        $phrase1 = "all student on red shirt should sit at the last row behind the classroom";
        $phrase2 = " while those student on blue shirt, should occupy the front sit volly.";

        $phrase = $phrase1;
        $phrase .= $phrase2;

        echo "The instruction given by the teacher was, {$phrase} .";
        echo "<hr>";
    ?>
    

    Uppercase first: <?php echo ucfirst($phrase). "</br>"; ?>
    Uppercase words: <?php echo ucwords($phrase). "</br>"; ?>
    Lowercase: <?php echo strtolower($phrase). "</br>"; ?>
    Uppercase: <?php echo strtoupper($phrase). "</br>"; ?>

    <hr>

    Repeat: <?php echo str_repeat($phrase, 3). "<br>"; ?>
    make substring from one point to another: <?php echo substr($phrase, 3, 20). "<br>"; ?>
    Finding position of any word: <?php echo strpos($phrase, "red"). "<br>"; ?>
    find character: <?php echo strchr($phrase, "v"). "<br>"; ?>

    <hr>

    <h4>other string functions</h4>

    Total length of string: <?php echo strlen($phrase). "</br>"; ?>
    <!-- Trim: <?php //echo trim($phrase). "</br>"; ?> -->
    Find specific word and show after: <?php echo strstr($phrase , "blue"). "</br>"; ?>
    Replace word with new: <?php echo str_replace("blue" , "yellow" , $phrase). "</br>"; ?>
    

    <hr>

    



</body>
</html>