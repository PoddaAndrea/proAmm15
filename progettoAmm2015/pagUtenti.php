<?php 
session_start();

if(!isset($_SESSION["sess_user"])){
	header("location:Accesso/login.php");
} else {

	$user=$_SESSION["sess_user"];
?>
<!DOCTYPE html>


<html>
	<head>
			<title>Pagina Personale</title>
			<script src="http://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
			<link href='https://fonts.googleapis.com/css?family=Lobster|Quicksand
			|Dancing+Script|Playball|Tangerine|Great+Vibes |' 
			rel='stylesheet' type='text/css'>
			
			<link href="sito-stile.css" rel="stylesheet" type="text/css">
			
			<script>
		
		
					$(document).ready(function(){
		
		
						$(".don_member").click(function(){
							$("#content_member").hide("fast");
							$("#work_2").hide("fast");
							$("#working").show("slow");
							
						});


						$(".ado_member").click(function(){
							$("#content_member").hide("fast");
							$("#working").hide("fast");
							$("#work_2").show("slow");
							
						});

						$(".dati").click(function(){
							$("#working").hide("fast");
							$("#work_2").hide("fast");
							$("#content_member").show("slow");
							
						});
						
					});

			</script>
			
			
		
	</head>
	
	
	<body>
	
	<div id="wrapper_member"> 
		
		<div id="welcome">
			<p>BENVENUTO</p> 
			<p><?=$_SESSION['sess_user']; ?></br></p>
		</div>
		
		

		<div id="menu_member">
			
			<img class="img_member" src="image/utenti.png">
			
			<div id="nav_member">					
				<ul>				
					<li><a href="#dati" class="dati">I miei dati</a></li>
					<li><a href="#adozioni" class="ado_member">Adozioni</a></li>
					<li><a href="#donazioni" class="don_member">Donazioni</a></li>
					<li><a href="Accesso/logout.php" class="log_member">Logout</a></li>
									
				</ul>
								
								
			</div>
			

		</div>
		
	<body>
			
			<!-- INIZIO CONTENUTO WORK IN PROGRESS  -->
			
			<div id="working">
			
				<img class="img_work" src="image/work.png">
				
				
			</div>
			
			
			<div id="work_2">
			
				<img class="img_work" src="image/work.png">
				
			</div>	<!-- FINE CONTENUTO WORK IN PROGRESS  -->
			
			
		<div id="content_member">
			<?php
				

				$con=mysql_connect('localhost','poddaAndrea','paguro8228') or die(mysql_error());
				mysql_select_db('amm15_poddaAndrea') or die("il database non e' disponibile");
				
				$query=mysql_query("SELECT * FROM registrazione WHERE username = '$user'");
				
				// loop per stampare i risultati
				while ($ris_query = mysql_fetch_array($query))
				
				{
				
					   
					     echo "
					 	<div id='tab_member'>
						
						<table>
						<tr><td>I MIEI DATI<hr></td></tr>
						
					    <tr><td>Nome: ". $ris_query['nome'] ."</td></tr>
					    <tr><td>Cognome: ". $ris_query['cognome'] ." </td></tr>
					    <tr><td>Username: ". $ris_query['username'] ."</td></tr>
					 	<tr><td>Password: ". $ris_query['password'] ."</br> </td></tr>
						</table>
					   	<div>
					    ";
				
				}//While
				
			
			?>				
				
				
		</div>					
	
	
	</body>		
		
		

	
	</div>
	
	
	
	
	
	 
	 

	</body>



</html>
<?php
}
?>
