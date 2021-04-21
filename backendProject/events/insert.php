//insert values

<?php

require("../includes/initialisation.php");
require("../includes/functions.php");

    if(!empty($_POST)){

        $eventName = sanitiseInputs($_POST['eventName']);
        $eventType = sanitiseInputs($_POST['eventType']);
        $eventDesc = sanitiseInputs($_POST['description']);
        $price = sanitiseInputs($_POST['price']);
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $location = sanitiseInputs($_POST['location']);

        $output = insertNewEvent($dbcnx, $eventName, $eventType,$eventDesc,$price,$startDate,$endDate, 
        $location);
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
    <form action="insert.php" method="post" enctype='multipart/form-data'>
        event name: <input type="text" name="eventName">
		<br>
        event type: <input type="number" name="eventTypeId">
        <br>
        event description: <textarea name="description"></textarea>
        <br>
        price: <input type="number" name="price">
		<br>
        start date: <input type="date" name="startDate">
        <br>
        end date: <input type="date" name="endDate">
        <br>
        location: <input type="number" name="location">
        <br>
        <input type="file" name="pic" accept="image/*"> 

        <!-- to upload files/photos^^^^ -->
        <input type="submit" value="Add this event">
    </form>

    <P>
		<?php
			echo $output;
		?>
	</P>

</body>
</html>