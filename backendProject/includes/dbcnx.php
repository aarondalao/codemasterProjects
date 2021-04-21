<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'housedb';

/*$dbcnx = mysqli_connect($hostname,$username,$password,$dbname);

   if(mysqli_connect_errno()) {
      echo "Connection Failed: " . mysqli_connect_errno();
      exit();
   } */

$dbcnx = new mysqli($hostname,$username,$password,$dbname);

if ($dbcnx->connect_errno) {
	echo "<h2>Error " . $dbcnx->connect_errno . "</h2>";
   //printf("Connect failed: %s\n", $dbcnx->connect_error);
   echo $error = $dbcnx->connect_errno;
    exit();

} 
else{
   // echo $error =$dbcnx->connect_errno;
}

?>
