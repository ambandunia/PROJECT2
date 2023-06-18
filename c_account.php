<!DOTYPE html>
<html lang="en">
<head>

<?php include ("dbconn.php"); ?>
	<meta charset="utf-8">
	<title>Students complaints management system</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	
<!--[if !IE]><!--><script type='text/javascript' src='scripts/jquery.mobile-1.0rc2.customized.min.js'></script><!--<![endif]-->
<script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 



	
	<!-- Evo slider-->
 
	
	<!-- Evo slider-->
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <link href="css/style_1.css" rel="stylesheet" media="screen">
  
	<link rel="Stylesheet" type="text/css" href="css/default/reset.css" />
    <link rel="Stylesheet" type="text/css" href="css/evoslider.css" />
    <link rel="Stylesheet" type="text/css" href="css/default/default.css" />   
    <script type="text/javascript" src="js/jquery.evoslider.lite-1.1.0.js"></script>   
	        
	<style>
		body{
		background:#E9EAED;
		}
		
	</style>
	
	 <script src="incls/jquery.js"></script>
    <script src="incls/script.js"></script>
    <script src="incls/script.responsive.js"></script>
	
	<script type="text/javascript">
$(document).ready(function() {
	$("#username").keyup(function (e) {
	
		//removes spaces from username
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var username = $(this).val();
		if(username.length < 1){$("#user-result").html('');return;}
		
		if(username.length >= 1){
			$("#user-result").html('<img src="images/loader.gif" />');
			$.post('check-uname.php', {'username':username}, function(data) {
			  $("#user-result").html(data);
			});
		}
	});	
});
</script>	
	
</head>
		

<body>
	
	<div id="container">
	<img src="images/banner.jpg" class="banner">

			<div class="nav">
				<ul>
					<a href="index.php"><li><i class="icon-home icon-large"> </i> Home</li></a>
					<a href="faq.php"><li><i class="icon-list-alt icon-large"> </i> F.A.Q</li></a>
					<li class="active"><i class="icon-large icon-exclamation-sign"></i> Register</li>
					<a href="about.php"><li><i class="icon-folder-open icon-large"> </i> About Us</li></a>
					
				<ul>
			</div>
	
	
		<div class="alert alert-success">
			<strong>WELCOME</strong> to Students complaints management system
				<div class="pull-right">
								<i class="icon-calendar icon-large"></i>
								<?php
								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
			</div>
			</div>
	<div class="content-left">
		<font style=" color:darkblue; font:bold 24px 'cambria';">
		
						<i class="icon icon-exclamation"></i> Register</font><hr style="margin:8px; border-bottom:1px solid #ccc;">
						
							<div class="serts">
							<table width="100%" border="0" cellpadding="1" cellspacing="1">
                  <tr> 
                        <td width="358" height="20" valign="middle" bgcolor="#8FC4F7"> 
                         <div align="center"><b><font color="#FFFFFF">Create Account</font></b></div>
                        </td>
                  </tr>
               </table>


	 
	 <?php include "incls/connector.php"; ?>
	<?php

	$validate_array       = array();
if (isset($_POST['create'])){
$firstname=mysqli_escape_string($conn,$_POST['firstname']);
$lastname=mysqli_escape_string($conn,$_POST['lastname']);
$username=mysqli_escape_string($conn,$_POST['username']);
$category=mysqli_escape_string($conn,$_POST['category']);
$password=mysqli_escape_string($conn,$_POST['confirm_password']);
if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
       array_push($validate_array , "<span style='color: red;'>First name<br>");

    }



    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
       array_push($validate_array , "<span style='color: red;'>Last name<br>");
    }

 if(empty($validate_array)){
$encrypted = md5($password); // Encrypting pssword using md5 algo
$query=mysqli_query($conn,"INSERT INTO users(`category`,`username`,`password`,`firstname`,`lastname`,`status`,`speciality`)
VALUES('$category','$username','$encrypted','$firstname','$lastname','inactive','N/A')
");
if($query){
	    echo "<script> alert('You have successfully created an account')</script>"; 
        echo "<script>window.open('index.php','_self')</script>";
}
 }

	}
	?>
	 
      <form class="cmxform" id="signupForm" method="POST" action="">
	
		<legend><b>Please Provide All Information</b></legend>
		<table align="center">
		<tr>
		   <td>
			<label for="firstname">Firstname</label><span><?php if (in_array("<span style='color: red;'>First name<br>", $validate_array)) {
  echo "<span style='color: red;'>Only characters are allowed<br>";
} ?></span>
		   </td>
			<td>
			<input id="firstname" name="firstname" type="text" required minlength="5" autocomplete="off"  />
		   </td>
		   <td>&nbsp  &nbsp </td>
		</tr>
		<tr>
		    <td>
			<label for="lastname">Lastname</label><span><?php if (in_array("<span style='color: red;'>Last name<br>", $validate_array)) {
  echo "<span style='color: red;'>Only characters are allowed<br>";
} ?></span>
			</td>
			<td>
			<input id="lastname" name="lastname" type="text" autocomplete="off" required/>
			</td>
			<td> &nbsp &nbsp </td>
		</tr>
		<tr>
		   <td>
			  <label for="username">Username</label>
			</td>
			<td>
			  <input id="username" name="username" type="text" autocomplete="off" required /> 
			</td>
			<td> &nbsp &nbsp <span id="user-result"></span></td>
		</tr>
		
		<tr>
		   <td>
			  <label for="username">Usertype</label>
			</td>
			<td>
			  <select name="category" id="usertype" required >
				<option value="1" id="user1" >Student</option>
				<option value="2" id="user2" >Desk Officer</option>
            </select>
			</td>
			<td> &nbsp &nbsp </td>
		</tr>
		<tr>
		   <td>
			  <label for="password">Password</label>
		   </td>
		    <td>
			   <input id="password" name="password" type="password" required/>
		   </td>
		   <td> &nbsp &nbsp </td>
		</tr>
		<tr> 
		   <td>
			<label for="confirm_password">Confirm password</label>
		   </td>
		   <td>
			<input id="confirm_password" name="confirm_password" equalTo="#password" type="password" required/>
		   </td>
		   <td> &nbsp &nbsp  </td>
		</tr>
		<tr> 
		   <td colspan="3"> <hr>
		   </td>
		</tr>
		<tr>
		   <td colspan="3">
			<label for="agree">Please agree to our policy</label>
			<input type="checkbox" class="checkbox" id="agree" name="agree" required />
		 </td>
		</tr>
		<tr>
		    <td > 
			<label for="agree"> &nbsp &nbsp </label>
		   </td>
		   <td > 
			<input class="button" type="submit" value="Submit" name="create"/>
		   </td>
		   <td> &nbsp &nbsp </td>
		</tr>



	 </table>
	 </form>
	
					</div>
					<br>
</div>



				
				
	
	
		
		
		
		
	
	
		
		

<footer>
<center> </center>
</footer>		
	</div><!-- end container --->

</body>

<?php include('scripts.php'); ?>
</html>