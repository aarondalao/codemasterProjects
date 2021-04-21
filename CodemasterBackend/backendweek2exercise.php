<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>processing dat S P I C E Y  Tee-P A I N</title>
</head>
<body>
    <?php

        if(isset($_GET['numberOfTShirts']) > 0){
            $_numTshirt = $_GET['numberOfTShirts'];
            $_message = $_GET['message'];

            echo '<p>so u ordered' . " " . $_numTshirt . " " . 'T Shirts ' . 'with a message of: ' . " " . $_message . 
            '. Is this correct?</p>'; 


        }else{
            echo '<p> eeyy u didnt order anythin m8';
        }


        // function sanitiseInput($input){
        //     $output = htmlspecialchars(strip_tags(trim($input)));
        //     return $output;
        // }

        //^^^special case for information sanitation
        // para may first line of defence in case of sudden info breaches from our db/program
    
    ?>

    <!--<?php var_dump(); ?>-->

    <!-- ^^^^search this shit -->

        <!-- $fName = htmlspecialchars(strip_tags(trim($_POST['fName']))); -->
    
    
    



</body>
</html>