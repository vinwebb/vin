<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Variables </title>
</head>
<body>
    <!-- Unlike constants, the value assigned to a variable can change or be redefined . -->
    <!-- Variables are denoted using a dollar sign "$" -->
    <!-- Variables are case sensitive -->
    <!-- you can't start a variable with number or special characters "$2name" -->
    <!-- Instead a variable can contain numbers and other special characters in them. example "$project1", "$male_names" etc -->



    <?php

        $name = "Onyejekwe Vincent Somkele";
        $age = 25;
        $height = 5.7;

        echo "My name is {$name}, i am {$age} years old and i am {$height}fit in height.". "</br>";
        echo "{$name}";
    ?>
</body>
</html>