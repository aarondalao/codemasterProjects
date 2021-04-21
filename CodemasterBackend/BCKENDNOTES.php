<?php 
    //Variables
    $varName = 3;
    $var2 = "A string in here";

    
    //Types
    /*$boolean = true;
    $boolean2 = false;
    $integer = 10;
    $floatingPoint = 56.33;
    $string = "Hello World";
    $integer = "A string now";

    echo $integer;*/



    //concatenation
    /*$string1 = "Hello";
    $string2 = "World";
    $string3 = $string1 . " " . $string2;
    $string4 = "Hello";
    $string4 .= " Class";

    echo $string4;*/



    //operators and comparisons
    /*$mean = 9;
    $median = 10;
    $mode = 9.00;

    $result = ($mean < $median);
    $result = ($mean > $median);
    $result = ($median <= $mode);
    $result = ($median >= $mode);
    $result = ($mean === $mode);
    $result = ($mean != $mode);

    var_dump($result);*/



    //logical operators 
    // && - AND
    // || - OR
    // !  - NOT
    // xor - XOR

    /*if($condition1 == 5 xor $condition2 == true) {
        //do something
    }*/

    //if statements
    /*if ($condition == "yes"){
        //do something
    }

    //if - else 
    if ($condition == "yes") {
        //do something
    } else if ($condition == "no") {
        // do something else
    } else {
        //do soemthing default
    }*/
    
    date_default_timezone_set("Australia/Perth");
    /*$today = date("l");
    $time = date("G");

    //nested if statements
    if ($today == "Wednesday") {
        if ($time >= 18) {
            echo "It's Codemasters time!";
        }
    }

    if ($today == "Wednesday" && ($time >= 18 && $time <= 21)) {
        echo "Yeah it's Codemasters time!";
    }*/


    
    //switch - case

    /*$day = date("w");

    switch($day) {
        case 1:
            $output = "Tell me why I don't like Mondays.";
            break;
            
        case 2:
            $output = "Nothing messes up your Friday like realising it's a Tuesday.";
            break;
            
        case 3:
            $output = "Codemasters day!";
            break;
        
        case 4: 
            $output = "You say Thursday. I say Friday Eve.";
            break;
            
        case 5:
            $output = "TGIF!";
            break;
    }
    
    echo $output;*/
    


    /*$i = 11;
    //while loop
    while ($i <= 10) {
        echo "<br>i is: " . $i;
        $i++;
    }*/


    /*$i = 11;
    //do-while loop
    do {
        echo $i;
    } while ($i <= 10)*/
        
    
    
    //for loop
    /*for ($i = 0; $i <= 10; $i = $i + 2){
        echo $i . "<br>";
    }*/



    //numeric arrays
    $array = array("yellow", "blue", "red");
    echo $array[2];


    //associative arrays
    /*$array2 = array("sunshine" => array("hot", "warm", "uv"), "sky" => "blue", "communism" => "red");
    echo $array2['sunshine'][2];*/


    //foreach
    foreach($array as $key => $val) {
        $index = $key + 1;
        echo "<br>" . $index . ". " . $val;
    }
    
?>