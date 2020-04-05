<?php
session_start();
//connect to database
$mysqli = new mysqli("localhost","root", "", "earthprotectors") or die (mysqli_error($mysqli));

if ( $mysqli->connect_error) {

	die (" Connection failure" );
}

$selSID = $_SESSION['selectSID'];
$currentDate = date('Y-m-d');


$upquery =$mysqli->query("SELECT material.materialID, material.pointsPerKg FROM material WHERE materialName = '$_POST[materialName]'") or die($mysqli->error);
while($row = $upquery->fetch_assoc()){
    $upMateID = $row['materialID'];
    $multi = $_POST['weight'] * $row['pointsPerKg'];
    $sumtotal = "";
    

    $updatedSub = "UPDATE submission JOIN recycler ON (submission.recycler = recycler.username) 
    SET submission.weightInKg = '$_POST[weight]', submission.actualDate = '$currentDate', 
    submission.materialID = '$row[materialID]', submission.status = 'Submitted', 
    submission.pointsAwarded = '$multi' WHERE submission.submissionID = '$selSID'";
    
    //execute Query
    if ($mysqli->query($updatedSub) == TRUE){
        //header('location:recordMaterial.php');
        $uptotal = $mysqli->query("SELECT recycler, SUM(pointsAwarded) FROM submission GROUP BY recycler ") or die($mysqli->error);
        while($row1 = $uptotal->fetch_assoc()){
            
            $sumtotal = $row1['SUM(pointsAwarded)'];

            $updateTotal ="UPDATE recycler SET totalPoints = '$sumtotal', ecoLevel = IF($sumtotal >= 100 AND $sumtotal < 500, 'Eco-Saver', 
            IF($sumtotal >= 500 AND $sumtotal < 100, 'Eco-Hero', 'Eco-Warrior')) WHERE username = '$row1[recycler]' ";

            if ($mysqli->query($updateTotal) == TRUE){
                echo '<script type="text/javascript">';
                echo ' alert("Record successful!")';  //not showing an alert box.
                echo '</script>';
                header('location:recordMaterial.php');
               
            }else {
                echo " Failed to update";		
            }
            

        }
    } else {
        echo " Failed to update";		
    }
}





?>