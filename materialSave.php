<?php
    include "connection.php";
 
    $materialName = $_POST['materialName'];
    $description = $_POST['description'];
    $pointsPerKg = $_POST['pointsPerKg'];

    $conn = new mysqli('localhost', 'root', '', '');

    $sqlDB = " create database if not exists earthprotectors";
    
    $conn->query($sqlDB);
    
    if ( $conn->connect_error) {
    
        die (" Connection failure" );
    }
    
    echo " Connected Successfully";
    
    //create material table
    $materialDB = " use earthprotectors ";
    $conn->query($materialDB);
//
    $sql ="select * from material where materialID='1'";
    $count = $conn->query($sql);
    if($count->num_rows==0){
        $materialID = "1";
    }else{
        $sql = "select * from material where materialID !='admin' order by materialID desc limit 1";
        $check = $conn->query($sql);
        $row = mysqli_fetch_array($check);
        $materialID = $row[materialID]+1;
    }
    
//
    $materialQry = " create table if not exists material (materialID int(25), materialName varchar(45), description varchar(255), pointsPerKg int(25))";
    if ($conn->query($materialQry) == TRUE){
        echo " Material Table created. ";
    }else{
        echo " Failed to create ";
    }
    
    $materialExists = false;
    
    $sql2 = " select * from material" ;
    $results = $conn->query($sql2);
     if ( $results->num_rows > 0) {
         echo " Values from database" . "<br>";
        while($row = $results->fetch_assoc()){
            if($row["materialName"] == $materialName){
                $materialExists = true;
            }
        }
    }
         else {
         echo " None of the material registered ";
     }
    
     if($materialExists){
         echo " material already exists ";
     }else{
    //create query
        
        $sql3 = " INSERT INTO material values('$materialID','$materialName','$description','$pointsPerKg') ";
        echo "query " . $sql3;
       
    
        //execute Query
        if ( $conn->query($sql3) == TRUE){
            header('location:maintainMaterial.php');
            } else {
            echo " Failed to Add";
        }
    }
    
    
    
?>        