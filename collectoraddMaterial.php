<?php
session_start();
$username = $_SESSION['username'];
$materialID = $_POST['mId'];



//connect to database
$conn = new mysqli('localhost', 'root', '', '');

$sqlDB = " create database if not exists EarthProtectors";

$conn->query($sqlDB);

if ( $conn->connect_error) {

	die (" Connection failure" );
}

echo " Connected Successfully";

//create colmaterial table
$registerDB = " use EarthProtectors ";
$conn->query($registerDB);
$colmaterialQry = " create table if not exists colmaterial (materialID int(25) , username varchar(25))";
if ($conn->query($colmaterialQry) == TRUE){
    echo " User Table created. ";
}else{
    echo " Failed to create ";
}

//create query
    $sql2 = " INSERT INTO colmaterial values('$materialID','$username'); ";
    echo "query " . $sql2;

    //execute Query
    if ( $conn->query($sql2) == TRUE){
        header('location:addedMaterial.php');
        } else {
        echo " Failed to Register";
    }


?>