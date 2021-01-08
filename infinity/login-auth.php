<?php 

Session_start();
include('database-config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$qu = " select * from signup where email = '$email' && password = '$password' ";
$result = mysqli_query($con, $qu);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    header('location:content-page.php');
}
else {
    header('location:login.php');
}

?>


