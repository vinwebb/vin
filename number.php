<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Number</title>
</head>
<body>
    <h4>PHP NUMBERS</h4>

    <?php
        $first_num = 4;
        $sec_num = 3.142;

        echo "{$first_num}". "</br>";
        echo "{$first_num}" + 20 . "</br>";

        echo ceil($sec_num). "</br>";
        echo floor($sec_num). "</br>";
    
    ?>

    <hr>

    <?php echo "is {$first_num} an Integer: ". is_int($first_num). "</br>"; ?>
    <?php echo "is {$sec_num} an Integer: ". is_int($sec_num). "</br>"; ?>
    <?php echo "is {$sec_num} an Integer: ". is_float($first_num). "</br>"; ?>
    <?php echo "is {$sec_num} an Integer: ". is_float($sec_num). "</br>"; ?>

    <hr>

    <h4>OTHER NUMBER FUNCTIONS</h4>

    Converting decimal number to binary: <?php echo decbin(5). "</br>"; ?>
    Converting binary number to decimal: <?php echo bindec(5). "</br>"; ?>
    finding the modulus: <?php echo fmod(12 , 5). "</br>"; ?>
    finding power: <?php echo pow(3 , 5). "</br>"; ?>
    finding Absolute: <?php echo abs(-20 + 11). "</br>"; ?>
    finding Square Root: <?php echo sqrt(255). "</br>"; ?>
    finding Random: <?php echo rand(). "</br>"; ?>
    finding Random with range: <?php echo rand(20 , 500). "</br>"; ?>

    <?php
        $a =4;
        $b = 15;
        $c = $a + $b;

        echo "{$a} </br>";
        echo $a * $b ."</br>";
        echo $a + $b ."</br>";
        echo $a - $b ."</br>";
        echo $a / $b ."</br>";
        echo $a++ ."</br>"; //Increment
        echo $a-- ."</br>"; //Decrement 
        echo $a  ."</br>";
        echo $a++  ."</br>";
        echo $a++  ."</br>";

    
    ?>


    

</body>
</html>