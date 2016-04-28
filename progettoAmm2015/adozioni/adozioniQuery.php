

<?php
	//Query per stampare a video il contenuto di adozioni salvato nel database
	
	$con=mysql_connect('localhost','poddaAndrea','paguro8228') or die(mysql_error()); //connessione al db
	mysql_select_db('amm15_poddaAndrea') or die("DB inesistente");
									
	$query=mysql_query("SELECT * FROM amministrazione");// seleziona tutto il contenuto dalla tabella amministratore
									
	// loop per stampare i risultati
	while ($ris_query = mysql_fetch_array($query))
									
	{
											
		$nome= htmlentities($ris_query['adozioni']); //stampa il contenuto della colonna adozioni
		echo "$nome";
		
									
	}//While
												
?>	
