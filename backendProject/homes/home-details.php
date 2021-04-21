<?php
    require("../includes/initialisation.php");
    require("../includes/functions.php");



    if(isset($_GET['homeName'])) {

        $homeName = $_GET['homeName'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>damn so S P I C E E Y Homes</title>
</head>
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
<body>
    <header>
        <h1 class="header_logo">
            <a href="/">
                so damn S P I C E E E Y Homes
            </a>
        </h1>

    </header>


    <nav id="menu">
        <ul class= "menu_list">
            <li class="item">
                <a href = "index.php">
                    home
                </a>
            </li>
            <li class="item">
                <a href = "singleStorey.php">
                    Single - storey houses
                </a>
            </li>
            <li class="item">
                <a href = "doubleStorey.php">
                    Double - storey houeses
                </a>
            </li>
            <li class="item">
                <a href = "add-a-home.php">
                    add-a-home
                </a>
            </li>

            <li class="item">
                <a href = "contactUs.php">
                    Contact Us
                </a>
            </li>
    </nav> 
    <aside id="toolbar_position">
        <p>
            <h4 class="toolbar_text">
                sort by:
            </h4>
            <select>
                <option value="increasePrice"> price increasing</option>
                <option value="decreasePrice"> price decreasing</option>
                <option value="increaseLotSize"> lot size increasing</option>
                <option value="decreaseLotSize">lot size decreasing</option>
                <option value="increaseRoom"> room number increasing</option>
                <option value="decreaseRoom"> room number decreasing</option>
                <option value="a2z"> A to Z</option>
                <option value="z2a">Z to A</option>
            </select>
        </p>
        <p>
            <h4 class="toolbar">
                price:
            </h4>
            <input id="range" type="range" min="10000" max="1000000" value="50">
        </P>
        <p>
            <h4 class="toolbar">
                lot size:
            </h4>

            <input id="range" type="range" min="10" max="100" value="50">
        </P>


    </aside>

    <?php 
        // $query = "SELECT homeName, homeNamePrint, price, numRooms, numBaths, numParks, lotSize from housetbl";

        // if($result = $dbcnx -> query($query)){

        //     while($row = $result ->fetch_array(MYSQLI_ASSOC)){


        $results =getPickyRow($dbcnx, "*", $homeName);
        //var_dump($results);
        foreach ($results as $row) {
    ?>

        
        <article id = "main_content">
            <div class="home">
                <img src="\images\<?php echo $row['homeName']; ?>.jpg" alt ="<?php echo $row['homeName']; ?>">
                <h2> 
                    <?php echo $row['homeName']; ?> - $ <?php echo number_format($row['price'], 0,"",","); ?> 
                </h2>

                <ul>
                    <li> <?php echo $row['numRooms']; ?> bedrooms </li>
                    <li> <?php echo $row['numBaths']; ?> bathrooms </li>
                    <li> <?php echo $row['numParks']; ?> carparks </li>
                    <li> <?php echo $row['lotSize']; ?> lot size </li>
                </ul>
                <P>
                    <?php echo $row['description']; ?>
                </P>
   
        </article>     
        
    <?php
        }

        $result ->close();
    ?>
</body>
</html>