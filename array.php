<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Array</title>
</head>
<body>
    
    <?php
        $nam = "Jazeb Akram";
        $name = array("vincent", "somkele", "Naomi", "Daniel", "Nonso", "Soft", "Rex");
        $phrase1 = "All student on blue shirt";
        $phrase2 = "should sit behind the classroom .";
        $phrase = $phrase1 . " ". $phrase2;


        echo $name[3] ."</br>";
        echo ucfirst($name[1]) ."</br>";
        echo strtolower($name[2]) ."</br>";
        echo strtoupper($name[4]) ."</br>";
        echo strpos($name[3], "Daniel") ."</br>";
        echo str_repeat($name[3], 2) ."</br>";
        echo str_replace("Onyejekwe Camelus","Jazeb Akram", $nam) ."</br>";
        
    ?>
    <hr>

    <?php
        echo $phrase . "</br>";
        echo strlen($phrase) . "</br>";
        echo strchr($phrase, "blue") . "</br>";
        echo strstr($phrase , "s") . "</br>";

        echo "A". trim("B C D"). "E";

    ?>

    <pre>
        <?php echo print_r($name) ; ?>
    </pre>


    <h4>Associative Array</h4>
    <?php
    
        $club = array("A"=>"Chelsea", "B"=>"Liverpool", "mfc"=>"Man united");
        echo $club["A"] ."</br>";
        echo $club["mfc"] ."</br>";

    
    ?>
    <pre> <?php echo print_r($club) ;?> </pre>


    <h4>Array Function</h4>
    <?php
        $number = array(1,2,5,34,25,76,5,76,82,100,830,20,33,17,26,75,48,1000);
        echo max($number) ."</br>";
        echo min($number) ."</br>";
        echo count($number) ."</br>";
        echo in_array(100 ,$number) ."</br>";
        echo sort($number) ."</br>";
        echo rsort($number) ."</br>";
        
        $color = array("Red", "Blue", "Yellow", "Black", "Pink");
        array_pop($color) ."</br>";
        echo print_r($color) ."</br>";

        array_push($color, "Gray", "Violent", "Orange") ."</br>";
        echo print_r($color) ."</br>";

    ?>
    <hr>

    <?php
        $Subjects = array("Math", "English", "Civc", "Economics", "Agriculture", "Biology", "Geography", "Physics", "Chemistry");
        
        echo print_r($Subjects) ."</br>";

        echo strtoupper(current($Subjects)) ."</br>";
        next($Subjects);
        echo strtoupper(current($Subjects)) ."</br>";
        next($Subjects);
        next($Subjects);
        next($Subjects);
        echo strtoupper(current($Subjects)) ."</br>";
    
    ?>

</body>
</html>