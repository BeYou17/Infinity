<?php 

Session_start();
include('database-config.php');
header('location:profile.php');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$dob = $_POST['dob'];


$qu = " select * from profile where name = '$name' && email = '$email' && mobile = '$mobile' && dob = '$dob' ";
$result = mysqli_query($con, $qu);
$num = mysqli_num_rows($result);
if($num == 1){
    echo"Name is already Taken";
}
else {
    $que = " insert into profile(name, email, mobile, dob) values ('$name', '$email', '$mobile', '$dob') ";
    mysqli_query($con, $que); 
}
$_POST['name'] = $name;
$_POST['email'] = $email;
$_POST['mobile'] = $mobile;
$_POST['dob'] = $dob;
?>

