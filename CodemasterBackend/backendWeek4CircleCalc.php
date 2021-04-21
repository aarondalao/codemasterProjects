<?php

    function getCircumference($rd){
        $outputCirc = 2 * pi() * $rd;
        return $outputCirc;
    }
    
    function getArea($rd){
        $outputArea = pi() * $rd * $rd;
        return $outputArea;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
    $output = '<h4> fill out the form first!</h4>';
    if(!empty($_POST))
    {
        $rd = $_POST['radius'];
        
        $outputCirc = getCircumference($rd);
        $outputArea = getArea($rd);

    }
?>

    <h1>Circle CALCULATOR</h1>
    <form action="" method="post">
        <label for="radius">enter radius: </label>
        <input type="number" name="radius">
        <input type="submit" name="submit" value="CALCULATE!">
    </form>
    <br><br><br>
    <p>circumference is: <?php echo $outputCirc?> </p>
    <p>area is: <?php echo $outputArea?> </p>
</body>
</html>