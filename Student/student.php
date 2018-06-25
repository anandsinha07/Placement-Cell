<?php
$con = mysqli_connect("127.0.0.1", "root", "newpassword", "mydb");

$name = $_POST['studentname'];
$father = $_POST['fathername'];
$mother = $_POST['mothername'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$rollno = $_POST['rollno'];
$division = $_POST['division'];
$email = $_POST['emailid'];
$mobile = $_POST['mobileno'];
$percentage = $_POST['percentage'];

//print_r($_POST);

$query = "insert into studentdetails values('$name', '$father', '$mother', '$address', '$gender', '$rollno', '$division', '$email', '$mobile', '$percentage')";
if($con->query($query))
{
    header("refresh:1, url='../Home'");
}


$con->close();

?>