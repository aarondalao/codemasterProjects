<?php
function addNumbers($num1, $num2) {
    $result = $num1 + $num2;
    return $result;
}

function subtractNumbers($num1, $num2) {
    $result = $num1 - $num2;
    return $result;
}

function multiplyNumbers($num1, $num2) {
    $result = $num1 * $num2;
    return $result;
}

function divideNumbers($num1, $num2) {
    $result = $num1 / $num2;
    return $result;
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Simple calculator</title>
</head>

<body>
    
    <?php
        if(!empty($_POST)) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            
            if(isset($_POST['add'])) {
                $result = addNumbers($num1, $num2);
            }
            
            if(isset($_POST['subtract'])) {
                $result = subtractNumbers($num1, $num2);
            }
            
            if(isset($_POST['multiply'])) {
                $result = multiplyNumbers($num1, $num2);
            }
            
            if(isset($_POST['divide'])) {
                $result = divideNumbers($num1, $num2);
            }
        }
    
    ?>
	
	<h1>Perform arithmetic on two numbers</h1>
	
	<form id="calc-form" action="" method="post"> 
		<input type="number" id="num1" name="num1" />
        <br>
		<input type="number" id="num2" name="num2" />
        <br>
        <br>
        <input type="submit" name="add" value="+">
        <input type="submit" name="subtract" value="-">
        <input type="submit" name="multiply" value="*">
        <input type="submit" name="divide" value="/">
	</form>
    Result is: <?php echo $result;?>
</body>