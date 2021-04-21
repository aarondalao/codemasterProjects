<?php
include("sanitisation.php");

	$fName = sanitiseInput($_POST['fName']);
	$lName = sanitiseInput($_POST['lName']);
	$phone = sanitiseInput($_POST['phone']);
	$email = sanitiseInput($_POST['email']);
	$message = sanitiseInput($_POST['message']);
	$numTshirts = sanitiseInput($_POST['numTshirts']);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>T-shirt form</title>
</head>

<body>
	<h1>Thanks <?php echo $fName;?>!</h1>
	
	<p>
		Thank you for your order of <?php echo $numTshirts; ?> t-shirts with "<?php echo $message;?>" printed on them.
	</p>
	

</body>
</html>