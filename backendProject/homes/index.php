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
    <title>damn so S P I C E E Y Homes</title>
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
    <aside id="toolbar_position">

    <?php

if(!empty($_POST)){

    if($_POST['sortDropdown'] != 'empty'){
        $selectDropDown = $_POST['sortDropdown']; 

    }else{
        echo 'select value other than Select...';
    }

    // ASK RICKI HOW TO DO THE RANGE THINGY
    $rangePrice = $_POST['rangePrice'];
    $rangeLotSize = $_POST['rangeLotSize'];

}

            
    ?>
        <p>
        <form action="index.php" method="post">
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
    </aside>

    <?php 
        // $query = "SELECT homeName, homeNamePrint, price, numRooms, numBaths, numParks, lotSize from housetbl";

        // if($result = $dbcnx -> query($query)){

        //     while($row = $result ->fetch_array(MYSQLI_ASSOC)){

        // 
        // IF IN DOUBT OR IF ANYTHING GOES WRONG, DELETE COMMENT BELOW !!
        //          vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
        $results = getResults($dbcnx, "*");
       
        //
        //SORTING SHOULD GO HERE BUT BEATS ME...
        //          VVV
        //$results = sortHousesWithDropBox($dbcnx, $sortDropDown);
            
        foreach ($results as $row) {
    ?>


    <article id="main_content">
        <div class="home">
            <img src="\images\thm-<?php echo $row['homeName']; ?>.jpg" alt="thm-<?php echo $row['homeName']; ?>">
            <h2>
                <?php echo $row['homeName']; ?> - $ <?php echo number_format($row['price'], 0,"",","); ?>
            </h2>

            <ul>
                <li> <?php echo $row['numRooms']; ?> bedrooms </li>
                <li> <?php echo $row['numBaths']; ?> bathrooms </li>
                <li> <?php echo $row['numParks']; ?> carparks </li>
            </ul>
            <a href="home-details.php?homeName=<?php echo $row['homeName'];?>">
                Find out more
            </a>
            <br>
            <a href="edit-a-home.php?homeName=<?php echo $row['homeName'];?>">
                edit this home
            </a>

            <br>
            <a href="remove-a-home.php?homeName=<?php echo $row['homeName'];?>">
                delete this home
            </a>


    </article> <?php
            }
            

        $result ->close();
    ?> </body> </html>