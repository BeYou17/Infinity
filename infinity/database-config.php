<?php
   // try to conncet to database
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "infinity";
// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {  
    //header("Location: site_maintenance.php");
    echo "no connection";
}

?>


