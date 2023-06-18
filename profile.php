<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username']) && isset($_SESSION['category'])) {
      switch($_SESSION['category']) {
	  case 1:
		  header('location:forbidden.php');//redirect to user page
        break;
		
      }
	  }else
	  {

header('Location:index.php');
}
?>
<!DOTYPE html>
<html lang="en">
<head>

<?php include ("dbconn.php"); ?>
	<meta charset="utf-8">
	<title>Students complaint management system</title>
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
					<a href="profile.php"><li><i class="icon-home icon-large"> </i> My Profile</li></a>
					<a href="received.php"><li><i class="icon-list-alt icon-large"> </i> Unread Queries</li></a>					
					<a href="assist.php"><li><i class="icon-folder-open icon-large"> </i> Send Assistance</li></a>
					<a href="log_out.php"><img src=images/quit_1.png></a>
					
				<ul>
			</div>
	
	
		<div class="alert alert-success">
			<strong>WELCOME</strong> to Students complaint management system
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
		
						<i class="icon icon-exclamation"></i> Desktop Officer</font><hr style="margin:8px; border-bottom:1px solid #ccc;">
						
							<div class="serts">
							  <table width="100%" border="0" cellpadding="1" cellspacing="1">
                  <tr> 
                        <td width="358" height="20" valign="middle" bgcolor="#8FC4F7"> 
                         <div align="center"><b><font color="#FFFFFF">Welcome &nbsp<?php echo $_SESSION['username'];?> </font></b></div>
                        </td>
                  </tr>
               </table>	 
			   <p ><b> <font color='blue'>You must update your SPECIALITY the first time you create your account</font></b></P>
      <?php 
	  include('incls/connector.php') ;
	  $query = "SELECT * FROM users WHERE username='{$_SESSION['username']}'" ;
		
		 $resource=mysql_query($query,$conn) or die ("An unexpected error occured ");
		  $result=mysql_fetch_array($resource);
					?>
	<form id="form1" name="form1" method="post" action="">
        <table align="center" width="291" border="0">
		  <tr>
            <td><strong>Username:</strong></td>
            <td><input type="text" name="uname" id="textfield3" value="<?php echo $result[2]?> " readonly /></td>
          </tr>
          <tr>
            <td width="129"><strong>First Name :</strong></td>
            <td width="152">
            <input type="hidden" name="userid" value="<?php echo $result[0] ?>" />
            <input name="fname" type="text" id="textfield" value="<?php echo $result[4] ?>" />
            </td>
          </tr>
		  <tr>
            <td width="129"><strong>Last Name :</strong></td>
            <td width="152">
            <input name="lname" type="text" id="textfield" value="<?php echo $result[5] ?>" /></td>
          </tr>
          <tr>
            <td><strong>Category:</strong></td>
            <td><strong>Consultant</strong></td>
          </tr>
		  <tr>
            <td><strong>Speciality:</strong></td>
            <td><input type="text" name="speciality" id="textfield3" value="<?php echo $result[7] ?>" required /></td>
          </tr>
          
        </table>
        <p align="center">
          <label>
            <input type="submit" class="button" name="updater" id="button" value="Update" />
          </label>
        </p>
		<p>&nbsp </p>
		<p align="center"><img onClick="javascript: history.go(-1)" border="0" src="images/cooltext457951462.png" alt="Go Back" onMouseOver="this.src='images/cooltext457951462MouseOver.png';" onMouseOut="this.src='images/cooltext457951462.png';" /></p>
      </form>
      <?php
	 
         error_reporting(E_ALL ^ E_NOTICE);
	    include("incls/connector.php");		
				 if (isset($_POST['updater'])){
				 $id=$_POST['userid'];
	             $fname=$_POST['fname']; 
				 $lname=$_POST['lname'];
	             $speciality=$_POST['speciality'];
	             
	 
	 	 //mysql_select_db("department",$link) or die ("Cannot select the database!");
	 $query="UPDATE users SET firstname='".$fname."', lastname='".$lname."', speciality='".$speciality."' WHERE userid='".$id."'";
		
		  if(!mysql_query($query,$conn))
		  {die ("An unexpected error occured while Updating , Please try again!");}
		  
	 ?>
	 <script type="text/javascript">
	alert('Your profile  has been Updated');
	window.location="deskofficer.php";
	</script>

	<?php
	}
	?>	
	 
					</div>
					<br>
</div>



				
				
	
	
		
		
		
		
	
	
		
		

<footer>
<center>Copyright &copy; Students complaint management system | All Rights Reserved 2019  </center>
</footer>		
	</div><!-- end container --->

</body>

<?php include('scripts.php'); ?>
</html>