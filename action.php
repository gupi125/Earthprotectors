<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', '');

$input = filter_input_array(INPUT_POST);

$materialName = mysqli_real_escape_string($connect, $input["materialName"]);
$description = mysqli_real_escape_string($connect, $input["description"]);
$pointsPerKg =mysqli_real_escape_string($connect,$input['pointsPerKg'])

if($input["action"] === 'edit')
{
 $query = "
 UPDATE material 
 SET materialName = '".$materialName."', 
 description = '".$description."' 
 pointsPerKg ='".$pointsPerKg."'
 WHERE matarialID = '".$input["matarialID"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM material 
 WHERE matarialID = '".$input["matarialID"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>

