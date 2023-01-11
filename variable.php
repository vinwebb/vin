<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Variables </title>
</head>
<body>
<h4>RULE FOR VARIABLES</h4>
<!--Variables starts with the dollar sign "$"  -->
<!-- Variables can't start with dash (special characters) or number but can otherwise be added in between letters or word example "$my_Name", "$project2", "$blue-color" -->
<!-- Variables are case sensitive. note that $Name is not same as $name -->
<!-- Variable don't contain space. Example "$name 4" -->

<?php
    $name = "Jazeb Akram";
    $age = 35;

    echo "My name is {$name} and i am {$age} years old. </br>";
    echo $name;

?>
</body>
</html>