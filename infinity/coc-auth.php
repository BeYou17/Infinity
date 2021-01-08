<?php 

Session_start();
include('database-config.php');
header('location:thanks.php');

/*$con = mysqli_connect("localhost", "root", "", "infinity" );

if($con) {
    echo"connection successful";
} else {
    echo"no connection";
} */
$lname = $_POST['lname'];
$lmail = $_POST['lmail'];
$lingameid = $_POST['lingameid'];
$tname = $_POST['tname'];


$qu = " select * from coc where lname = '$lname' && lmail = '$lmail' ";
$result = mysqli_query($con, $qu);
$num = mysqli_num_rows($result);

if($num == 1){
    echo"Name is already Taken";
}
else {
    $que = " insert into coc(lname, lmail, lingameid, tname) values ('$lname', '$lmail', '$lingameid', '$tname') ";
    mysqli_query($con, $que); 
}
?>

