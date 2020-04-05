<?php
session_start();
	include 'connection.php';
	if (isset($_POST['update_profile'])) {
		$user = $_SESSION['username'];
		$fullname = $_POST['Fullname'];
    	$password = $_POST['Password'];
		$update_profile = $mysqli->query("UPDATE recycler SET fullname = '$fullname',password = '$password' WHERE username = '$user'");
	if ($update_profile) {
		header("Location: index.php");
	} else {
		echo $conn->error;
	}
}
?>