

				
					<?php
					
					if(isset($_POST["submit"])){   //verifica se la variabile è definita e non è NULL
					
					// verifica che i valori inseriti nei campi non siano vuoti
					if(!empty($_POST['Username']) && !empty($_POST['Password'])) {
						$user=$_POST['Username'];
						$pass=$_POST['Password'];
						$liv='U';
					//connessione al database
					
						$con=mysql_connect('localhost','poddaAndrea','paguro8228') or die(mysql_error());
						mysql_select_db('amm15_poddaAndrea',$con) or die("Il dataBase non esiste");
					//query di selezione (per prelevare tutte le info all'interno del db)
						$query=mysql_query("SELECT * FROM registrazione WHERE username='".$user."' AND password='".$pass."'");
						$numrows=mysql_num_rows($query);//conta il numero di righe coinvolta dalla query (
						
						if($numrows!=0) // verifica se il numero di righe è pari a zero (se la query non ha prodotto risultati)
						{
							
							//se vero associa i risultati
							while($row=mysql_fetch_assoc($query))
							{
								$dbusername=$row['username'];
								$dbpassword=$row['password'];
								$dblivello=$row['livello'];

							}//fine while
							
							
					
							if($user == $dbusername && $pass == $dbpassword  )// controllo inserimento dati login
							{
									
									//gestione dei privilegi degli utenti
									if($dblivello=='A'){ // controllo se è un utente
										//sessione amministratore
										session_start();
										$_SESSION['sess_user']=$user;
										header("Location: pagAdmin.php");

										
									}else{
										
										//sessione utenti
										session_start();
										$_SESSION['sess_user']=$user;
										header("Location: pagUtenti.php");
										
									}
							}
								
																
							
						} else {
								//errore1: Username o Password sbagliati
								echo  "<div id = 'mask_3'></div>
								
										<div id='error'>
							
							
										<div id='image_error'>
												
												<img src='image/cane_error.png'>
								
											</div>
								
										<p class='p_error'>USERNAME O PASSWORD ERRATI</p>
							
										<div id='exit_error'>
										<button type='button' class='close_error'> <img src='image/exit_img.png' width='10 px' height='10 px' ></button>
								
										</div>
								
								
								
										</div>";
								}//fine else
					
					
					} else {
								//errore 2: non vengono inseriti i dati
								echo "<div id = 'mask_3'></div>
										
										<div id='error'>
											
											
										<div id='image_error'>	
																					
												<img src='image/cane_error.png'>
												
											</div>
										
										<p class='p_error'>TUTTI I CAMPI SONO OBBLIGATORI</p>
											
										<div id='exit_error'>
										<button type='button' class='close_error'> <img src='image/exit_img.png' width='10 px' height='10 px' ></button>
										
										</div>
										
		
										
										</div>";
								
									 
								
							}//fine else
					}//fine isset
					?>
