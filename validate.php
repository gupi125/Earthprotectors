<?php
session_start();

$name = $_POST['username'];
$pass = $_POST['password'];

$_SESSION['username'] = $name;

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

$sql = "select * from recycler where username = '$name' and password = '$pass';";

$result = $conn->query($sql);

if ($result->num_rows > 0)
{
	header('location:index.php');
	} 
else{
	header('location:LoginandRegister.php');
}	

?>