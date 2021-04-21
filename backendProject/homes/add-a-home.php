<?php
    require("../includes/initialisation.php");
    require("../includes/functions.php");
?>

<html>

<head>
	<title>Add a home</title>
</head>
<style>
	body {
		display: grid;

		font-family: Georgia, serif;
		font-size: 100%;
		line-height: 175%;
		margin: 0 10% 0;
		background-color: lightslategrey;
	}

	header {
		color: #ccc;
		text-decoration: none;
		font-family: arial, helvetica, sans-serif;
		font-style: normal;
		line-height: 1.3;
		font-size: 20px;
		font-weight: normal;
		max-width: 500px;
		min-width: 200px;
	}

	#menu {
		display: table-cell;
		text-align: right;
		vertical-align: top;
	}

	.menu_list {
		list-style-type: none;
		margin: 0;
		padding: 0;
	}
</style>

<body>
	<header>
		<h1 class="header_logo">
			<a href="/">
				so damn S P I C E E E Y Homes
			</a>
		</h1>

	</header>

	<nav id="menu">
		<ul class="menu_list">
			<li class="item">
				<a href="index.php">
					home
				</a>
			</li>
			<li class="item">
				<a href="singleStorey.php">
					Single - storey houses
				</a>
			</li>
			<li class="item">
				<a href="doubleStorey.php">
					Double - storey houeses
				</a>
			</li>
			<li class="item">
				<a href="add-a-home.php">
					add-a-home
				</a>
			</li>
			<li class="item">
				<a href="contactUs.php">
					Contact Us
				</a>
			</li>
	</nav>

<?php

if(!empty($_POST))
{
$homeName = sanitiseInputs($_POST['homeName']);
$homeNamePrint =sanitiseInputs($_POST['homeNamePrint']);
$price = sanitiseInputs($_POST['price']);
$description = sanitiseInputs($_POST['description']);
$numRooms = sanitiseInputs($_POST['numRooms']);
$numBaths = sanitiseInputs($_POST['numBaths']);
$numParks =sanitiseInputs($_POST['numParks']);
$lotSize = sanitiseInputs($_POST['lotSize']);
$orderNum = sanitiseInputs($_POST['orderNum']);

$output = insertNewHome($dbcnx, $homeName, $homeNamePrint, $price, $description, $numRooms, $numBaths, $numParks,
$lotSize, $orderNum );

}
?>
	<form action="add-a-home.php" method="post" enctype='multipart/form-data'>
		Home name: <input type="text" name="homeName">
		<br>
		Home Print name: <input type="text" name="homeNamePrint">
		<br>
		Price: <input type="number" name="price">
		<br>
		Description:
		<textarea name="description"></textarea>
		<br>
		Number of bedrooms: <input type="number" name="numRooms">
		<br>
		Number of bathrooms: <input type="number" name="numBaths">
		<br>
		Number of parks: <input type="number" name="numParks">
		<br>
		Lot size: <input type="text" name="lotSize">
		<br>
		Order: <input type="number" name="orderNum">
		<br>
		upload photo: <input type="file" name="photoUpload" accept="image/*">
		<br>
		<input type="submit" value="Add this home">
	</form>

	<P>
		<?php
			echo $output;
		?>
	</P>


</body>

</html>