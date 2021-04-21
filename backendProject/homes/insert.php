<?php
require("includes/initialisation.php");

if(isset($_POST['homeName'])) {
	$homeName = $_POST['homeName'];
	$homePrintName = $_POST['homePrintName'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$numRooms = $_POST['numRooms'];
	$numBaths = $_POST['numBaths'];
	$numParks = $_POST['numParks'];
	$lotSize = $_POST['lotSize'];
	$orderNum = $_POST['orderNum'];
}


$query = "INSERT INTO houseTbl (homeName, homeNamePrint, price,
 description, 
numRooms, numBaths, numParks, lotSize, orderNum) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
	
	if (!($stmt = $dbcnx->prepare($query))) {
		echo "Prepare failed: " . $dbcnx->errno . " " . $dbcnx->error;
	}

    $stmt->bind_param("ssisiiidi", $homeName, $homePrintName, $price, $description, $numRooms, $numBaths, $numParks, $lotSize, 
        $orderNum);
	
	if (!$stmt->execute()) {
		echo "Execute failed: " . $stmt->errno . " " . $stmt->error;
	}

$stmt->close();
$dbcnx->close();
?>

<html>
<head>
<title>Home added</title>
</head>

<body>

</body>
</html>