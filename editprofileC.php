<?php
session_start();
	include 'connection.php';
	if (isset($_POST['update_profile'])) {
		$user = $_SESSION['username'];
		$fullName = $_POST['Fullname'];
    	$password = $_POST['Password'];
		$update_profile = $mysqli->query("UPDATE collector SET fullName = '$fullName',password = '$password' WHERE username = '$user'");
	if ($update_profile) {
		header("Location: index2.php");
	} else {
		echo $conn->error;
	}
}
?>