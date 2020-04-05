<?php
$conn = new mysqli('localhost', 'root', '', 'earthprotectors');
session_start();
if (isset($_GET['materialID']))
{
$material = $_GET['materialID'];
$get_material = $conn->query("SELECT * FROM material WHERE materialID = '$material'");
$material_data = $get_material->fetch_assoc();
} 
?>

<!DOCTYPE html>
<html>
<head>        
 <meta charset="UTF-8">
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
    padding: 20px;
    vertical-align: top;
    text-align: left;
}
table th{
    border: 1px solid #000;
    padding: 20px;
    vertical-align: top;
    text-align: left;
}


  #container{clear:both;width:800px;_border:1px solid #fff;margin:3% auto}
  </style>

 <title>Add Material Type</title>
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
    <a href="index2.php" class="site-logo">
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

       
      </ul>                                                                                                                                                                                                                                                                                         
    </nav>

  </div>
 
</div>
</div>

</div>

</div>
<div id="container" align="center" ><br><br><br>
    <h1>Edit Material</h1>
    <form method="post" action="materialEdit.php?material=<?php echo $material_data['username'] ?>">            
      <label>Material Name:</label><br> 
      <input type="text" name="materialName" value="<?php echo $material_data['materialName'] ?>" /><br> 
      <label>Description:</label><br>
      <input type="text" name="description" value="<?php echo $material_data['description'] ?>" /><br> 
      <label>Points Per Kg:</label><br>
      <input type="text" name="pointsPerKg" value="<?php echo $material_data['pointsPerKg'] ?>" /><br> 
      <input type="submit" name="update_material" value="Update Material" />        
</form>  
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




<script src="js/main.js"></script>

</body>
</html>