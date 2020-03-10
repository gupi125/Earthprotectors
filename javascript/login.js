function form1(evt, userType) {
  var i, tabcontent, tablink;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablink = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablink.length; i++) {
    tablink[i].className = tablink[i].className.replace(" active", "");
  }
  document.getElementById(userType).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("Login").style.display = "block";

function loginform1(){
	var x = document.getElementById("recyclerloginform");
	var y = document.getElementById("collectorloginform");
	var z = document.getElementById("adminloginform")
	if (x.style.display === "none" || x.style.display === "block") {
		x.style.display = "block";
		y.style.display = "none";
		z.style.display = "none";
		document.getElementById("btn1").style.display = "inline";
		document.getElementById("btn2").style.display = "inline";
		document.getElementById("btn3").style.display = "inline";
		document.getElementById("logincss").style.display = "block";
		
	}	
}
  
function loginform2(){
	var a = document.getElementById("recyclerloginform");
	var b = document.getElementById("collectorloginform");
	var c = document.getElementById("adminloginform")
	if (b.style.display === "none" || b.style.display === "block") {
		b.style.display = "block";
		a.style.display = "none";
		c.style.display = "none";
		document.getElementById("btn1").style.display = "none";
		document.getElementById("btn2").style.display = "none";
		document.getElementById("btn3").style.display = "none";
		document.getElementById("logincss").style.display = "none";
		document.getElementById("logincss2").style.display = "none"

	} 
  }

  function loginform3(){
	var d = document.getElementById("recyclerloginform");
	var e = document.getElementById("collectorloginform");
	var f = document.getElementById("adminloginform")
	if (f.style.display === "none" || f.style.display === "block") {
		f.style.display = "block";
		d.style.display = "none";
		e.style.display = "none";
		document.getElementById("btn1").style.display = "none";
		document.getElementById("btn2").style.display = "none";
		document.getElementById("btn3").style.display = "none";
		document.getElementById("logincss").style.display = "none";
		document.getElementById("logincss1").style.display = "none"

	} 
  }

 document.getElementById("Register").style.display = "none";

 function registerform1(){
	var hoForm = document.getElementById("recyclerregisterform");
	var appForm = document.getElementById("collectorregisterform");
	if (hoForm.style.display === "none" || hoForm.style.display === "block") {
		hoForm.style.display = "block";
		appForm.style.display = "none";
		document.getElementById("btn3").style.display = "inline";
		document.getElementById("btn4").style.display = "inline";
		document.getElementById("registercss").style.display = "block";
		
	}	
}
  
function registerform2(){
	var hoForm2 = document.getElementById("recyclerregisterform");
	var appForm2 = document.getElementById("collectorregisterform");
	if (appForm2.style.display === "none" || appForm2.style.display === "block") {
		appForm2.style.display = "block";
		hoForm2.style.display = "none";
		document.getElementById("btn3").style.display = "none";
		document.getElementById("btn4").style.display = "none";
		document.getElementById("registercss").style.display = "none";

	} 
  }

  function validate() {
	var emailID = document.myForm.Email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");

	if( document.myForm.UserName.value == "" ) {
	   window.alert( "Please provide your Username!" );
	   document.myForm.UserName.focus();
	   return false;
	}
	if( document.myForm.Password.value == "" || document.myForm.Password.value.length < 8 ) {
	   
		window.alert( "Please provide a valid password!" );
	   document.myForm.Password.focus();
	   return false;
	}
	if( document.myForm.FullName.value == "" ) {
		window.alert( "Please provide your Full Name!" );
	   document.myForm.FullName.focus();
	   return false;
	}
	if (atpos < 1 || ( dotpos - atpos < 2 )) {
		alert("Please provide a valid Email!")
		document.myForm.Email.focus() ;
		return false;
	 }
	
	return( true );
 }

 function validate2() {
	var emailID = document.myForm1.Email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");

	if( document.myForm1.UserName.value == "" ) {
	   window.alert( "Please provide your Username!" );
	   document.myForm1.UserName.focus();
	   return false;
	}
	if( document.myForm1.Password.value == "" || document.myForm1.Password.value.length < 8 ) {
	   
		window.alert( "Please provide a valid password!" );
	   document.myForm1.Password.focus();
	   return false;
	}
	if( document.myForm1.FullName.value == "" ) {
		window.alert( "Please provide your Full Name!" );
	   document.myForm1.FullName.focus();
	   return false;
	}
	if (atpos < 1 || ( dotpos - atpos < 2 )) {
		alert("Please provide a valid Email!")
		document.myForm1.Email.focus() ;
		return false;
	 }
	if( document.myForm1.Address.value == "" ) {
		window.alert( "Please provide a valid Address!" );
		document.myForm1.Address.focus();
		return false;
	 }
	if(document.myForm1.Schedule.value == ""){
		window.alert("Please provide Collection Schedule!")
	}
	return( true );
 }