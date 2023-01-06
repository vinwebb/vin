<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Constant </title>
</head>
<body>
    <!-- Unlike variable, the value assigned to a constant can't be changed or redefined . -->


    <?php

        $pie = 3.142;

        define("constant_name", "constant_value"); //CONSTANT SYNTAX.

        define("gravity_value" , 9.8);
        echo "The actual value for gravity is " .gravity_value;

    ?>
</body>
</html>