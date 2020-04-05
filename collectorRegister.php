<?php
$username = $_POST['UserName'];
$password = $_POST['Password'];
$fullName = $_POST['FullName'];
$address = $_POST['Address'];
$week = $_POST['WeekOfDays'];
$timeFrom = $_POST['TimeFrom'];
$timeTo = $_POST['TimeTo'];

//connect to database
$conn = new mysqli('localhost', 'root', '', '');

$sqlDB = " create database if not exists earthprotectors";

$conn->query($sqlDB);

if ( $conn->connect_error) {

	die (" Connection failure" );
}

echo " Connected Successfully";

//create register table
$registerDB = " use earthprotectors";
$conn->query($registerDB);
$collectorQry = " create table if not exists collector(username varchar(25) PRIMARY KEY, 
password varchar(25), fullname varchar(25),totalPoints int(25), address varchar(255), 
week varchar(25), timeFrom varchar(25), timeTo varchar(25)) ";
if ($conn->query($collectorQry) == TRUE){
    echo " User Table created. ";
}else{
    echo " Faled to create ";
}

$userExists = false;
//check if the user already register
$sql = " select * from collector" ;
$results = $conn->query($sql);
if ( $results->num_rows > 0) {
    echo " Values from database" . "<br>";
    while($row = $results->fetch_assoc()){
        if($row["fullName"] == $fullName && $row["username"] == $username){
            $userExists = true;
        }
    }
}else {
    echo " None of the users registered ";
}

if($userExists){
    echo " user exists ";
}else{
    //create query
    $sql2 = " INSERT INTO collector values ('$username','$password',
    '$fullName',0,'$address','$week','$timeFrom','$timeTo') ";
    echo "query " . $sql2;

    //execute Query
    if ( $conn->query($sql2) == TRUE){
        header('location:LoginandRegister.php');
    } else {
        echo " Failed to Register";
    }
}




?>