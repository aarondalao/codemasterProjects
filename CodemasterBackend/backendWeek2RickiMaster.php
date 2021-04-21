<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>T-shirt form</title>
</head>

<body>
	
	<h1>Get your printed tshirts now</h1>
	
	<form id="contact-form" action="tshirt-submitted.php" method="post">
		
			<label for="name">First name</label>
			<input type="text" id="fname" name="fName" />
			<br>
			<br>
			<label for="name">Last name</label>
			<input type="text" id="lname" name="lName" />
			<br>
			<br>
			<label for="phone">Phone number</label>
			<input type="text" id="phone" name="phone" />
			<br>
			<br>
			<label for="email">Email</label>
			<input type="text" id="email" name="email" />
			<br>
			<br>
			<label for="message">Message on t-shirt</label>
			<textarea id="message" name="message"></textarea>
			<br>
			<br>
			<label for="numTshirts">Number of t-shirts</label>
			<input type="number" id="numTshirts" name="numTshirts">
			<br>
			<br>
			<input type="submit" name="submit" value="Get in touch!">

	</form>
	
</body>
</html>