<?php
session_start();

$name1 = $_POST['username'];
$pass1 = $_POST['password'];

$_SESSION['username'] = $name1;

//1. Connect to Database
$conn = new mysqli("localhost", "root", "", "");

if ( $conn->connect_error){
	
	die(" Connection failure");
}
echo "Connected Successfully";

$sql = " create database if not exists EarthProtectors";
$conn->query($sql);

$sqlUse = "use EarthProtectors;";
$conn->query($sqlUse);

$sql1 = "select * from collector where username = '$name1' and password = '$pass1';";

$result1 = $conn->query($sql1);

if ($result1->num_rows > 0)
{
	header('location:index2.php');
	} 
else{
	header('location:LoginandRegister.php');
}	

?>