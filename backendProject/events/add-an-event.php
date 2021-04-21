//user form

<?php
require("../includes/initialisation.php");
require("../includes/functions.php");
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
var_dump($_POST);
if(!empty($_POST))
{
$eventName = sanitiseInputs($_POST['eventName']);
$eventType =sanitiseInputs($_POST['eventType']);
$price = sanitiseInputs($_POST['price']);
$eventDesc = sanitiseInputs($_POST['eventDesc']);
$startDate = new dateTime($_POST['startDate']);
$startDate -> format('Y/m/d H:i:s');
$endDate = new dateTime($_POST['endDate']);
$endDate -> format('Y/m/d H:i:s');
$location =sanitiseInputs($_POST['location']);


echo $output = insertNewEvent($dbcnx,$eventName,$eventType,$eventDesc, $startDate, $endDate,$location, $price,);

}
?>


    <form action="add-an-event.php" method="post">
		event name<input type="text" name="eventName">
		<br>
		event type <input type="number" name="eventType">
		<br>
		Price: <input type="number" name="price">
		<br>
		Description:
		<textarea name="eventDesc"></textarea>
		<br>
		start Date <input type="date" name="startDate">
		<br>
		end Date: <input type="date" name="endDate">
		<br>
		location: <input type="number" name="location">
		
		<input type="submit" value="add this event!">
	</form>

    <P>
		<?php
			//echo $output;
		?>
	</P>

</body>
</html>