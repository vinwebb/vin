<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Local Variable</title>
</head>
<body>
    <h1>LOCAL VARIABLE</h1>
    <p>A local Variable is that which is define within a function which has a <b>local scope</b> and can only be accessed within that function</p>

    <?php

        $MyNumber = 23456765;
        function Addition() {
            $a = 5;
            $b = 12;
            $c = $a + $b;

            // echo $MyNumber;  //note that we can't echo this variable because it was defined outside the scope of this function.

            echo "Addition is {$c} </br>";
        }
        Addition() ;
        // echo $a ."</br>"; //Also note that this will lead to an error due to the fact that the variable was define within another scope of function
    ?>
</body>
</html>