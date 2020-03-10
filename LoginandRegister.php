<?php  
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Log In Page</title>
	<link rel="stylesheet" type="text/css" href="css/loginCSS.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		body{
			background-image: url("images/login.jpeg");
		}
	</style>


</head>
<body>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                        <h1>Earth Protectors</h1>
                    </a>
                </span>
                
            </div>
        </div>
<p><b>Welcome to the Earth Protectors.</b></p>
<div class="tab">
	<button class="tablink" onclick="form1(event, 'Login')" id="login">Login</button>
	<button class="tablink" onclick="form1(event, 'Register')" id="register">Register</button>
</div>

	<div id="Login" class="tabcontent" class="col-md-4 mb-3">
	<div class="logincss" id="logincss">  
	<h1 >Login</h1>	
	<p >Login as:</p>	
	<button  onclick="loginform1()" id="btn1" class="btn btn-outline-primary">Recycler</button>&nbsp;
	<button onclick="loginform2()" id="btn2" class="btn btn-outline-primary">Collector</button>&nbsp;
	<button onclick="loginform3()" id="btn3" class="btn btn-outline-primary">Admin</button>
    <div id="recyclerloginform" class="recyclerborder">
	<form method="POST" action="validate.php" class="was-validated">
		<label class="form-check-label">Username</label>
         <input type="text" class="form-control" name="username" placeholder="Username" required>
		 <div class="invalid-feedback">Please enter a valid username!</div>
		 <br>
		<label class="form-check-label">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password" required>
		  <div class="invalid-feedback">Wrong password. Please try again!</div> 
		<br>
          <input type="submit" value="Login" class="btn btn-outline-success  btn-sm">
    </form>
	<br>
	</div>
	</div>

	<div class="logincss1">
	<div id="collectorloginform" class="collectorborder" style="display:none">
	<h1>Login</h1>
	<p>Login as:</p>	
	<button  onclick="loginform1()" class="btn btn-outline-primary">Recycler</button>&nbsp;
	<button onclick="loginform2()" class="btn btn-outline-primary">Collector</button>&nbsp;
	<button onclick="loginform3()" class="btn btn-outline-primary">Admin</button>
	<form method="POST" action="validate1.php" class="was-validated">
		<label class="form-check-label">Username</label>
         <input type="text" class="form-control" name="username" placeholder="Username" required>
		 <div class="invalid-feedback">Please enter a valid username!</div> 	
		<br>		 
		<label class="form-check-label">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password" required >
		  <div class="invalid-feedback">Wrong password. Please try again!</div> 
		<br>
          <input type="submit" value="Login" class="btn btn-outline-success  btn-sm">
	</form>
	<br>
	</div>
	</div>
</div>


<div class="logincss2">
	<div id="adminloginform" class="adminborder" style="display:none">
	<h1>Login</h1>
	<p>Login as:</p>	
	<button  onclick="loginform1()" class="btn btn-outline-primary">Recycler</button>&nbsp;
	<button onclick="loginform2()" class="btn btn-outline-primary">Collector</button>&nbsp;
	<button onclick="loginform3()" class="btn btn-outline-primary">Admin</button>
	<form method="POST" action="validate2.php" class="was-validated">
		<label class="form-check-label">Username</label>
         <input type="text" class="form-control" name="username" placeholder="Username" required>
		 <div class="invalid-feedback">Please enter a valid username!</div> 	
		<br>		 
		<label class="form-check-label">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password" required >
		  <div class="invalid-feedback">Wrong password. Please try again!</div> 
		<br>
          <input type="submit" value="Login" class="btn btn-outline-success  btn-sm">
	</form>
	<br>
	</div>
	</div>
</div>


	<div id="Register" class="tabcontent">
		<div class="registercss" id="registercss">
			<h1>Register</h1>
			<p>Register as:</p>	
			<button  onclick="registerform1()" id="btn3" class="btn btn-outline-primary">Recycler</button>&nbsp;
			<button onclick="registerform2()" id="btn4" class="btn btn-outline-primary">Collector</button>
			<div id="recyclerregisterform">
					<form name="myForm" onsubmit="return validate()" method="POST" action="recyclerRegister.php">
					
					<label class="form-check-label">Username</label>
					<input type="text" name="UserName" class="form-control" placeholder="Username" required>
					
					<br>
					<label class="form-check-label">Password</label>
					<input type="password" name="Password" class="form-control" placeholder="Password" required>
					
					<br>
					<label class="form-check-label">Full Name</label>
					<input type="text" name="FullName" class="form-control" placeholder="Full Name" required>
					
					<!--<br>
					<label class="form-check-label">Email</label>
					<input type="text" name="Email" class="form-control" placeholder="Email" name="email" >-->
					
					<br>
					<input type="submit" value="Register" class="btn btn-outline-success  btn-sm">
				</form>
				<br>
  			</div>
	  	</div>
	

	  	<div class="registercss1" id="registercss1">
			<div id="collectorregisterform" class="collectorregisterform" style="display:none">
			<h1>Register</h1>
			<p>Register as:</p>	
			<button  onclick="registerform1()" id="btn3" class="btn btn-outline-primary">Recycler</button>&nbsp;
			<button onclick="registerform2()" id="btn4" class="btn btn-outline-primary">Collector</button>
			
				<form name="myForm1" onsubmit="return validate2()" method="POST" action="collectorRegister.php">
					
					<label class="form-check-label">Username</label>
					<input type="text" name="UserName" class="form-control" placeholder="Username"required >
					
					<br>
					<label class="form-check-label">Password</label>
					<input type="password" name="Password" class="form-control" placeholder="Password" required>
					
					<br>
					<label class="form-check-label">Full Name</label>
					<input type="text" name="FullName" class="form-control" placeholder="Full Name" required>
					
					<br>
					<label class="form-check-label">Address</label>
					<input type="text" name="Address" class="form-control" placeholder="Address" name="address"required >
					
					<br>
					<label class="form-check-label">Week of Days</label>
					<select name="WeekOfDays" class="form-control" placeholder="Week of Days" required>
					<option value="Monday">Monday</option>
					<option value="Tuesday">Tuesday</option>
					<option value="Wednesday">Wednesday</option>
					<option value="Thursday">Thursday</option>
					<option value="Friday">Friday</option>
					</select>
					
					<br>
					<label class="form-check-label">Time From</label>
					<input type="time" name="TimeFrom" class="form-control" placeholder="Time From" required>

					<br>
					<label class="form-check-label">Time To</label>
					<input type="time" name="TimeTo" class="form-control" placeholder="Time To" required>
					
					<br>
					<input type="submit" value="Register" class="btn btn-outline-success  btn-sm">
				</form>
				<br>
  			</div>
	  	</div>
	</div>
	
	  

<script src="javascript/login.js"></script>

</body>
</html>