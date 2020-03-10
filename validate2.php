<?php
session_start();

$name2 = $_POST['username'];
$pass2 = $_POST['password'];

$_SESSION['username'] = $name2;

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

$sql2 = "select * from admin where username = '$name2' and password = '$pass2';";

$result2 = $conn->query($sql);

if ($result2->num_rows > 0)
{
	header('location:index3.php');
	} 
else{
	header('location:LoginandRegister.php');
}	

?>