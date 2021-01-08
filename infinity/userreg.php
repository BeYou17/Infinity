<?php 

Session_start();
include('database-config.php');
header('location:login.php');

/*$con = mysqli_connect("localhost", "root", "", "infinity" );

if($con) {
    echo"connection successful";
} else {
    echo"no connection";
} */

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$qu = " select * from signup where name = '$name' && email = '$email' ";
$result = mysqli_query($con, $qu);
$num = mysqli_num_rows($result);

if($num == 1){
    echo"Name is already Taken";
}
else {
    $query = " insert into signup(name, email, password) values ('$name', '$email', '$password') ";
    mysqli_query($con, $query); 
}
?>
