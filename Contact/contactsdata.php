<?php
$con = mysqli_connect("127.0.0.1", "root", "newpassword", "mydb");

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['msg'];

//print_r($_POST);

$query = "insert into ContactDetails values('$name', '$email', '$phone', '$message')";
if($con->query($query))
{
    header("refresh:1, url='../Home'");
}


$con->close();

?>