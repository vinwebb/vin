<?php

    $NameError = "";
    $EmailError = "";
    $GenderError = "";
    $WebsiteError = "";
    // $CommentError = "";



    if (isset($_POST['Submit'])) {
        
        if ( empty($_POST["Name"]) ) {

            $NameError = "Name is required";
        }else {
        
            $Name = Test_User_Input($_POST["Name"]);

            if (!preg_match("/^[a-zA-Z\. ]*$/" , $Name)) {
                $NameError = "Only letter and white space are required";
            }
        }

        if ( empty($_POST["Email"]) ) {

            $EmailError = "Email is required";
        }else {
        
            $Email = Test_User_Input($_POST["Email"]);

            if (!preg_match("/[a-zA-Z0-9\._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9\._-]{2,}/", $Email)) {
                $EmailError ="Invalid Email Address format";
            }
        }

        if ( empty($_POST["Gender"]) ) {

            $GenderError = "Gender is required";
        }else {
        
            $Gender = Test_User_Input($_POST["Gender"]);
        }

        if ( empty($_POST["Website"]) ) {

            $WebsiteError = "Website is required";
        }else {
        
            $Website = Test_User_Input($_POST["Website"]);

            if (!preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9\.\-_\/?\$=&\#\~`]+\.[a-zA-Z0-9\.\-_\/?\$=&\#\~`!]*/", $Website)) {
                $WebsiteError ="Invalid Website Address format";
            }
        }

        // if ( empty($_POST["Comment"]) ) {

        //     $CommentError = "Comment is required";
        // }else {
        
        //     $Name = Test_User_Input($_POST["Comment"]);
        // }

        if (!empty($_POST["Name"]) && !empty($_POST["Email"]) && !empty($_POST["Gender"]) && !empty($_POST["Website"])) {
            
            if ( (preg_match("/^[a-zA-Z*\. ]*$/" , $Name) == true) && (preg_match("/[a-zA-Z0-9\._-]{3,}@[a-zA-Z0-9\._-]{3,}[.]{1}[a-zA-Z0-9\._-]{2,}/" , $Email) == true) && (preg_match("/(https:|ftp:)\/\/+[a-zA-Z0-9\.\-_\/?\$=&\#\~`!]+\.[a-zA-Z0-9\.\-_\/?\$=&\#\~`!]*/" , $Website) == true)) {

                echo "<h2>User Information</h2>" . "</br>";
                echo "Name :" . $_POST["Name"] ."</br>";
                echo "Email :" . $_POST["Email"] ."</br>";
                echo "Gender :" . $_POST["Gender"] ."</br>";
                echo "Website :" . $_POST["Website"] ."</br>";
                echo "Comments :" . $_POST["Comment"] ."</br>";

            }else {
                echo '<span class="Error"> Fill in the required information </span>';
            }
        }

    }


    // function
    function Test_User_Input($Data) {
        return $Data;
        
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Form Validation</title>

    <style type="text/css">
        input[type="text"] , input[type="email"] , textarea {
            padding: 5px 10px;
            font-size: 14px;
            background-color: gold;
            color: #000;
        } 

        .Error {
            font-size: 15px;
            color: red;
            font-weight: 500;
        }
    </style>



</head>
<body>
    <h2>Form Validation with PHP.</h2>

    <form action="FormValidation.php" method="POST">
        <legend>* Please fill out the following Fields.</legend>
        <fieldset>
            Name: </br>
            <input type="text" class="input"  name="Name" value="" > <span class="Error">*<?php echo $NameError; ?></span> </br>

            Email: </br>
            <input type="email" class="input"  name="Email" value="" > <span class="Error">*<?php echo $EmailError; ?></span>  </br>

            Gender: </br>
            Male <input type="radio" class="radio"  name="Gender" value="Male" > 
            Female <input type="radio" class="radio"  name="Gender" value="Female" >  <span class="Error">*<?php echo $GenderError; ?></span> </br>

            Website: </br>
            <input type="text" class="input"  name="Website" value="" > <span class="Error">*<?php echo $WebsiteError; ?></span> </br>

            Comment: </br>
            <textarea name="Comment" id="Comment" cols="25" rows="5"></textarea> *</br>
            </br>

            <input type="submit" name="Submit" value="Submit Your Information">
        </fieldset>
    </form>
</body>
</html> 