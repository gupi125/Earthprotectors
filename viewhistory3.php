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
                <li ><a href="index3.php" class="nav-link text-left">Home</a></li>
                <li><a href="maintainMaterial.php" class="nav-link text-left">Maintain Meterial Type</a></li>
                <li class="active"><a href="viewhistory3.php" class="nav-link text-left">View History</a></li>

                <li><a href="LoginandRegister.php" class="w3-button w3-white w3-border w3-round-large">Log out</a></li>
               
              </ul>                                                                                                                                                                                                                                                                                         
            </nav>

          </div>
         
        </div>
      </div>

    </div>
    
    </div>

    
    <div class="owl-carousel hero-slide owl-style">
      <div class="intro-section container" style="background-image: url('images/envir1.jpg');">
        <div class="row justify-content-center text-center align-items-center">
          <div class="col-md-8">
            <span class="sub-title">Welcome to</span>
            <h1>Earth Protectors</h1>
          </div>
        </div>
      </div>

      <div class="intro-section container" style="background-image: url('images/envir2.jpeg');">
        <div class="row justify-content-center text-center align-items-center">
          <div class="col-md-8">
            <span class="sub-title">Ready to</span>
            <h1>Save the World?</h1>
          </div>
        </div>
      </div>

    </div>


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

          $showquery = "SELECT * from material ";
          

          $result = $conn->query($showquery);
          
        //create array to store selected fields data
				$materialArr = array();
				//check if anything is showed from the database to set the data to array
			    if($result->num_rows > 0){
					while ($row = mysqli_fetch_array($result)){
					$materialArr[] = array('mId'=> $row['materialID'], 'name' => $row['materialName'],
					'des' => $row['description'], 'points' => $row['pointsPerKg']);	
					}
        }
        
        echo'<table width="1000">';
          echo'<thead>';
              echo'<tr>';
                  echo'<th>Material ID</th>';
                  echo'<th>Material Name</th>';
                  echo'<th>Description</th>';
                  echo'<th>Points Per Kg</th>';
                  echo'<th></th>';
              echo'</tr>';
          echo'</thead>';

          foreach($materialArr as $materialArr){
            echo'<tr>'; 
						echo'<td>'. $materialArr['mId'].'</td>';
						echo'<td>'. $materialArr['name'].'</td>';
						echo'<td>'. $materialArr['des'].'</td>';
            echo'<td>'. $materialArr['points'].'</td>';
           
            echo'<td>'.		
							'<form method="POST" action="colReHistory.php">
							<input type="hidden" name="mID" value="'.$materialArr['mId'].'"/>
							<input type="submit" name="select" value="Select"/>
							</form></td>';
            echo'</tr>';
          }  
              
          echo'</table>';
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




  <script src="js/main.js"></script>

</body>

</html>
