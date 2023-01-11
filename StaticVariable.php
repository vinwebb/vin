<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Static Variable</title>
</head>
<body>
    <h1>STATIC VARIABLE</h1>

    <h3><b><i>NORMAL VARIABLE</i></b></h3>
    <?php 
        function Normal_V() {
            $a = 1;
            echo $a;
            $a++;
        }
        echo Normal_V() ."</br>";
        echo Normal_V() ."</br>";
        echo Normal_V() ."</br>";
        echo Normal_V() ."</br>";
    ?>

    <hr>

    <h3><b><i>STATIC VARIABLE</i></b></h3>
    <?php 
        function Static_V() {
            static $a = 1;
            echo $a;
            $a++;
        }
        echo Static_V() ."</br>";
        echo Static_V() ."</br>";
        echo Static_V() ."</br>";
        echo Static_V() ."</br>";
    ?>
</body>
</html>