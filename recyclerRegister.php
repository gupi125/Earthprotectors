<?php

$username = $_POST['UserName'];
$password = $_POST['Password'];
$fullname = $_POST['FullName'];


//connect to database
$conn = new mysqli('localhost', 'root', '', '');

$sqlDB = " create database if not exists earthprotectors";

$conn->query($sqlDB);

if ( $conn->connect_error) {

	die (" Connection failure" );
}

echo " Connected Successfully";

//create register table
$registerDB = " use earthprotectors ";
$conn->query($registerDB);
$recyclerQry = " create table if not exists recycler (username varchar(25) PRIMARY KEY,
 password varchar(25), fullname varchar(25), totalPoints int(10), ecoLevel varchar(25))";
if ($conn->query($recyclerQry) == TRUE){
    echo " User Table created. ";
}else{
    echo " Failed to create ";
}

$userExists = false;
//check if the user already register
$sql = " select * from recycler" ;
$results = $conn->query($sql);
 if ( $results->num_rows > 0) {
     echo " Values from database" . "<br>";
    while($row = $results->fetch_assoc()){
        if($row["fullname"] == $fullname || $row["username"] == $username){
            $userExists = true;
        }
    }
}
 	else {
 	echo " None of the users registered ";
 }

 if($userExists){
     echo " user exists ";
 }else{
//create query
    $sql2 = " INSERT INTO recycler values('$username','$password','$fullname',0, 'Newbie') ";
    echo "query " . $sql2;

    //execute Query
    if ( $conn->query($sql2) == TRUE){
        header('location:LoginandRegister.php');
        } else {
        echo " Failed to Register";
    }
}

?>