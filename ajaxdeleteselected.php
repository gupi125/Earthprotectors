<?php
include"dbcon.php"; 
$selected  = $_POST['selected'];
foreach ($selected as $value) {
 $sql = "DELETE FROM material WHERE materialID='$value'";
 if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully $value <br/>";  
 } else {
  echo "Error deleting materials: " . $sql . "<br>" . $conn->error."'"; 
 } 
 
}
?>