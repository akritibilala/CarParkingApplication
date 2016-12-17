<?php
	$dbusername = "prerit";  
    $dbpassword = "root";  
    $server = "localhost"; 

    $con=mysqli_connect($server,$dbusername,$dbpassword,"parking");
   if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
	else
	//echo "Connected successfully";
	date_default_timezone_set("Asia/Calcutta");
 ?>
