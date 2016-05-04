<!DOCTYPE html>

<html>
	<head>
			<title>index</title>
			<script src="http://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
			<link href='https://fonts.googleapis.com/css?family=Lobster|Quicksand
			|Dancing+Script|Playball|Tangerine|Great+Vibes' 
			rel='stylesheet' type='text/css'>
			<link href="sito-stile.css" rel="stylesheet" type="text/css">
			<?php include("jQuery/funzioni.php");?>
			
	
	
	</head>
	
	<body>
	<?php include("login.php");?>
	
<!--  -->
				
				<!-- INIZIO FORM LOGIN -->
				<div id="popup-box" class="popupInfo">
					
						<form  METHOD="POST">
							<div id="imgLog">
							 	<img src="image/logo_oriz_formLog.png">
							</div>
							
							
							<div id="exit">
								<button type="button" class="close"> <img src="image/exit_img.png" width="10 px" height="10 px" ></button>
							</div>
							
							
							<label class="label_2">Username</label><br>
							<input class="input1" type="text" name="Username"/><br><br>
							<label class="label_2">Password</label><br>
							<input class="input2" type="password" maxlength="8"  name="Password"  /><br><br><br>
							
							
							<button type="Submit" class="submit" name="submit" id="submit" >Accedi</button>
							<span> &nbsp; &nbsp; o </span> <a href="registrazione/htmlRegistrazione.php" target="_blank">Registrati qui</a>
							
						</form>
						
		</div> <!-- Fine form login -->
		
		<div id="wrapper">
				
				
				<div id="slider"> <img alt="banner" src="banner.jpg" width="100%" height="100%">
			
				<div id="header"></div>
				
				<div id="logo"> <img alt="logo" src="image/logo_oriz3.png" width="100%" height="100%"></div>
				
				<div id=menu>
					<div id="nav">
						
					
							<ul>				
									<li><a href="#home" class="hom">Home</a></li>
									<li><a href="#adozioni" class="ado">Adozioni</a></li>
									<li><a href="#donazioni" class="don">Donazioni</a></li>
									<li><a href="#login" class="log">Login</a></li>
									
								
							</ul>
							
							
					</div>
				</div>
							

			
			
			
					
				
			</div>
			  
			<?php include("home/htmlHome.php");?>
			<?php include("donazioni/htmlDonazioni.php");?>
			<?php include("adozioni/htmlAdozioni.php");?>
			
			<div id="mask"></div>
			<div id="footer">Powered by: Andrea Podda</div>
	
			</div>

		
	</body>


</html>