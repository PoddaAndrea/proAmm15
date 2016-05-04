<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<script src="http://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
<link href='https://fonts.googleapis.com/css?family=Lobster|Quicksand
|Dancing+Script|Playball|Tangerine|Great+Vibes' 
rel='stylesheet' type='text/css'>
<link href="registrazione-stile.css" rel="stylesheet" type="text/css">

<title>Registrazione</title>
</head>
<body>
	<?php include("phpRegistrazione.php");?>
	<div id="sfondo" ><!--<img src="image/sfondo_registrazione.jpg"> --><img src="image/sfondo4.jpg"></div>
	
			<div id=mask_2></div>
			
			<div id="contentReg">
						<div id=form_reg>	
							<form  METHOD="POST" ACTION=""> 
								<h1>Registrazione</h1>
								<hr align="left" width="225">
								<label class="labelReg">Nome</label><br>
								<input class="inputRegN" type="text" name="Nome" id="Nome" required/>
								<br>
								<label class="labelReg">Cognome</label><br>
								<input class="inputRegC" type="text" name="Cognome" id="Cognome" required/><br>
								<label class="labelReg">Username</label><br>
								<input class="inputRegU" type="text" name="Username" id="Username" required/>
								<br>							
								<label class="labelReg">Password</label><br>
								<input class="inputRegP" type="password" maxlength="8" name="Password" id="Password"  required/>
								<br>
								<br>
								<button type="Submit" class="submit" name="submit" id="submit">Registrati</button>
								

							</form>

			</div>
	</div>
</body>
</html>
