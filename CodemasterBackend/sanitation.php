<?php

    $fName = sanitiseInput($_POST['fName']);
    $lName = sanitiseInput($_POST['lName']);
    $phone = sanitiseNumberedInput($_POST['phone']);
    $email = sanitiseEmail($_POST['email']);
    $message = sanitiseInput($_POST['message']);
    $numTshirts = sanitiseInput($_POST['numTshirts']);

    function sanitiseInput($input){
        $output = htmlspecialchars(strip_tags(trim($input)));
        return $output;
    }

    function sanitiseEmail($input){
        $output = htmlspecialchars(strip_tags(trim($input)));
        return $output;
    }

    function sanitiseNumberedInput($numInput){

        $testPattern = '/^(?:|+ $61|0) [2-478] (?:[ -]?[0-9]){8}$/';
        $samplePhNMobileNum[0] = '0478 782 482';
        $samplePhNMobileNum[1] = '+61450 661 890';
        $samplePhNMobileNum[2] = '0478782482';
        $output = htmlspecialchars(strip_tags(trim($numInput)));

        if(preg_match($testPattern, $output)){
          echo "match found.";
          return $output;
        }else{
            preg_replace($testPattern,$samplePhNMobileNum[],$output);
          echo " please enter phone/mobile number with the following pattern: start at +61 or 0 following with 8 random numbers LOL";
        }
      }
	
?>
