<?php
session_start();
if (isset($_POST['mID'])){
    $_SESSION['collector'] = $_POST['colUsername'];
    
}
$_SESSION['collector'] = $_POST['colUsername'];
$collector = $_SESSION['collector'];


//include 'connection.php';
$mysqli = new mysqli('localhost', 'root', '', 'earthprotectors');
//session_start();
if (isset($_GET['username']))
{
$user = $_GET['username'];
$get_user = $mysqli->query("SELECT * FROM recycler WHERE username = '$user'");
if ($get_user->num_rows == 1)
{
    $profile_data = $get_user->fetch_assoc();
           
}
       
}
?> 

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

  <!--<link rel="stylesheet" href="css/bootstrap-datepicker.css">-->

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="css/style.css">


  



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
                <li><a href="index.php" class="nav-link text-left">Home</a></li>
                <li class="active"><a href="makeappointment.php" class="nav-link text-left">Make Appointment</a></li>
                <li><a href="viewhistory.php" class="nav-link text-left">View History</a></li>
                <li><a href="contact.php" class="nav-link text-left">Contact</a></li>
                <li><div class="dropdown">
                  <button class="dropbtn">Manage User</button>
                  <div class="dropdown-content">
                  <a href="userprofileR.php?username=<?php //echo $_SESSION['username'] ?>">View Profile</a>      
                    <a href="editprofileViewR.php?username=<?php //echo $_SESSION['username'] ?>">Edit Profile</a>
                  </div>
                </div></li>
                <li class="nav-link text-left" border="1px solid black">
                  <?php
  
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

    <?php
	    $mysqli = new mysqli("localhost","root", "", "earthprotectors") or die (mysqli_error($mysqli));
	    $result = $mysqli->query("SELECT * FROM collector WHERE collector.username = '$collector' ") or die($mysqli->error);
    ?>
    
    

    <div class="hero-2" style="background-image: url('images/envir1.jpg');">
     <div class="container">
        <div class="row justify-content-center text-center align-items-center">
          <div class="col-md-8">
            <span class="sub-title">Welcome</span>
            <h2>Make Appointment</h2>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>

    <div id="container" align="center">
    
        <form id="submission" method="POST" action="proposedDate.php"'>
        <?php ($row = $result->fetch_assoc())?>
            
            
            <div class="col-md-4">
            <label class="username">Collector Username</label>
            <input type="text" class="form-control"  name="ColUsername" placeholder="Collector Username" required value="<?php echo $_SESSION['collector']; ?>"disabled></input>
            </div>
            <br>
            <div class="col-md-4">
            <label class="daysOfWeek">Days of Week</label>
            <input type="text" class="form-control"  name="dayWeek" placeholder="Days of Week" required value="<?php echo $row['week']; ?>" disabled></input>
            </div>
            <br>
            <div class="col-md-4">
            <label class="timefrom">Time From</label>
            <input type="text" class="form-control"  name="timefrom" placeholder="Time From" required value="<?php echo $row['timeFrom']; ?>" disabled></input>
            </div>
            <br>
            <div class="col-md-4">
            <label class="timeto">Time To</label>
            <input type="text" class="form-control"  name="timeto" placeholder="Time To" required value="<?php echo $row['timeTo']; ?>" disabled></input>
            </div>
            <br>
            <div class="col-md-4">
            <label class="timeto">Proposed Date</label>
            <input type="date" class="form-control" id="ProposedDate"  name="ProposedDate" placeholder="Proposed Date" required ></input>
            </div>
            <br>
            <input class="btn btn-sm btn-primary" type="submit" value="Submit" name="submit">
            <br>
        </form>
        
    </div>

    

   
    
    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck text-primary"></span>
            </div>
            <div class="text">
              <h2 class="font-heading-serif">Free Shipping</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan
                tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2 text-primary"></span>
            </div>
            <div class="text">
              <h2 class="font-heading-serif">Free Returns</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan
                tincidunt fringilla.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help text-primary"></span>
            </div>
            <div class="text">
              <h2 class="font-heading-serif">Customer Support</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan
                tincidunt fringilla.</p>
            </div>
          </div>
        </div>
      </div>
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
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | EarthProtectors <i class="icon-heart text-danger" aria-hidden="true"></i> </a>
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



</body>

</html>