<!DOTYPE html>
<html lang="en">
<head>

<?php include ("dbconn.php"); ?>
	<meta charset="utf-8">
	<title>F.A.Q</title>
	<link rel="stylesheet" type="text/css" href="css/umstyle.css?q=12345686" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/heroic-features.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
	<script src="vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">
	
<!--[if !IE]><!--><script type='text/javascript' src='scripts/jquery.mobile-1.0rc2.customized.min.js'></script><!--<![endif]-->
<script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>



	
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
					<li class="active"><i class="icon-large icon-exclamation-sign"></i> F.A.Q</li>
					<a href="c_account.php"><li><i class="icon-folder-open icon-large"> </i> Register</li></a>															
					<a href="about.php"><li><i class="icon-list-alt icon-large"> </i> About Us</li></a>
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
		
						<i class="icon icon-exclamation"></i> Frequently Asked Questions</font><hr style="margin:8px; border-bottom:1px solid #ccc;">
						
							<div class="serts">
							
							<div class="panel-group" id="accordion">
				
				
				<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseAOne">I had a missing script</a>
                            </h4>
                        </div>
                        <div id="collapseAOne" class="panel-collapse collapse">
                            <div class="panel-body">
							<ul>
							  <p>Visit exams and records.</p>
						      
							</ul>
								</div>
                        </div>
                    </div>
                    <!-- /.panel -->
					
					
		
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">How can I complete fees registration?</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
							<ul>
                                <p>Visit the school portal</p>
							</ul>
								</div>
                        </div>
                    </div>
                    <!-- /.panel -->
					
					
					
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">My post utme score was not recorded</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
							Check the Post Utme section of the school's website
                              </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Is it difficult to switch departments?</a>
                            </h4>

                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                             It is not difficult to switch departments as long as students meet the academic requirements for that program. For some programs students must fill out a short application before receiving approval, but for most programs students simply need the approval of their faculty advisor and the dean from the faculty they want switch to.  </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">How do I secure a hostel accomodation</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                Visit the hostel portal</p>

							</div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">I could not find my name on the NYSC list</a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                Verify your NYSC registration call up</div>
                        </div>
                    </div>
                    <!-- /.panel -->
					
					
					
					 <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseASix">Is there a lot to do in the surrounding area? </a>
                            </h4>
                        </div>
                        <div id="collapseASix" class="panel-collapse collapse">
                            <div class="panel-body">
                              There are many options for recreation off campus. We are close to the pool for nice-weather trips to the beach, and to many ski areas for wintertime excursions.</div>
                        </div>
                    </div>
                    <!-- /.panel -->
					
					
					
					
					
					
					
					
					
					
					
					
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">How available are the professors to the students?</a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body">
                               Professors make themselves very available to students, giving out their office hours, email addresses, phone numbers, and sometimes even home or cell phone numbers on the first day of class. They encourage students to drop in during their 2 hours a week of office hours, even just to chat. If you can’t make it during their office hours, they’ll meet with you by appointment. </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">How’s safety on campus?</a>
                            </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse">
                            <div class="panel-body">
                          afety is very tight on campus, with two full size police forces (benin police). Our residence halls are locked 24 hours a day with access by student ID card. After 10p.m. students can only get into their own residence hall. We also have student security officers patrolling on evenings. Our emergency call boxes, strategically scattered throughout the campus, have a two minute response time.    </div>
                        </div>
                    </div>
					
					
                    <!-- /.panel -->
					
					
					
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">What sort of academic support is available to students? </a>
                            </h4>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse">
                            <div class="panel-body">
                            If a student is not satisfied with the support they can get from their professors, there are many other options to pursue. The Center for Academic Resources (CFAR) is a great resource for scholastic support. They offer study groups, note taking tips, tutoring services, etc. UNH also has writing and math centers for specialized support, staffed by fellow students and professionals.
							  </div>
                        </div>
                    </div>
					
					
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">What are weekends like on campus? </a>
                            </h4>
                        </div>
                        <div id="collapseNine" class="panel-collapse collapse">
                            <div class="panel-body">
                             This question is best answered with a personal touch. It is important to ensure parents and students that although there is a party presence on any campus, there are also numerous alternatives. 
							  </div>
                        </div>
                    </div>
				
					
                    <!-- /.panel -->
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">What is the retention rate for first year students?</a>
                            </h4>
                        </div>
                        <div id="collapseTen" class="panel-collapse collapse">
                            <div class="panel-body">
                               About 90% of first year students return for the second year.  
							   </div>
                        </div>
                       </div>
					
                    <!-- /.panel -->
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Are there more in-state students than out of state students?</a>
                            </h4>
                        </div>
                        <div id="collapseEleven" class="panel-collapse collapse">
                            <div class="panel-body">
                             In our undergraduate population, 57% of our students are in state, while 43% are out of state. Our first year class is typically comprised of 53% New residents and 47% non-residents. </div>
                        </div>
                    </div>
					
                    <!-- /.panel -->
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve">What is the student to faculty ratio on campus?</a>
                            </h4>
                        </div>
                        <div id="collapseTwelve" class="panel-collapse collapse">
                            <div class="panel-body">
                             19:1</div>
                        </div>
                   </div>
				 
                    <!-- /.panel -->
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen">What is the student population?</a>
                            </h4>
                        </div>
                        <div id="collapseThirteen" class="panel-collapse collapse">
                            <div class="panel-body">
                           About 12,500 undergrads and 2,200 grad students. </div>
                        </div>
						   </div>
                    <!-- /.panel -->
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFourteen">What is the acceptance rate for applicants?</a>
                            </h4>
                        </div>
                        <div id="collapseFourteen" class="panel-collapse collapse">
                            <div class="panel-body">
                            This year’s acceptance rate was 74%.</p>										
															 </div>
															 
                        </div>
                    </div>
                    <!-- /.panel -->
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFifteen">What is the duration of a semester</a>
                            </h4>
                        </div>
                        <div id="collapseFifteen" class="panel-collapse collapse">
                            <div class="panel-body">
                           Three to four months</p>										
															 </div>
															 
                        </div>
                    </div>
					  <!-- /.panel -->
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSixteen">What is the male to female ratio on campus?</a>
                            </h4>
                        </div>
                        <div id="collapseSixteen" class="panel-collapse collapse">
                            <div class="panel-body">
                          46% male, 54% female<br></p>										
															 </div>
															 
                        </div>
                    </div>
					  <!-- /.panel -->
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeventeen">Is the school fees cost?</a>
                            </h4>
                        </div>
                        <div id="collapseSeventeen" class="panel-collapse collapse">
                            <div class="panel-body">
                                     Its is very affordable										
															 </div>
															 
                        </div>
                    </div>
					  <!-- /.panel -->
					<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEightteen">Are there scholarship programs?</a>
                            </h4>
                        </div>
                        <div id="collapseEightteen" class="panel-collapse collapse">
                            <div class="panel-body">
							Yes. <br>  
                           	 </div>
															 
                        </div>
                    </div>
					
					
					
					
					
                </div>
							
							
							
							
					</div>
					<br>
</div>



				
				
	
	
		
		
		
		
	
	
		
		

<footer>
<center></center>
</footer>		
	</div><!-- end container --->

</body>

<?php include('scripts.php'); ?>
</html>