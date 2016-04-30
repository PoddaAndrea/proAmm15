<?php 
session_start();

if(!isset($_SESSION["sess_user"])){
	header("location:login.php");
} else {

	$user=$_SESSION["sess_user"];
?>
<!DOCTYPE html>


<html>
	<head>
			<title>Admin</title>
			<script src="jquery-1.11.3.min.js"></script>
			<link href='https://fonts.googleapis.com/css?family=Lobster|Quicksand
			|Dancing+Script|Playball|Tangerine|Great+Vibes |' 
			rel='stylesheet' type='text/css'>
			<link href="sito-stile.css" rel="stylesheet" type="text/css">
			
			<script language="JavaScript" type="text/javascript">

			//funzione che permette il countdown dei caratteri rimanenti all'interno di una txtbox
			function flagHome(i)
			{
			  var n_max = 160
			  if (i.txtBoxHome.value.length > n_max) {
			    i.txtBoxHome.value = i.txtBoxHome.value.substring(0,n_max)
			    rest = 0
			  } 
			  else
			  {
			    rest = n_max - i.txtBoxHome.value.length
			  }
			  i.n.value = rest
			}



			function flagAdozioni(i)
			{
			  var n_max = 160
			  if (i.txtBoxAdo.value.length > n_max) {
			    i.txtBoxAdo.value = i.txtBoxAdo.value.substring(0,n_max)
			    rest = 0
			  } 
			  else
			  {
			    rest = n_max - i.txtBoxAdo.value.length
			  }
			  i.n.value = rest
			}


			function flagDonazioni(i)
			{
			  var n_max = 160
			  if (i.txtBoxDon.value.length > n_max) {
			    i.txtBoxDon.value = i.txtBoxDon.value.substring(0,n_max)
			    rest = 0
			  } 
			  else
			  {
			    rest = n_max - i.txtBoxDon.value.length
			  }
			  i.n.value = rest
			}


			
			</script>
			
			<script>
		/*
		
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
						
					});*/

			</script>
			
			
		
	</head>
	
	
	<body>
	
		<div id="am">
			<p>BENVENUTO</p> 
			<p><?=$_SESSION['sess_user']; ?></br></p>
			<a href="logout.php">Logout</a></h2>
		</div>
	<body>
	<div>
	
	<?php // disturbo ossessivo compulsivo del copia e incolla...connessioni al database?>
			<textarea id="adm_home" disabled><?php
									$con=mysql_connect('localhost','poddaAndrea','paguro8228') or die(mysql_error());
									mysql_select_db('amm15_poddaAndrea',$con) or die("DB inesistente");
									
									$query=mysql_query("SELECT * FROM amministrazione");
									
									// loop per stampare i risultati
									while ($ris_query = mysql_fetch_array($query))
									
									{
											
												$nome= htmlentities($ris_query['home']);
												echo "$nome";
		
									
									}//While
									
									
		
								
					?></textarea>	
			
			
			
			
			
			
			<textarea id="adm_ado" disabled><?php
									$con=mysql_connect('localhost','poddaAndrea','paguro8228') or die(mysql_error());
									mysql_select_db('amm15_poddaAndrea',$con) or die("DB inesistente");
									
									$query=mysql_query("SELECT * FROM amministrazione");
									
									// loop per stampare i risultati
									while ($ris_query = mysql_fetch_array($query))
									
									{
											
												$nome= htmlentities($ris_query['adozioni']);
												echo "$nome";
		
									
									}//While
									
									
		
								
					?></textarea>	
			
			
			
			
			
			
				
		<textarea id="adm_don" disabled><?php
									$con=mysql_connect('localhost','poddaAndrea','paguro8228') or die(mysql_error());
									mysql_select_db('amm15_poddaAndrea',$con) or die("DB inesistente");
									
									$query=mysql_query("SELECT * FROM amministrazione");
									
									// loop per stampare i risultati
									while ($ris_query = mysql_fetch_array($query))
									
									{
											
												$nome= htmlentities($ris_query['donazioni']);
												echo "$nome";
		
									
									}//While
									
									
		
															
					?>	
			
			
			<?php //disturbo ossessivo compulsivo del copia e incolla...query update?>
			
			</textarea>
			
				<div id="adm">	
							
					<form  METHOD="POST" ACTION="">		
						<label class="adm_lbl_home">Home</label><p class="rim">caratteri max:</p> <input id="countBox_home" value="160" size="1" name="n" disabled /><br>
						<textarea id="input_adm_home" name="txtBoxHome" wrap="soft" onKeyUp="flagHome(this.form)" maxlength="160" required/></textarea>
						<button type="Submit" class="submit1" name="submit" id="submit">Salva</button>
												
					</form>
								<?php
								//funzione che permette di "aggiornare" il database 
								if(isset($_POST["submit"])){
								
										if(!empty($_POST['txtBoxHome'])) {
												
												$txt=trim($_POST['txtBoxHome']);
											
												$sql="UPDATE amministrazione SET home='$txt'";
											
												$result=mysql_query($sql);
											
											
												if($result){
													
													
													$pag_ref = $_SERVER['PHP_SELF'];
													echo '<meta http-equiv="Refresh" content="0;' . $pag_ref . '">'; //ricarica della pagina
													
												 
													
												} else {
													
													echo "Failure!";
												}
										
				
										
										} 
										
										
								}
										
								
								
								?>
					
				</div>
			
		
				
						
				<div id="ado">	
							
					<form  METHOD="POST" ACTION="">		
						<label class="adm_lbl_ado">Adozioni</label><p class="rim">caratteri max:</p> <input id="countBox_ado" value="160" size="1" name="n" disabled /><br>
						<textarea id="input_adm_ado" name="txtBoxAdo" wrap="soft" onKeyUp="flagAdozioni(this.form)" maxlength="160" required/></textarea>
						<button type="Submit" class="submit1" name="submit" id="submit">Salva</button>
												
					</form>			
								<?php
								if(isset($_POST["submit"])){
								
										if(!empty($_POST['txtBoxAdo'])) {
												
												$txt_ado=trim($_POST['txtBoxAdo']);
											
												$sql="UPDATE amministrazione SET adozioni='$txt_ado'";
											
												$result=mysql_query($sql);
											
											
												if($result){
													
													
													$pag_ref = $_SERVER['PHP_SELF'];
													echo '<meta http-equiv="Refresh" content="0;' . $pag_ref . '">';
													
												 
													
												} else {
													
													echo "Failure!";
												}
										
				
										
										} 
										
								
								}
										
								
								
								?>					
				</div>			
					
							
				<div id="don">	
							
					<form  METHOD="POST" ACTION="">		
						<label class="adm_lbl_don">Donazioni</label><p class="rim">caratteri max:</p> <input id="countBox_ado" value="160" size="1" name="n" disabled /><br>
						<textarea id="input_adm_don" name="txtBoxDon" wrap="soft" onKeyUp="flagDonazioni(this.form)" maxlength="160" required/></textarea>
						<button type="Submit" class="submit1" name="submit" id="submit">Salva</button>
												
					</form>	
								<?php
								if(isset($_POST["submit"])){
								
										if(!empty($_POST['txtBoxDon'])) {
												
												$txt_don=trim($_POST['txtBoxDon']);
											
												$sql="UPDATE amministrazione SET donazioni='$txt_don'";
											
												$result=mysql_query($sql);
											
											
												if($result){
													
													$pag_ref = $_SERVER['PHP_SELF'];
													echo '<meta http-equiv="Refresh" content="0;' . $pag_ref . '">';
													
												 
													
												} else {
													
													echo "Failure!";
												}
										
				
										
										} 
										
								
								}
								
								
								
								?>										
					</form>			
							
				</div>	
		
					
					
		</div>		
						
		

	</body>



</html>
<?php
}
?>
