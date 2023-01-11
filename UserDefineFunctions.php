<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | User Define Function</title>
</head>
<body>
    <?php
        function Welcome() {
            echo "Welcome to PHP with Vintech_Webb";
        }
        Welcome() ."</br>";
        echo "<hr>";

        function Addition() {
            $a = 5;
            $b = 12;
            $c = $a + $b;

            echo "Addition is {$c} </br>";
        }
        Addition() ;
        echo "<hr>";

        function Addition_Using_Function_Parameter($x , $y) {
            $Result = $x / $y ;
            echo "Addition using function parameter is : {$Result}" ."</br>" ;
        }
        Addition_Using_Function_Parameter(12 , 4) ;
        Addition_Using_Function_Parameter(120 , 20) ;
        Addition_Using_Function_Parameter(10 , 120) ;
    
        echo "<hr>";

        function Addition_Using_Return ($u , $v) {
            $w = $u * $v;
            return $w;
        }
        $Total = Addition_Using_Return(17 ,38);
        $Total1 = Addition_Using_Return($Total ,5);
        echo $Total ."</br>";
        echo $Total1 ."</br>";

        
    
    ?>
    <h4><b>NOTE :</b></h4>
    <p><i>Function can not be redefined .</i></p>
    <p><i>Function Names are not case sensitive .</i></p>

</body>
</html>