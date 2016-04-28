<div id="error_2">
			<!-- INIZIO FORM REGISTRAZIONE  -->
			
<?php
if(isset($_POST["submit"])){ //verifica se la variabile è definita e non è NULL

	// verifica che i valori inseriti nei campi non siano vuoti
if(!empty($_POST['Nome']) && !empty($_POST['Cognome'])&& !empty($_POST['Username'])&& !empty($_POST['Password'])) {
	
	$nom=$_POST['Nome'];
	$cogn=$_POST['Cognome'];
	$user=$_POST['Username'];
	$pass=$_POST['Password'];
	
	//connessione al database

	$con=mysql_connect('localhost','poddaAndrea','paguro8228') or die(mysql_error());
	mysql_select_db('amm15_poddaAndrea') or die("DB inesistente");
	
	//query di selezione (per prelevare tutte le info all'interno del db)
	$query=mysql_query("SELECT * FROM registrazione WHERE username='".$user."'");
	$numrows=mysql_num_rows($query);//conta il numero di righe coinvolta dalla query (
	
	if($numrows==0)// verifica se il numero di righe è pari a zero (se la query non ha prodotto risultati)
	{
		//query di inserimento ( inserisce nel database i dati forniti da input nel form)
	$sql="INSERT INTO registrazione(livello,nome,cognome,username,password) VALUES('U','$nom','$cogn','$user','$pass')";
	
	// restituisce true: se la query è avvenuta con successo, false: altrimenti
	$result=mysql_query($sql); 

	//gestione degli errori a video della mysql_query
	if($result){
	echo "l'Account e' stato creato con successo";
	} else {
	echo "Errore: CREAZIONE UTENTE FALLITO!";
	}

	} else {
	echo "questo username esiste gia'! Inserisci un nuovo username ";
	}

} else {
	echo "tutti i campi sono obbligatori!";
}
}
?>

						
</div>
