<?php 
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
  <style>
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
                <li class="active"><a href="recordMaterial.php" class="nav-link text-left">Record Material Submission</a></li>
                <li><a href="viewhistory2.php" class="nav-link text-left">View History</a></li>
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
             <h2>Record Material</h2>
           </div>
         </div>
       </div>
     </div>


    <br>
    <br>

    <div id="container" align="center">
    <form method="POST" action="insertSubmission.php"'>
    
            <div class="col-md-4">
            <label class="username">Recycler</label>
            <input type="text" class="form-control"  name="recName" placeholder="Recycler Username" required></input>
            </div>
            <br>
            <div class="col-md-4">
            <label class="daysOfWeek">Material Name</label>
            <input type="text" class="form-control"  name="materialName" placeholder="Material Name" required" ></input>
            </div>
            <br>
            <div class="col-md-4">
            <label class="timeto">Weight</label>
            <input type="text" class="form-control"  name="weight" placeholder="Weight" required" ></input>
            </div>
            <br>
            <!--
            <div class="col-md-4">
            <label class="timeto">Actual Date</label>
            <input type="date" class="form-control" id="actualDate"  name="actualDate" placeholder="Actual Date" required ></input>
            </div>
            <br>-->
            <input class="btn btn-sm btn-primary" type="submit" value="Submit" name="submit">
            <br>
        </form>

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