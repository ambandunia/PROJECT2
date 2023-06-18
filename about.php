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
</head>
		

<body>
	
	<div id="container">
	<img src="images/banner.jpg" class="banner">

			<div class="nav">
				<ul>
					<a href="index.php"><li><i class="icon-home icon-large"> </i> Home</li></a>
				<a href="faq.php"><li><i class="icon-list-alt icon-large"> </i> F.A.Q</li></a>
				<a href="c_account.php"><li><i class="icon-large icon-exclamation-sign"></i> Register</li></a>
					<li class="active"><i class="icon-folder-open icon-large"> </i> About Us</li>
					
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
			
			<div class="searchform1">
			
			
			
			
			
<h3>Who we are</h3>

<p>We are a leading institution determined to produce quality students.</p>

						<i class="icon icon-exclamation"></i> About Students complaint management system</font><hr style="margin:8px; border-bottom:1px solid #ccc;">
						
			<h3> Address</h3><br/>			
             2 school road<br/>


	<h3> Phone</h3><br/>
	Tel: +24565343333<br/>
info@scms.com<br/>

<h3> Address</h3>	<br/>
2 school road<br/>

	<h3> Phone</h3><br/>
	Tel: +0807564744<br/>
info@helpdesk.com<br/>
				</div><!--end of searchform1-->
				
				<div class="sitemap">	
	<font style=" color:darkblue; font:bold 24px 'cambria';">
						<i class="icon icon-sitemap"></i> Sitemap</font>
						 <p><iframe width="374" height="315" frameborder="10" scrolling="no" marginheight="0" marginwidth="auto"
                           src="#">
                    </iframe></p>
					
				</div>
				
				
	<div class="content-left">
		<font style=" color:darkblue; font:bold 24px 'cambria';">
		<i class="icon icon-book"></i> Mission, Vision & Goals</font><hr style="margin:8px; border-bottom:1px solid #ccc;">
		<?php include('evoslider.php');?>
		</div>
		
		
		
		
	
	
		
		

<footer>
<center> </center>
</footer>		
	</div><!-- end container --->

</body>

<?php include('scripts.php'); ?>
</html>