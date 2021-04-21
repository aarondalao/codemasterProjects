    <?php
        require("../includes/initialisation.php");
        require("../includes/functions.php");

        if(isset($_GET['homeName'])){
            $homeName = $_GET['homeName'];
        }
        $results = deleteHome($dbcnx, $homeName);
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
    
    <?php 
        $results = getResults($dbcnx, "*");
        
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