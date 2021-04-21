<?php
require("includes/initialisation.php");
require($mainPath . "includes/functions.php");
?>
<html>
<head>
<title>Great Value First Homes</title>
</head>

<body>
	<?php
	$results = getResults($dbcnx, "*");
	foreach ($results as $row) {
	?>
	
	<div class="home">
	  <img src="images/thm-<?php echo $row['homeName'];?>.jpg">
	  <h2><?php echo $row['homeNamePrint'];?> - $<?php echo number_format($row['price'], 0, "", ",");?></h2>
		<ul>
			<li><?php echo $row['numRooms'];?> bedrooms</li>
			<li><?php echo $row['numBaths'];?> bathrooms</li>
			<li><?php echo $row['numParks'];?> car garage </li>
		</ul>
		<a href="home-details.php?home=<?php echo $row['homeName'];?>">
			Find out more
		</a>
	</div>
	
	<?php
	}
	?>
</body>
</html>