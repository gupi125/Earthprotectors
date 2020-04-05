<?php
$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Email = $_POST["Email"];
$Fullname = $_POST["Fullname"];

// 1. Connect to Databse 
$conn = new mysqli("localhost", "root", "", "earthprotectors");

if ($conn->connect_error) {
    die(" Connection failure");
}

$sql = " select * from recyclersignup;";
$results = $conn->query($sql);
if ($results->num_rows > 0) {

    while ($row = $results->fetch_assoc()) {
        if ($Username  ==  $row["Username"] and $Password == $row["Password"]
        and $Email == $row["Email"] and $Fullname == $row["Fullname"]) {
            $userExists = true;
        }
    }
} else{

}
if ($userExists){
    echo "<h1>User already exist!</h1>";
    header("Refresh: 3; url=recyclersignupView.php");
}
else {
    // create query
    $sql = "insert into recyclersignup (Username, Password, Email, Fullname) 
values ('$Username', '$Password', '$Email','$Fullname');";

    // Execute Query 
    if ($conn->query($sql) == TRUE) {
        echo "<h1>User registered successfully</h1>";
        header("Refresh: 3; url=recyclersigninView.php");
    } else {
        echo "<h1>Failed to Register</h1>";
        header("Refresh: 3; url=recyclersignupView.php");
    }
}
$conn->close();
?>