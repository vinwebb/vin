<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Switch Statement</title>
</head>
<body>
    <h1>SWITCH STATEMENT</h1>

    <?php 
        $Name = "Vincent";

        switch ($Name) {
            case "John" :
            echo "His name is John";
            break;

            case "Obinna" :
            echo "His name is Obinna";
            break;

            case "Daniel" :
            echo "His name is Daniel";
            break;

            case "Vincent" :
            echo "His name is Vincent";
            break;
            
            case "Victory" :
            echo "His name is Victory";
            break;

            default :
            echo "The following names doesn't match the given gender";
            break;

        }
    ?>

    <h1>BRANCH & CONTINUE STATEMENT</h1>

    <?php
    
        $State  = array("Lagos", "Imo", "Ondo", "Oyo", "Ibadan", "Enugu", "Kano", "Benue", "Anambra", "Sokoto");

        for ($i = 0; $i <= 9; $i++) {
            if ($State[ $i ] == "Enugu") {
                // continue;
                break;
            }

            echo $State[$i] ."</br>";
        }
        echo "</br>" ;
        print_r($State)
    ?>
</body>
</html>