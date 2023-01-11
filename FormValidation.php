<?php

    $NameError = "";
    $EmailError = "";
    $GenderError = "";
    $WebsiteError = "";
    $CommentError = "";



    if (isset($_POST['Submit'])) {
        
        if ( empty($_POST["Name"]) ) {

            $NameError = "Name is required";
        }else {
        
            $Name = Test_User_Input($_POST["Name"]);
        }

        if ( empty($_POST["Email"]) ) {

            $EmailError = "Email is required";
        }else {
        
            $Name = Test_User_Input($_POST["Email"]);
        }

        if ( empty($_POST["Gender"]) ) {

            $GenderError = "Gender is required";
        }else {
        
            $Name = Test_User_Input($_POST["Gender"]);
        }

        if ( empty($_POST["Website"]) ) {

            $WebsiteError = "Website is required";
        }else {
        
            $Name = Test_User_Input($_POST["Website"]);
        }

        if ( empty($_POST["Comment"]) ) {

            $CommentError = "Comment is required";
        }else {
        
            $Name = Test_User_Input($_POST["Comment"]);
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
</head>
<body>
    <h2>Form Validation with PHP.</h2>

    <form action="FormValidation.php" method="POST">
        <legend>* Please fill out the following Fields.</legend>
        <fieldset>
            Name: </br>
            <input type="text" class="input"  name="Name" value="" > *<?php echo $NameError; ?> </br>

            Email: </br>
            <input type="email" class="input"  name="Email" value="" > *<?php echo $EmailError; ?>  </br>

            Gender: </br>
            Male <input type="radio" class="radio"  name="Gender" value="Male" > 
            Female <input type="radio" class="radio"  name="Gender" value="Female" >  *<?php echo $GenderError; ?> </br>

            Website: </br>
            <input type="text" class="input"  name="Website" value="" > *<?php echo $WebsiteError; ?> </br>

            Comment: </br>
            <textarea name="Comment" id="Comment" cols="25" rows="5"></textarea> *<?php echo $CommentError; ?> </br>
            </br>

            <input type="submit" name="Submit" value="Submit Your Information">
        </fieldset>
    </form>
</body>
</html>