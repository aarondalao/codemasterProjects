//select * where

<?php
    require("../includes/initialisation.php");
    require("../includes/functions.php");
    if(isset($_GET['eventID'])) {

        $eventID = $_GET['eventID'];
    }

    echo $eventID;
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
<?php 
        // $query = "SELECT homeName, homeNamePrint, price, numRooms, numBaths, numParks, lotSize from housetbl";

        // if($result = $dbcnx -> query($query)){

        //     while($row = $result ->fetch_array(MYSQLI_ASSOC)){


        $results =getPickyRow($dbcnx, "*", $eventID);
        //var_dump($results);
        foreach ($results as $row) {
    ?>

    <article id = "main_content">
            <div class="event">
                <!-- <img src="\images\.jpg" alt =""> -->
                <h2> 
                    <?php echo $row['eventName']; ?> - $ <?php echo number_format($row['price'], 0,"",","); ?> 
                </h2>

                <ul>
                    <li> <?php echo $row['eventTypeId']; ?> event type </li>
                    <li> <?php echo $row['startDate']; ?> start date </li>
                    <li> <?php echo $row['endDate']; ?> end date </li>
                    <li> <?php echo $row['location']; ?> location </li>
                </ul>
                <P>
                    <?php echo $row['eventDesc']; ?>
                </P>
   
        </article>

    <?php
        }

        $result ->close();  
            
    ?>
</body>
</html>