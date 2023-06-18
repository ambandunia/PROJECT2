<?php
// Inialize session
session_start();
// Check, if user is already login, then jump to secured page
if (isset($_SESSION['username']) && isset($_SESSION['category'])) {
      switch($_SESSION['category']) {
	  case 1:
		  header('location:student.php');//redirect to client page 
        break;
		case 2:
		  header('location:deskofficer.php');//redirect to  page
        break;
		case 3:
		  header('location:admin.php');//redirect to admin
        break;
		
      }
	  }//else
	  //{

//header('Location: .php');
//}

?>

<!DOTYPE html>
<html lang="en">
<?php include ('head.php'); ?>
		
<head>
 <script src="incls/jquery.js"></script>
 <script src="incls/script.js"></script>
	
	
	
	
	<link rel="stylesheet" href="css/chatStyle.css" type="text/css" media="screen" />  
	<script>
			/*
				VIEWPORT BUG FIX
				iOS viewport scaling bug fix, 
			*/
			(function(doc){var addEvent='addEventListener',type='gesturestart',qsa='querySelectorAll',scales=[1,1],meta=qsa in doc?doc[qsa]('meta[name=viewport]'):[];function fix(){meta.content='width=device-width,minimum-scale='+scales[0]+',maximum-scale='+scales[1];doc.removeEventListener(type,fix,true);}if((meta=meta[meta.length-1])&&addEvent in doc){fix();scales=[.25,1.6];doc[addEvent](type,fix,true);}}(document));
		</script>
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
<!-- WAA DHAMAADKA JQueryga CHaTTIng Ka-->

<script type="text/javascript">
$(document).ready(function() {

	// load messages every 1000 milliseconds from server.
	load_data = {'fetch':1};
	window.setInterval(function(){
	 $.post('shout.php', load_data,  function(data) {
		$('.message_box').html(data);
		var scrolltoh = $('.message_box')[0].scrollHeight;
		$('.message_box').scrollTop(scrolltoh);
	 });
	}, 1000);
	
	//method to trigger when user hits enter key
	$("#shout_message").keypress(function(evt) {
		if(evt.which == 13) {
				var iusername = $('#shout_username').val();
				var imessage = $('#shout_message').val();
				post_data = {'username':iusername, 'message':imessage};
			 	
				//send data to "shout.php" using jQuery $.post()
				$.post('shout.php', post_data, function(data) {
					
					//append data into messagebox with jQuery fade effect!
					$(data).hide().appendTo('.message_box').fadeIn();
	
					//keep scrolled to bottom of chat!
					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					
					//reset value of message box
					$('#shout_message').val('');
					
				}).fail(function(err) { 
				
				//alert HTTP server error
				alert(err.statusText); 
				});
			}
	});
	
	//toggle hide/show shout box
	$(".close_btn").click(function (e) {
		//get CSS display state of .toggle_chat element
		var toggleState = $('.toggle_chat').css('display');
		
		//toggle show/hide chat box
		$('.toggle_chat').slideToggle();
		
		//use toggleState var to change close/open icon image
		if(toggleState == 'block')
		{
			$(".header div").attr('class', 'open_btn');
		}else{
			$(".header div").attr('class', 'close_btn');
		}
		 
		 
	});
});

</script>

<!-- WAA DHAMAADKA JQueryga CHaTTIng Ka-->
</head>
<body>
<!-- 	
	<div class="shout_box">
      <div class="header"> live chat <div class="close_btn">&nbsp;</div></div>
     <div class="toggle_chat">
     <div class="message_box">
    </div>
    <div class="user_info">
    <input name="shout_username" id="shout_username" type="text" placeholder="Your Name" maxlength="15" />
   <input name="shout_message" id="shout_message" type="text" placeholder="Type Message Hit Enter" maxlength="100" /> 
    </div>
    </div>
	</div> -->
	
	
	
	<div id="container">
	<img src="images/banner.jpg" class="banner">


			<div class="nav">
				<ul>
					<a href="index.php"><li class="active"><i class="icon-home icon-large"> </i> Home</li></a>
					<a href="faq.php"><li><i class="icon-list-alt icon-large"> </i> F.A.Q</li></a>
					<a href="c_account.php"><li><i class="icon-large icon-exclamation-sign"></i> Register</li></a>
					<a href="about.php"><li><i class="icon-folder-open icon-large"> </i> About Us</li></a>
					
				<ul>
			</div>
		
		<div id="content">
				
		<!--diapo-->
		<br>
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
			<div class="rightcont">    <br>
		<?php include('slider.php');?>
		<br>
			<?php include('thumbnail.php'); ?>
					<div class="searchform1">
				
				
					<img height="326px" src="img/1.jpg">	
	<hr><br>
	<hr><br>
	<hr><br>
              Welcome to <strong>Students complaints management system</strong>
			  
			  We pride ourselves in quality assistance <br><br>
			
			Our students are informed and educated
				</div><!--end of searchform1-->
				
				
		</div>
    \

	<?php// include ('home_stat.php')?>      
   
				<?php include ('sidebar.php');?>
				<br>		
		</div><!-- end content --->
<footer>
<center></center>
</footer>		
	</div><!-- end container --->

</body>

</html>