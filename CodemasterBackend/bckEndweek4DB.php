<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'codemasters';

/*$dbcnx = mysqli_connect($hostname,$username,$password,$dbname);

   if(mysqli_connect_errno()) {
      echo "Connection Failed: " . mysqli_connect_errno();
      exit();
   } */

$dbcnx = new mysqli($hostname,$username,$password,$dbname);

if ($dbcnx->connect_errno) {
	echo "<h2>Error " . $dbcnx->connect_errno . "</h2>";
    printf("Connect failed: %s\n", $dbcnx->connect_error);
    exit();
}

$query = "SELECT * FROM events";

if($result = $dbcnx->query($query)){
    while($row = $result -> fetch_array(MYSQLI_ASSOC)){
        echo $row['eventName'];
    }
}


?>