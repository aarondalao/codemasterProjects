<?php
require("../includes/initialisation.php");
require("../includes/functions.php");

if(isset($_POST['submit'])) {
	$name = $_POST['homeName'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	
}

$update = updateRow($dbcnx, $price, $description, $name);

?>

<html>
<head>
<title>Home edited</title>
</head>

<body>
    <h2><?php echo $update;?> </h2>
</body>
</html>