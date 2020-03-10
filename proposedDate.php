<?php

session_start();

$proposedDate = $_POST['ProposedDate'];
$ColUsername = $_SESSION['collector'];;



//connect to database
$conn = new mysqli('localhost', 'root', '', '');

$sqlDB = " create database if not exists earthprotectors";

$conn->query($sqlDB);

if ( $conn->connect_error) {

	die (" Connection failure" );
}

echo " Connected Successfully";



$useDB = " use earthprotectors ";
$conn->query($useDB);
$submissionQry = " create table if not exists submission 
(submissionID int(25) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
proposedDate varchar(25), actualDate varchar(25), weightInKg int(10), 
pointsAwarded int(10), status varchar(25), collector varchar(25)) ";
if ($conn->query($submissionQry) == TRUE){
    echo " User Table created. ";
}else{
    echo " Failed to create ";
}

//create query
$sql2 = "INSERT INTO submission values (null,'$proposedDate',null,0,0,'Proposed','$ColUsername');";
echo "query " . $sql2;

//execute Query
if ( $conn->query($sql2) == TRUE){
    echo '<script language="javascript">';
    echo 'alert("Successful appointment!")';
    echo '</script>';
    header('location:makeappointment.php');
} else {
    echo " Failed to submit";		
}
?>