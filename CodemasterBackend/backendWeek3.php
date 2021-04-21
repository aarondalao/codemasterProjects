<?php

function addition($x,$y){
    $output = $x + $y;
    return $output;
   
}
function subtraction($x,$y){
    $output = $x - $y;
    return $output;
    
}
function multiplication($x,$y){
    $output = $x * $y;
    return $output;
}
function division($x,$y){
    $output = $x / $y;
    return $output;
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

    if(!empty($_POST))
    {
        $num1 = $_POST['x'];
        $num2 = $_POST['y'];

        if(isset($_POST['addition']))
        {
            $output = addition($num1,$num2);
        } if(isset($_POST['subtraction']))
        {
            $output = subtraction($num1,$num2);
        }
         if(isset($_POST['division']))
        {
            $output = division($num1,$num2);
        }
         if(isset($_POST['multiplication']))
        {
            $output = multiplication($num1,$num2);
        }
    }
?>

    <h1>Chinese Zodiac CALCULATOR</h1>
    <form action="" method="post">
    <label for="month">enter first number</label>
    <input type="number" name="x">
    <br><br>
    <label for="secondNum">enter second number</label>
    <input type="number"  name="y">
    <br><br>
    <input type="submit" name="addition" value="ADD!">
    <input type="submit" name="subtraction" value="SUBTRACT!">
    <input type="submit" name="multiplication" value="MULTIPLY!">
    <input type="submit" name="division" value="DIVIDE!">
    </form>
    <br><br><br>
    <p>result is: <?php echo $output?> </p>
    
    

</body>
</html>