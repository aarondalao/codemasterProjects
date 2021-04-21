<?php

function calculateZodiac($mnth,$yr){
    
    if($mnth <=2){
        $yr--;
    }
    
    switch ($yr % 12){
        case 0:
            $zodiac = "Monkey";
            break;
        case 1:
            $zodiac = "Rooster";
            break;
        case 2:
            $zodiac = "Dog";
            break;
        case 3:
            $zodiac = "Pig";
            break;
        case 4:
            $zodiac = "Rat";
            break;
        case 5:
            $zodiac = "Ox";
            break;
        case 6:
            $zodiac = "Tiger";
            break;
        case 7:
            $zodiac = "Rabbit";
            break;
        case 8:
            $zodiac = "Dragon";
            break;
        case 9:
            $zodiac = "Snake";
            break;
        case 10:
            $zodiac = "Horse";
            break;
        case 11:
            $zodiac = "Goat";
            break;
    }
    return $zodiac;
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
    $zodiac = '<h4> fill out the form first!</h4>';
    if(!empty($_POST))
    {
        $mnth = $_POST['month'];
        $yr = $_POST['year'];
        $zodiac = calculateZodiac($mnth,$yr);
    }
?>

    <h1>Chinese Zodiac CALCULATOR</h1>
    <form action="" method="post">
    <label for="month">enter birthmonth: </label>
    <select name="month" id="">
        <option value='1'> January</option>
        <option value='2'> Febuary</option>
        <option value='3'> March</option>
        <option value='4'> April</option>
        <option value='5'> May</option>
        <option value='6'> June</option>
        <option value='7'> July</option>
        <option value='8'> August</option>
        <option value='9'> September</option>
        <option value='10'> October</option>
        <option value='11'> November</option>
        <option value='12'> December</option>
    </select>

    <br><br>
    <label for="year">enter birthyear: </label>
    <input type="number"  name="year">
    <br><br>
    <input type="submit" name="addition" value="what's my chinese animal!">
    
    </form>
    <br><br><br>
    <p>month is: <?php echo $mnth ?> </p>
    <p>result is: <?php echo $zodiac?> </p>
</body>
</html>