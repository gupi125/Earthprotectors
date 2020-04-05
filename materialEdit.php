<?php
session_start();
	include 'connection.php';
	if (isset($_POST['update_material'])) {
		$material = $_SESSION['materialID'];
		$materialName = $_POST['materialName'];
        $description = $_POST['description'];
        $pointsPerKg = $_POST['pointsPerKg']
		$update_material = $mysqli->query("UPDATE material SET materialName = '$materialName',description = '$description' WHERE materialID = '$materialID'");
	if ($update_material) {
		header("Location: maintainMaterial.php");
	} else {
		echo $conn->error;
	}
}
?>