//edit values

<?php

require("../includes/initialisation.php");
require("../includes/functions.php");


if(isset($_GET['homeName']))
{
$name = sanitiseInputs($_GET['homeName']);

$homePrintName =sanitiseInputs($_POST['homePrintName']);
$price = sanitiseInputs($_POST['price']);
$description = sanitiseInputs($_POST['description']);


$result = getPickyRow($dbcnx, "*",$name);



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit a home</title>
    <style>
    body{
        display: grid;

        font-family: Georgia, serif;
        font-size: 100%;
        line-height:175%;
        margin: 0 10% 0;
        background-color: lightslategrey;
    }
    header{
        color: #ccc;
        text-decoration: none;
        font-family: arial,helvetica,sans-serif;
        font-style: normal;
        line-height: 1.3;
        font-size: 20px;
        font-weight: normal;
        max-width: 500px;
        min-width: 200px;
    }
    #menu{
        display: table-cell;
        text-align: right;
        vertical-align: top;
    }  
    .menu_list{
        list-style-type: none;
        margin:0;
        padding:0;
    }
</style>

</head>
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
    <!-- <aside id="toolbar_position">

        <p>
        <form action="index.php" method
        +-="post">
            <h4 class="toolbar_text">
                sort by:
            </h4>
            <select name ="sortDropdown">
                <option value="0"> Select...</option>
                <option value="1"> price increasing</option>
                <option value="2"> price decreasing</option>
                <option value="3"> lot size increasing</option>
                <option value="4"> lot size decreasing</option>
                <option value="5"> room number increasing</option>
                <option value="6"> room number decreasing</option>
                <option value="7"> A to Z</option>
                <option value="8">Z to A</option>
            </select>
            
        </p>
        <p>
            <h4 class="toolbar">
                price:
            </h4>
            <input name='rangePrice' id="rangePrice" type="range" min="10000" max="1000000" value="50">
        </P>
        <p>
            <h4 class="toolbar">
                lot size:
            </h4>

            <input name='rangeLotSize' id="rangeLotSize" type="range" min="10" max="100" value="50">
        </P>
        <input type="submit" value="sort">
        </form>
    </aside> -->

   

    <form action="update.php" method="post" >
        <?php 
           
            foreach ($result as $row) {
        ?>
		Home name: <input type="text" name="homeName" value="<?php echo $name; ?>">
		<br>
		Home Print name: <input type="text" name="homeNamePrint" value="<?php  echo $row['homePrintName']; ?>">
		<br>
		Price: <input type="number" name="price" value="<?php  echo $row['price']; ?>">
		<br>
		Description:
		<textarea name="description"> <?php  echo $row['description']; ?> </textarea>
		<br>
		Number of bedrooms: <input type="number" name="numRooms" value="<?php echo $row['numRooms']; ?>">
		<br>
		Number of bathrooms: <input type="number" name="numBaths" value="<?php echo $row['numBaths']; ?>">
		<br>
		Number of parks: <input type="number" name="numParks" value="<?php echo $row['numParks']; ?>">
		<br>
		Lot size: <input type="text" name="lotSize" value="<?php echo $row['lotSize']; ?>">
		<br>
		Order: <input type="number" name="orderNum" value="<?php echo $row['orderNum']; ?>">
		<br>
		<input type="submit" name="submit" value="edit this home">
	</form>

    <P>
		<?php
            }
			echo $output;
		?>
	</P>

</body>
</html>