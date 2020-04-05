<?php
include "connection.php";

$id= $_POST['entermaterialID'];

if (isset($_GET['materialID']))
{
$material = $_GET['materialID'];
$get_material = $conn->query("SELECT * FROM material WHERE materialID = '$material'");
$material_data = $get_material->fetch_assoc();
} 
?>
