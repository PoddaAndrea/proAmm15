
<!DOCTYPE html>
<html>

	<head>
		<meta charset="ISO-8859-1">
		<script src="http://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
		<link href='https://fonts.googleapis.com/css?family=Lobster|Quicksand
		|Dancing+Script|Playball|Tangerine|Great+Vibes' 
		rel='stylesheet' type='text/css'>
		<link href="sito-stile.css" rel="stylesheet" type="text/css">
		
		<title>Content Donazioni</title>
	</head>
	
	<body>
			<!-- INIZIO CONTENUTO HOME  -->
			<div id="contentDonazioni">
				<h1>Dona Anche Tu...</h1>
				<hr>

				<p class="pDonazioni">	
					<?php include("donazioniQuery.php");?>
			 	</p>
				
				
			</div>
				
	</body>
	
</html>
