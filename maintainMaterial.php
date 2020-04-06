<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Data Table using Mysqli Database and Bootstrap with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
    body {
        color: #566787;
  background: #f5f5f5;
  font-family: 'Varela Round', sans-serif;
  font-size: 13px;
 }
 .table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
  border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
 .table-title {        
  padding-bottom: 15px;
  background: #0d2438;
  color: #fff;
  padding: 16px 30px;
  margin: -20px -25px 10px;
  border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
  margin: 5px 0 0;
  font-size: 24px;
 }
 .table-title .btn-group {
  float: right;
 }
 .table-title .btn {
  color: #fff;
  float: right;
  font-size: 13px;
  border: none;
  min-width: 50px;
  border-radius: 2px;
  border: none;
  outline: none !important;
  margin-left: 10px;
 }
 .table-title .btn i {
  float: left;
  font-size: 21px;
  margin-right: 5px;
 }
 .table-title .btn span {
  float: left;
  margin-top: 2px;
 }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
  padding: 12px 15px;
  vertical-align: middle;
    }
 table.table tr th:first-child {
  width: 60px;
 }
 table.table tr th:last-child {
  width: 100px;
 }
    table.table-striped tbody tr:nth-of-type(odd) {
     background-color: #fcfcfc;
 }
 table.table-striped.table-hover tbody tr:hover {
  background: #f5f5f5;
 }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    } 
    table.table td:last-child i {
  opacity: 0.9;
  font-size: 22px;
        margin: 0 5px;
    }
 table.table td a {
  font-weight: bold;
  color: #566787;
  display: inline-block;
  text-decoration: none;
  outline: none !important;
 }
 table.table td a:hover {
  color: #2196F3;
 }
 table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
 table.table .avatar {
  border-radius: 50%;
  vertical-align: middle;
  margin-right: 10px;
 }
 
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    } 
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
 .pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    } 
    
 /* Custom checkbox */
 .custom-checkbox {
  position: relative;
 }
 .custom-checkbox input[type="checkbox"] {    
  opacity: 0;
  position: absolute;
  margin: 5px 0 0 3px;
  z-index: 9;
 }
 .custom-checkbox label:before{
  width: 18px;
  height: 18px;
 }
 .custom-checkbox label:before {
  content: '';
  margin-right: 10px;
  display: inline-block;
  vertical-align: text-top;
  background: white;
  border: 1px solid #bbb;
  border-radius: 2px;
  box-sizing: border-box;
  z-index: 2;
 }
 .custom-checkbox input[type="checkbox"]:checked + label:after {
  content: '';
  position: absolute;
  left: 6px;
  top: 3px;
  width: 6px;
  height: 11px;
  border: solid #000;
  border-width: 0 3px 3px 0;
  transform: inherit;
  z-index: 3;
  transform: rotateZ(45deg);
 }
 .custom-checkbox input[type="checkbox"]:checked + label:before {
  border-color: #03A9F4;
  background: #03A9F4;
 }
 .custom-checkbox input[type="checkbox"]:checked + label:after {
  border-color: #fff;
 }
 .custom-checkbox input[type="checkbox"]:disabled + label:before {
  color: #b8b8b8;
  cursor: auto;
  box-shadow: none;
  background: #ddd;
 }
 /* Modal styles */
 .modal .modal-dialog {
  max-width: 400px;
 }
 .modal .modal-header, .modal .modal-body, .modal .modal-footer {
  padding: 20px 30px;
 }
 .modal .modal-content {
  border-radius: 3px;
 }
 .modal .modal-footer {
  background: #ecf0f1;
  border-radius: 0 0 3px 3px;
 }
    .modal .modal-title {
        display: inline-block;
    }
 .modal .form-control {
  border-radius: 2px;
  box-shadow: none;
  border-color: #dddddd;
 }
 .modal textarea.form-control {
  resize: vertical;
 }
 .modal .btn {
  border-radius: 2px;
  min-width: 100px;
 } 
 .modal form label {
  font-weight: normal;
 }
</style> 
<script type="text/javascript">
$(document).ready(function(){
 // Activate tooltip
 $('[data-toggle="tooltip"]').tooltip();
  
 // Select/Deselect checkboxes
 var checkbox = $('table tbody input[type="checkbox"]');
 $("#selectAll").click(function(){
  if(this.checked){
   checkbox.each(function(){
    this.checked = true;                        
   });
  } else{
   checkbox.each(function(){
    this.checked = false;                        
   });
  } 
 });
 checkbox.click(function(){
  if(!this.checked){
   $("#selectAll").prop("checked", false);
  }
 });
    $('#cmdeleteselected').click (function(event) {
  event.preventDefault();
        var selected = new Array();
   $("input:checkbox[name=options]:checked").each(function() {
    selected.push($(this).val());
   });
  var selectedString = selected.join(",");
        $.post("ajaxdeleteselected.php", {selected: selected },
        function(data){
   $('#deleteMaterialModalselected').modal('hide');
            $('.result').html(data);
        });  
    });
});
</script>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 text-center">
            <a href="index3.php" class="site-logo">
              <img src="images/pinterest_profile_image3.jpg" alt="Image" class="img-fluid">
            </a>
          </div>
          <a href="#" class="mx-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                class="icon-menu h3"></span></a>
        </div>
      </div>
      


      
      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          
          <div class="mx-auto">
            <nav class="site-navigation position-relative text-left" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none pl-0 d-lg-block border-none">
                <li class="active"><a href="index3.php" class="nav-link text-left">Home</a></li>
                <li><a href="maintainMaterial.php" class="nav-link text-left">Maintain Meterial Type</a></li>
                <li><a href="viewhistory3.php" class="nav-link text-left">View History</a></li>

                <li><a href="LoginandRegister.php" class="w3-button w3-white w3-border w3-round-large">Log out</a></li>
               
              </ul>                                                                                                                                                                                                                                                                                         
            </nav>

          </div>
         
        </div>
      </div>

    </div>
    
    </div>
<?php 
include"dbcon.php"; 

$page = (isset($_GET['page']))?$_GET['page']:'';
$editmaterial = (isset($_GET['editmaterial']))?$_GET['editmaterial']:'';
$deletematerial = (isset($_GET['deletematerial']))?$_GET['deletematerial']:'';
 
if ($deletematerial==''){
}else{
echo "<script type= 'text/javascript'>$(document).ready(function(){ $('#deleteMaterialModal').modal() });</script>";
}
if(isset($_POST["cmdelete"])){
   $sql = "DELETE FROM material WHERE materialID='$deletematerial'";
 if ($conn->query($sql) === TRUE) {
  echo "<script type= 'text/javascript'>alert('Record deleted successfully');
  window.location.replace('maintainMaterial.php');</script>";  
 } else {
  echo "<script type= 'text/javascript'>alert('Error deleting record: " . $sql . "<br>" . $conn->error."');</script>"; 
 }
}
if ($editmaterial==''){
}else{
 echo "<script type= 'text/javascript'>$(document).ready(function(){ $('#editMaterialModal').modal() });</script>";
 $results = mysqli_query($conn,"SELECT * FROM material Where materialID=$editmaterial");
 while($row = mysqli_fetch_array($results))
 {
  $editid = $row["materialID"];
  $edit_Mname = $row["materialName"];
  $edit_desc = $row["description"];
  $edit_points = $row["pointsPerKg"];
 }
}
 
if(isset($_POST["cmdedit"])){
   $editname = $_POST["editname"];
   $editdesc = $_POST["editdesc"];
   $editpo = $_POST["editpo"];
   $sql = "UPDATE material SET materialName='$editname', description='$editdesc',  pointsPerKg='$editpo' WHERE materialID='$editmaterial'";
   if (mysqli_query($conn, $sql)) {
     echo "<script type= 'text/javascript'>alert('Record updated successfully');
  window.location.replace('maintainMaterial.php');</script>";  
   } else {
     echo "<script type= 'text/javascript'>alert('Error updating record: " . $sql . "<br>" . $conn->error."');</script>"; 
   }
}
if ($page==''){
 $page = "1";
}else{
 $page = $_GET['page'];
}
$cur_page = $page;
$page -= 1;
$per_page = 5; 
$previous_btn = true;
$next_btn = true;
$first_btn = true;
$last_btn = true;
$start = $page * $per_page;
$query_pag_data = "SELECT * from material LIMIT $start, $per_page";
$result_pag_data = mysqli_query($conn, $query_pag_data);
?>
<div class="container"><div class = "result"></div>
 <p><h1 align="center"><br></h1></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
      <h2>Manage <b>Material</b></h2>
     </div>
     <div class="col-sm-6">
     
      <a href="#deleteMaterialModalselected" class="btn btn-danger" data-toggle="modal"><i class="material-icons"></i> <span>Delete</span></a>      
     </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
     <tr>
      <th>
       <span class="custom-checkbox">
        <input type="checkbox" id="selectAll">
        <label for="selectAll"></label>
       </span>
      </th>
                        <th>Material ID</th>
                        <th>Material name</th>
                        <th>Description</th>
                        <th>Points Per Kg</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
    while($row = mysqli_fetch_assoc($result_pag_data)) {
    $materialID=$row['materialID'];
     $materialName=$row['materialName']; 
     $description=$row['description'];
     $pointsPerKg=$row['pointsPerKg']; 
    ?>
                    <tr>
      <td>
       <span class="custom-checkbox">
        <input type="checkbox" id="checkbox1" name="options" value="<?php echo $row['materialID']; ?>">
        <label for="checkbox1"></label>
       </span>
      </td>
                        <td><?php echo $materialID; ?></td>
                        <td><?php echo $materialName; ?></td>
                        <td><?php echo $description; ?></td>
                        <td><?php echo $pointsPerKg; ?></td>
                        <td>
                            <a href="?editmaterial=<?php echo $row['materialID']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit"></i></a>
                            <a href="?deletematerial=<?php echo $row['materialID']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete"></i></a>
                        </td>
                    </tr>
    <?php } ?> 
                </tbody>
   </table>
   <input type="button" value="Add Material Type" onclick="location='addMtype.php'" />
   <div class="clearfix">
<?php
$msg = "";
$query_pag_num = mysqli_query($conn,"SELECT COUNT(*) AS mycount FROM material" ) or die(mysqli_error($this->dblink));
$res = mysqli_fetch_object($query_pag_num);
$count = $res->mycount;
$no_of_paginations = ceil($count / $per_page);
// ---------------Calculating the starting and endign values for the loop----------------------------------- 
if ($cur_page >= 7) {
    $start_loop = $cur_page - 3;
    if ($no_of_paginations > $cur_page + 3)
        $end_loop = $cur_page + 3;
    else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
        $start_loop = $no_of_paginations - 6;
        $end_loop = $no_of_paginations;
    } else {
        $end_loop = $no_of_paginations;
    }
} else {
    $start_loop = 1;
    if ($no_of_paginations > 7)
        $end_loop = 7;
    else
        $end_loop = $no_of_paginations;
}
//----------------------------------------------------------------------------------------------------------- 
$msg .= "<ul class=\"pagination\">";
// FOR ENABLING THE FIRST BUTTON
if ($first_btn && $cur_page > 1) {
    $msg .= "<li p='1' class='page-item active'><a href='?page=1' class='page-link'>First</a></li>";
} else if ($first_btn) {
    $msg .= "<li p='1' class='page-item' disabled><a href='?page=1'>First</a></li>";
}
// FOR ENABLING THE PREVIOUS BUTTON
if ($previous_btn && $cur_page > 1) {
    $pre = $cur_page - 1;
    $msg .= "<li p='$pre' class='page-item active'><a href='?page=$pre' class='page-link'>Previous</a></li>";
} else if ($previous_btn) {
    $msg .= "<li class='page-item' disabled><a href='?page=1'>Previous</a></li>";
}
for ($i = $start_loop; $i <= $end_loop; $i++) {
    if ($cur_page == $i)
        $msg .= "<li p='$i' class='page-item active'><a href='?page=$i' class='page-link'>{$i}</a></li>";
    else
        $msg .= "<li p='$i' class='page-item'><a href='?page={$i}' class='page-link'>{$i}</a></li>";
}
// TO ENABLE THE NEXT BUTTON
if ($next_btn && $cur_page < $no_of_paginations) {
    $nex = $cur_page + 1;
    $msg .= "<li p='$nex' class='page-item'><a href='?page=$nex' class='page-link'>Next</a></li>";
} else if ($next_btn) {
    $msg .= "<li class='page-item' disabled><a href='#'>Next</a></li>";
}
// TO ENABLE THE END BUTTON
if ($last_btn && $cur_page < $no_of_paginations) {
    $msg .= "<li p='$no_of_paginations' class='page-item'><a href='?page=$no_of_paginations' class='page-link'>Last</a></li>";
} else if ($last_btn) {
    $msg .= "<li p='$no_of_paginations' class='page-item' disabled><a href='?page=$no_of_paginations'>Last</a></li>";
}
$total_string = "<div class=\"hint-text\">Showing <b>" . $cur_page . "</b> out of <b>$no_of_paginations</b> entries</div>";
$msg = $msg . "</ul>";  
echo $total_string;
echo $msg;
?>
            </div>   
  </div>
</div> 
 
 
 <!-- Edit Modal HTML -->
 <div id="editMaterialModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form name="frmedit" action="" method="post">
     <div class="modal-header">      
      <h4 class="modal-title">Edit Material</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     </div>
     <div class="modal-body">     
      <div class="form-group">
       <label>Material Name</label>
       <input type="text" name="editname" value="<?php echo $edit_Mname; ?>" class="form-control" required>
      </div>
      <div class="form-group">
       <label>Description</label>
       <input type="text" name="editdesc" value="<?php echo $edit_desc; ?>" class="form-control" required>
      </div>
      <div class="form-group">
       <label>Points Per Kg</label>
       <input type="text" name="editpo" value="<?php echo $edit_points; ?>" class="form-control" required>
      </div>     
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" name="cmdedit" class="btn btn-info" value="Save">
     </div>
    </form>
   </div>
  </div>
 </div>
  
 <!-- Delete Modal HTML -->
 <div id="deleteMaterialModal" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form name="frmdelete" action="" method="post">
     <div class="modal-header">      
      <h4 class="modal-title">Delete Material</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     </div>
     <div class="modal-body">     
      <p>Are you sure you want to delete these Material?</p>
      <p class="text-warning"><small>This action cannot be undone.</small></p>
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <input type="submit" name="cmdelete" class="btn btn-danger" value="Delete">
     </div>
    </form>
   </div>
  </div>
 </div>
 <div id="deleteMaterialModalselected" class="modal fade">
  <div class="modal-dialog">
   <div class="modal-content">
    <form name="frmdelete" action="" method="post">
     <div class="modal-header">      
      <h4 class="modal-title">Delete Selected Material</h4>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     </div>
     <div class="modal-body">     
      <p>Are you sure you want to all the selected Materials?</p>
      <p class="text-warning"><small>This action cannot be undone.</small></p>
     </div>
     <div class="modal-footer">
      <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
      <a href="#" id="cmdeleteselected" class="btn btn-danger">Delete</a>
     </div>
    </form>
   </div>
  </div>
 </div>



</body>
</html>