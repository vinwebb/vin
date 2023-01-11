<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Global Variable</title>
</head>
<body>
    <h1>LOCAL VARIABLE</h1>
    <p>A local Variable is that which is define/declared outside a function which has a <b>Global scope</b> and can only be accessed <b>outside</b> a function</p>

    <?php

        $MyNumber = 23456765; //local scope
        function Addition() {
            global $MyNumber;
            $a = 5;
            $b = 12;
            $c = $a + $b;

            echo $MyNumber ."</br>"; 

            echo "Addition is {$c} </br>";
        }
        Addition() ;
        
        // echo $a ."</br>"; //Also note that this will lead to an error due to the fact that the variable was define within another scope of function
    ?>
</body>
</html>