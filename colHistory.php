
<?php 
$selectMID = $_POST['mID'];


include 'connection.php';
session_start();
if (isset($_GET['username']))
{
$user = $_GET['username'];
$get_user = $mysqli->query("SELECT * FROM recycler WHERE username = '$user'");
if ($get_user->num_rows == 1)
{
    $profile_data = $get_user->fetch_assoc();
           
}
       
}?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Wines &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Montserrat:400,700|Roboto&display=swap" rel="stylesheet"> 

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">
  <style>
  .dropbtn {
  
  
  border: none;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {background-color: #ddd;}

  .dropdown:hover .dropdown-content {display: block;}

  .dropdown:hover .dropbtn {background-color: grey;}

  table {
    border-collapse: collapse;
    float: center;
    background-color: #fefefe;
}
table  tr td {
    border: 1px solid #000;
    padding: 10px;
    vertical-align: top;
    text-align: left;
}
table th{
    border: 1px solid #000;
    padding: 10px;
    vertical-align: top;
    text-align: left;
}

.ddtf-processed th.recycler > select{
    display:none;
}
.ddtf-processed th.recycler > div{
    display:block !important;
}

.ddtf-processed th.collector > select{
    display:none;
}
.ddtf-processed th.collector > div{
    display:block !important;
}

.ddtf-processed th.weightTitle > select{
    display:none;
}
.ddtf-processed th.weightTitle > div{
    display:block !important;
}

.ddtf-processed th.pointsTitle > select{
    display:none;
}
.ddtf-processed th.pointsTitle > div{
    display:block !important;
}
</style>


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
            <a href="index.php" class="site-logo">
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
                <li><a href="index2.php" class="nav-link text-left">Home</a></li>
                <li><a href="recordMaterial.php" class="nav-link text-left">Record Material Submission</a></li>
                <li class="active"><a href="viewhistory2.php" class="nav-link text-left">View History</a></li>
                <li><a href="contact2.php" class="nav-link text-left">Contact</a></li>
                <li><div class="dropdown">
                  <button class="dropbtn">Manage User</button>
                  <div class="dropdown-content">
                  <a href="userprofileC.php?username=<?php echo $_SESSION['username'] ?>">View Profile</a>      
                    <a href="editprofileViewC.php?username=<?php echo $_SESSION['username'] ?>">Edit Profile</a>      
                    <a href="addMaterial.php">Add Material</a>
                    <a href="addedMaterial.php">Added Material</a>
                  </div>
                </div></li>
                
  
                <li class="nav-link text-left" border="1px solid black">
                  <?php
                  //session_start();
                  echo $_SESSION["username"];
                  ?>
                  </li>

                <li><a href="LoginandRegister.php" class="w3-button w3-white w3-border w3-round-large">Log out</a></li>
              </ul>                                                                                                                                                                                                                                                                                         
            </nav>

          </div>
         
        </div>
      </div>

    </div>
    
    </div>

    
    <div class="hero-2" style="background-image: url('images/envir2.jpeg');">
      <div class="container">
         <div class="row justify-content-center text-center align-items-center">
           <div class="col-md-8">
             <span class="sub-title">Welcome to</span>
             <h2>View History</h2>
           </div>
         </div>
       </div>
     </div>

     <br>
     <br>

     <div class="container" position="center">
      
      <?php				
          //Connect to Database
          $conn = new mysqli("localhost", "root", "", "");
                    
          //create query
          $sql = " create database if not exists earthprotectors";

          //execute query
          $conn->query($sql);
                    
          //use database
          $useDB = " use earthprotectors";
            
          $conn->query($useDB);

          $showquery = "SELECT * from submission WHERE materialID = '$selectMID' AND collector = '$_SESSION[username]'";
          

          $result = $conn->query($showquery);
          
          echo'<table width="1000" id="mytable" class="table table-striped table-bordered">';
          echo'<thead>';
              echo'<tr>';
                  echo'<th class="collector">Collector</th>';
                  echo'<th class="recycler">Recycler</th>';
                  echo'<th id="status">Status</th>';
                  echo'<th class="weightTitle">Weight In KG</th>';
                  echo'<th class="pointsTitle">Points Awarded</th>';
                  echo'<th>Actual Date</th>';
              echo'</tr>';
          echo'</thead>';
          
        //create array to store selected fields data
				$materialArr = array();
				//check if anything is showed from the database to set the data to array
        if($result->num_rows > 0){
					while ($row = mysqli_fetch_array($result)){
                    $colreArr[] = array(
                        'col'=> $row['collector'], 
                        'recyc' => $row['recycler'],
                        'sta' => $row['status'], 
                        'weight' => $row['weightInKg'], 
                        'points' => $row['pointsAwarded'], 
                        'actual' => $row['actualDate']);
                        

					}
                $sumWeight = 0;
                $sumPoints = 0;
              foreach($colreArr as $colreArr){
                echo'<tr>'; 
            echo'<td>'. $colreArr['col'].'</td>';
            echo'<td>'. $colreArr['recyc'].'</td>';
                    echo'<td>'. $colreArr['sta'].'</td>';
                    echo'<td class="weight">'. $colreArr['weight'].'</td>';
                    echo'<td class="points">'. $colreArr['points'].'</td>';
                    echo'<td>'. $colreArr['actual'].'</td>';
                echo'</tr>';
                $sumWeight += $colreArr['weight'];
                $sumPoints += $colreArr['points'];

              }
              echo'<tfoot>';
            echo'<tr>';
            echo'<th colspan="3" style="text-align:right">Total:</th>';
            echo'<th><span class="totalWeight">'.$sumWeight.'</span></th>';
            echo'<th class="totalPoints">'.$sumPoints.'</th>';
            echo'</tr>';
            echo'</tfoot>';
              echo'</table>';
              echo'<br>';
              echo'<br>';

 
          
        }else{
            echo'No Submission Record!';
        }
        ?>
  </div>
  <br>
  <br>

  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script> 
<script src="dynamitable.jquery.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="jquery.tableTotal.js"></script>
<script src="jquery-3.4.1.min.js"></script>

  <script src="js/ddtf.js"></script>
  <script language="javascript" type="text/javascript">
    var table = $('#mytable').ddTableFilter();

  </script>



    
    <div class="footer">
      <div class="container">
        
        <div class="row">
          <div class="col-12 text-center">
            <div class="social-icons">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-youtube"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | EarthProtectors <i class="icon-heart text-danger" aria-hidden="true"></i></a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>



            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>

=======
<?php 
$selectMID = $_POST['mID'];


include 'connection.php';
session_start();
if (isset($_GET['username']))
{
$user = $_GET['username'];
$get_user = $mysqli->query("SELECT * FROM recycler WHERE username = '$user'");
if ($get_user->num_rows == 1)
{
    $profile_data = $get_user->fetch_assoc();
           
}
       
}?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Wines &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Cinzel:400,700|Montserrat:400,700|Roboto&display=swap" rel="stylesheet"> 

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">
  <style>
  .dropbtn {
  
  
  border: none;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  .dropdown-content a:hover {background-color: #ddd;}

  .dropdown:hover .dropdown-content {display: block;}

  .dropdown:hover .dropbtn {background-color: grey;}
</style>


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
            <a href="index.php" class="site-logo">
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
                <li><a href="index2.php" class="nav-link text-left">Home</a></li>
                <li><a href="recordMaterial.php" class="nav-link text-left">Record Material Submission</a></li>
                <li class="active"><a href="viewhistory2.php" class="nav-link text-left">View History</a></li>
                <li><a href="contact2.php" class="nav-link text-left">Contact</a></li>
                <li><div class="dropdown">
                  <button class="dropbtn">Manage User</button>
                  <div class="dropdown-content">
                  <a href="userprofileC.php?username=<?php echo $_SESSION['username'] ?>">View Profile</a>      
                    <a href="editprofileViewC.php?username=<?php echo $_SESSION['username'] ?>">Edit Profile</a>      
                    <a href="addMaterial.php">Add Material</a>
                    <a href="addedMaterial.php">Added Material</a>
                  </div>
                </div></li>
                
  
                <li class="nav-link text-left" border="1px solid black">
                  <?php
                  //session_start();
                  echo $_SESSION["username"];
                  ?>
                  </li>

                <li><a href="LoginandRegister.php" class="w3-button w3-white w3-border w3-round-large">Log out</a></li>
              </ul>                                                                                                                                                                                                                                                                                         
            </nav>

          </div>
         
        </div>
      </div>

    </div>
    
    </div>

    
    <div class="hero-2" style="background-image: url('images/envir2.jpeg');">
      <div class="container">
         <div class="row justify-content-center text-center align-items-center">
           <div class="col-md-8">
             <span class="sub-title">Welcome to</span>
             <h2>View History</h2>
           </div>
         </div>
       </div>
     </div>

     <br>
     <br>

     <div id="container" align="center">
      
      <?php				
          //Connect to Database
          $conn = new mysqli("localhost", "root", "", "");
                    
          //create query
          $sql = " create database if not exists earthprotectors";

          //execute query
          $conn->query($sql);
                    
          //use database
          $useDB = " use earthprotectors";
            
          $conn->query($useDB);

          $showquery = "SELECT * from submission WHERE materialID = '$selectMID' AND collector = $_SESSION[username]";
          

          $result = $conn->query($showquery);
          
        //create array to store selected fields data
				$materialArr = array();
				//check if anything is showed from the database to set the data to array
			    if($result->num_rows > 0){
					while ($row = mysqli_fetch_array($result)){
                    $colreArr[] = array(
                        'col'=> $row['collector'], 
                        'recyc' => $row['recycler'],
                        'sta' => $row['status'], 
                        'weight' => $row['weightInKg'], 
                        'points' => $row['pointsAwarded'], 
                        'actual' => $row['actualDate']);	
					}
                
        
        echo'<table width="1000">';
          echo'<thead>';
              echo'<tr>';
                  echo'<th>Collector</th>';
                  echo'<th>Recycler</th>';
                  echo'<th>Status</th>';
                  echo'<th>Weight In KG</th>';
                  echo'<th>Points Awarded</th>';
                  echo'<th>Actual Date</th>';
              echo'</tr>';
          echo'</thead>';

          foreach($colreArr as $colreArr){
            echo'<tr>'; 
				echo'<td>'. $colreArr['col'].'</td>';
				echo'<td>'. $colreArr['recyc'].'</td>';
                echo'<td>'. $colreArr['sta'].'</td>';
                echo'<td>'. $colreArr['weight'].'</td>';
                echo'<td>'. $colreArr['points'].'</td>';
                echo'<td>'. $colreArr['actual'].'</td>';
            echo'</tr>';
          } 
          echo'</table>';


        }else{
            echo'No Submission Record!';
        }
        ?>
  </div>
  <br>
  <br>

<div id="container" align="center">
  <?php
  $total = "SELECT sum(weightInKg), sum(pointsAwarded) FROM submission WHERE materialID = '$selectMID'";
  $totResult = $conn->query($total);
  while ($rows = mysqli_fetch_array($totResult)) {
  echo'<table>';
  echo'<thead>';
  echo'<tr>';
  echo'<th>Total Weights</th>';
  echo'<th>Total Points</th>';
  echo'</tr>';
  echo'</thead>';
  echo'<tr>';
  echo'<td>'.$rows['sum(weightInKg)'].'</td>';
  echo'<td>'.$rows['sum(pointsAwarded)'].'</td>';
  echo'</tr>';
  echo'</table>';
  }
  ?>
</div>



    
    <div class="footer">
      <div class="container">
        
        <div class="row">
          <div class="col-12 text-center">
            <div class="social-icons">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-youtube"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="copyright">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | EarthProtectors <i class="icon-heart text-danger" aria-hidden="true"></i></a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>



            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.mb.YTPlayer.min.js"></script>




  <script src="js/main.js"></script>

</body>


</html>