<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | If Statement</title>
</head>
<body>
    
    <?php
        
        $B = "Male";
        $G = "Female";
        $Gender = "Boy";

        if ($Gender == "Boy") {
            echo $Gender ."</br>";
        }else if ($Gender == "Girl") {
            echo "Gender mismatch";
        }

        if ($B == "Female") {
            echo "Yes he is a Boy </br>";
        }elseif ($G != "Female") {
            echo "yes she is a girl and her name is Ifeoma" ."</br>";
        }else {
            echo "Wrong Identity" ."</br>";
        }

"<hr>";
        $Sign_In = false;
        if ($Sign_In) {
            echo "<h1>Thank you for subscribing to our channel</h1>";
            echo "<p>One of our client will get you up to speed ASAP.</p>";
        }else {
            echo "<h3>You are not permitted due to wrong info . </h3>";
        }
    
    ?>

    <hr>

    <h4>Operation in If statement</h4>
    <?php
        $a = 4;
        $b = 3;
        $c = "Result can't be out";

        if ($a > 0 && $b < 5) {
            // $c = 2 / $b;
            $c = $a / $b;
        }
        echo $c;
        
    
    ?>
</body>
</html>