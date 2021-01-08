<?php 
   Session_start();
   include('database-config.php');

   header('location:mobile.php');

   $event_name = $_POST['game'];
   $event_id = $_POST['id'];
   $date = $_POST['edate'];
   $time = $_POST['etime'];

   $sql = "insert into event(event_name, event_id, date, time) values ('$event_name','$event_id','$date','$time')";

   if(!mysqli_query($con,$sql)){
       echo"Not Inserted";
   } else {
       echo"Inserted";
   }
?>