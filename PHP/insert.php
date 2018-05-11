<?php

$conn = mysqli_connect('localhost','root','','test');

if(!$conn)
{
	die('Connection failed!'.mysqli_error($conn));
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$university = $_POST['university'];
$cgpa = $_POST['cgpa'];
$publications = $_POST['publications'];
$research = $_POST['research'];

$sql = "INSERT INTO `students`(`ID`, `Name`, `Password`, `Email`, `Uni_name`, `CGPA`, `Publications`, `Research`, `University`, `Date`, `Remaing`) VALUES ('','$username','$password','$email','$university','$cgpa','$publications','$research','','','')";





if(mysqli_query($conn,$sql))
{
	header('location:../HTML/login.php');
}
else
{
	echo mysqli_error($conn);
}

?>