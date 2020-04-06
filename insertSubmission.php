<?php
session_start();

//$actualDate = $_POST['actualDate'];
$weight = $_POST['weight'];
$recycler = $_POST['recName'];
$mateName = $_POST['materialName'];
$currentDate = date('Y-m-d');


$mysqli = new mysqli("localhost","root", "", "earthprotectors") or die (mysqli_error($mysqli));

if ( $mysqli->connect_error) {

	die (" Connection failure" );
}
  

//create table
$submissionQry = " create table if not exists submission 
(submissionID int(25) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
proposedDate varchar(25), actualDate varchar(25), weightInKg int(10),  
pointsAwarded int(10), status varchar(25), collector varchar(25), recycler varchar(25), materialID int(25)) ";
if ($mysqli->query($submissionQry) == TRUE){
    echo " User Table created. ";
}else{
    echo " Failed to create ";
}


$upquery =$mysqli->query("SELECT material.materialID, material.pointsPerKg FROM material WHERE materialName = '$mateName'") or die($mysqli->error);
while($row = $upquery->fetch_assoc()){
    $selMateID = $row['materialID'];
    $multi = $weight * $row['pointsPerKg'];

    //create query
    $sql2 = "INSERT INTO submission values (null,null,'$currentDate','$weight','$multi','Submitted','$_SESSION[username]', '$recycler', '$selMateID')";

    //execute Query
    if ( $mysqli->query($sql2) == TRUE){
        //header('location:recordMaterial.php');
        $uptotal = $mysqli->query("SELECT collector,recycler, SUM(pointsAwarded) FROM submission GROUP BY recycler AND collector ") or die($mysqli->error);
        while($row1 = $uptotal->fetch_assoc()){
            
            $sumtotal = $row1['SUM(pointsAwarded)'];

            $updateTotal ="UPDATE recycler,collector SET collector.totalPoints = '$sumtotal',recycler.totalPoints = '$sumtotal', recycler.ecoLevel = IF($sumtotal >= 100 AND $sumtotal < 500, 'Eco-Saver', 
            IF($sumtotal >= 500 AND $sumtotal < 100, 'Eco-Hero', 'Eco-Warrior')) WHERE recycler.username = '$row1[recycler]' AND collector.username = '$row1[collector]' ";
            //echo '<script>alert("Welcome to Geeks for Geeks")</script>';

            if ($mysqli->query($updateTotal) == TRUE){
                header('location:recordMaterial.php');
                

            }else {
                echo " Failed to update";		
            }
        }
    } else {
        echo " Failed to insert";
    }
}
?>