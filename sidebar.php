		
		
		<script SRC="js/jquery.tools.min.js"></script>
<script type="text/javascript" language="javascript" src="administrator/media/js/jquery.dataTables.js"></script>
<link rel='stylesheet' id='style-css'  href='scripts/diapo.css' type='text/css' media='all' /> 
<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 
<script type='text/javascript' src='scripts/diapo.js'></script> 
		
		<div id="sidebar">
		
	
		
					<div class="serts">
					
					<br/>
					<br/>
					<div style="font:bold 15px 'arial';">Login Here: </div>
					<br/>
					
					<form  method="POST" action="validator.php">
								<div>
								
								
								<div class="form-group">
					            		<div >
					            			<div > Login As:
						              			<select name="category" id="usertype" required >
				<option value="1" id="sysuser" selected >Student</option>
				<option value="2" id="Personnel" >Desk Officer</option>
				<option value="3" id="admin" >Admin</option>
            </select>
						              		</div>
						            	</div>
						            </div>

					            	<div class="form-group">
					            		<div >
					            			<div > Username:
						              			<input type="text" placeholder="Username" class="form-control" id="username" name="username">
						              		</div>
						            	</div>
						            </div>
						            <div class="form-group">
						            	<div >
					            			<div >Password:
						              			<input id="password" name="password" type="password" placeholder="Password" class="form-control">
						              		</div>
						            	</div>
						            </div>
									
									 <div class="form-group">
						            	<div >
					            			<div >Keep me signed in:
						              			<input id="signed" name="signed" type="checkbox" class="form-control">
						              		</div>
						            	</div>
						            </div>


						            <div class="form-group">
						            	<div >
					            			<div>
											<input class="button" type="submit" value="login" name="login" class="btn btn-success" align="right"/>
						           				
						           			 </div>
						            	</div>
						            </div>
						        </div>
					        </form>
					

					
							
					</div>
					
			
					<br>
						

									<?php include ("slide.php"); ?>	

							
					
							
							
				</div>