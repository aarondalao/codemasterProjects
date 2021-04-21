//select *


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
    <title>Document</title>
</head>
<body>


<nav id="menu">
        <ul class="menu_list">
            <li class="item">
                <a href="index.php">
                    home
                </a>
            </li>

            <li class="item">
                <a href="insert.php">
                    add an event
                </a>
            </li>
            
    </nav>

<h1> events </h1>
<?php

    $results = getResults($dbcnx, "*");
    foreach ($results as $row) {
?>


<article id="main_content">
        <div class="events">
            <h3><?php echo $row['eventName']; ?> </h3>
            <ul>
                <li> start date <?php echo $row['startDate']; ?> </li>
                <li> start date <?php echo $row['endDate']; ?> </li>

            </ul>
            <p>
                asdfasd<?php echo $row['eventDesc']; ?>
                <?php echo $row['price']; ?>
             </p>
             <a href="details.php?eventID=<?php echo $row['eventID'];?>">
                Find out more
            </a>

    </article>
    <?php
            }
        $result ->close();
    ?> 
</body>
</html>