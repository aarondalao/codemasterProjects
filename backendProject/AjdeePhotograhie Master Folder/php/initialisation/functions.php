<?php

    function display ($dbcnx, $fields) {
        $query = "SELECT" . $fields . "FROM photocatalogtbl"; // CHANGE THIS TO HOUSETBL WHEN NEEDED!

        if(!($stmt = $dbcnx -> prepare($query))){
            echo "Prepare failed: " . $dbcnx -> errno. " " . $dbcnx -> error;
        }

        if (!$stmt->execute()) {
            echo "Execute failed: " . $stmt->errno . " " . $stmt->error;
        }
        
        $res = $stmt->get_result();
	
	    return $res;
    }

    function detailedDisplay($dbcnx, $fields,$homeName){

         $query = "SELECT " . $fields . "FROM photocatalogtbl WHERE homeName = '$homeName'" ; 

         if(!($stmt = $dbcnx -> prepare($query))){
             echo "Prepare failed: " . $dbcnx -> errno. " " . $dbcnx -> error;
         }

         if (!$stmt->execute()) {
             echo "Execute failed: " . $stmt->errno . " " . $stmt->error;
         }

         $res = $stmt->get_result();
	
	     return $res;
     }
     //
     //DO THIS AT HOME !!! 
     //
    function insert($dbcnx,$homeName, $homePrintname, $price, $description, $numRooms, $numBaths, $numParks, $lotSize, $orderNum ){
         $query = "INSERT INTO homestbl (homeName, homePrintname, price, description, 
         numRooms, numBaths, numParks, lotSize, orderNum) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

         if (!($stmt = $dbcnx->prepare($query))) {
             echo "Prepare failed: " . $dbcnx->errno . " " . $dbcnx->error;
         }
    
         $stmt->bind_param("ssisiiidi", $homeName, $homePrintname, $price, $description, $numRooms, $numBaths, $numParks, $lotSize, 
             $orderNum);
        
         if (!$stmt->execute()) {
             echo "Execute failed: " . $stmt->errno . " " . $stmt->error;
         }else{
            $stmt->close();
            $dbcnx->close();
            return $output = "adding home successful";
         }        
      }

    function sanitiseInputs($input){
        $output = htmlspecialchars(strip_tags(trim($input)));

        return $output;
    }
    //
    //
    //I DONT KNOW IF THIS IS THE RIGHT PRACTICE FOR A SORTING TOOLBAR 
    //                         AND I DID WHAT I COULD... oh well
    //
    //
    function sortHousesWithDropBox($dbcnx, $selectDropdown){
        switch($selectDropdown){
            case 0: return $output = 'please choose the others';
                    break;
            case 1: $query = "SELECT * FROM housetbl ORDER BY price asc";
                    break;
            case 2: $query = "SELECT * FROM housetbl ORDER BY price desc";
                    break;
            case 3: $query = "SELECT * FROM housetbl ORDER BY lotSize asc";
                    break;
            case 4: $query = "SELECT * FROM housetbl ORDER BY lotSize desc";
                    break;
            case 5: $query = "SELECT * FROM housetbl ORDER BY numRoom asc";
                    break;
            case 6: $query = "SELECT * FROM housetbl ORDER BY numRoom desc";
                    break;
            case 7: $query = "SELECT * FROM housetbl ORDER BY homename asc";
                    break;
            case 8: $query = "SELECT * FROM housetbl ORDER BY homename desc";
                    break;
        }


        if(!($stmt = $dbcnx -> prepare($query))){
            echo "Prepare failed: " . $dbcnx -> errno. " " . $dbcnx -> error;
        }

        if (!$stmt->execute()) {
            echo "Execute failed: " . $stmt->errno . " " . $stmt->error;
        }
        
        $res = $stmt->get_result();

        return $res;

    }



    function insertNewEvent($dbcnx,$eventName, $eventType, $eventDesc, $startDate, $endDate, $location,$price){
        $query = "INSERT INTO eventstbl (eventName, eventTypeId, eventDesc, 
        startDate, endDate, location,price) VALUES (?, ?, ?, ?, ?, ?, ?)";

        if (!($stmt = $dbcnx->prepare($query))) {
            echo "Prepare failed: " . $dbcnx->errno . " " . $dbcnx->error;
        }
   
        $stmt->bind_param("sisssid", $eventName, $eventType, $eventDesc, $startDate, $endDate, $location,$price);
       
        if (!$stmt->execute()) {
            $output = "Execute failed: " . $stmt->errno . " " . $stmt->error;
        }else{
           $stmt->close();
           $dbcnx->close();
           return $output = "adding event successful";
        }        
     }

     function updateRow ($dbcnx, $price, $description, $name){

        $query = "UPDATE homestbl SET price=?, description=? WHERE homeName = ?";

        if(!($stmt = $dbcnx->prepare($query))) {
            echo "Prepare failed: " . $dbcnx->errno . " " . $dbcnx->error;
        }
        
        $stmt->bind_param("sss", $price, $description, $name);

        if (!$stmt->execute()) {
            $output = "Execute failed: " . $stmt->errno . " " . $stmt->error;
        }else
            $output = "success";

        return $output;
        $stmt->close();
        $dbcnx->close();
     }

     function deleteHome($dbcnx, $homeName){

        $query = "DELETE FROM homestbl WHERE homeName = '$homeName'";

        if(!($stmt = $dbcnx -> prepare($query))){
            echo "Prepare failed: " . $dbcnx -> errno. " " . $dbcnx -> error;
        }

        if (!$stmt->execute()) {
            echo "Execute failed: " . $stmt->errno . " " . $stmt->error;
        }
        
        $res = $stmt->get_result();
	
	    return $res;
     }

?>


