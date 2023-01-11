<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | For Each Loop</title>
</head>
<body>
    <h1>FOR EACH LOOP</h1>
    <p>The For Each  Loop is very helpful in array</p>
    <p>the initial value is defined outside the parenthesis .</p>
    <p>You don't need to define a condition.</p>
    <p>You don't need to  increment in it.</p>


    <?php
        
        $Number = array(1,2,5,34,25,76,5,76,82,100,830,20,33,17,26,75,48,1000);

        foreach ($Number as $Num) {
            echo "Numbers : {$Num} </br>";
        }
        

    ?>
    <hr>

    <?php
        $Food = array(
            "item_number"=> 107,
            "item_name"=> "Egusi",
            "region" => "Owerri",
            "nick_name"=> "Ofe Owerri",
            "drink"=> "Nutri-Milk",
            "item_price" => 5000    
        );

        

        foreach( $Food as $Key=>$Value) {

            $Data = ucwords( str_replace("_", " ", $Key)) ;
            if ($Key == "item_price") {
                if ( is_numeric($Value)) {

                }else {
                    $Value =  "Can not be determined";
                }
            }

            echo "{$Data} : {$Value}" . "</br>";
        }
    
    ?>











    <h4><b>NOTE :</b></h4>
    <i>the only difference between the <b>FOR LOOP</b> & <b>WHILE LOOP</b> is the <b>SYNTAX</b> .</i>
</body>
</html>