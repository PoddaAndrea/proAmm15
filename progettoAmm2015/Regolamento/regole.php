<!DOCTYPE html>
<html>
<head>
<link href="Regole-stile.css" rel="stylesheet" type="text/css">
<!--<script src="http://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

			<link href='https://fonts.googleapis.com/css?family=Lobster|Quicksand
			|Dancing+Script|Playball|Tangerine|Great+Vibes' 
			rel='stylesheet' type='text/css'>

<script>
$(document).ready(function(){
    $("#button_desc").click(function(){
        $("#content_descrizione").slideToggle("slow");
    });

    $("#button_req").click(function(){
        $("#content_requisiti").slideToggle("slow");
    });

    $("#button_acc").click(function(){
        $("#content_accesso").slideToggle("slow");
    });
});
</script>
</head>
<body> 
 
<!--<img src="image/2.jpg" width="" height="">-->
<div id="wrapper_desc">
	<div id="logo_regole"></div></br>
	
	<button id="button_desc">Descrizione dell'applicazione</button></br>
	
		<div id="content_descrizione">
		
			
				L'applicazione supporta la registrazione dell'utente sul web.
				La funzionalit&agrave di base prevede che un soggetto possa inserire 
				i propri dati creando una sua pagina personale.
				I dati che figurano per ogni utente sono:
				
				<ul>
					<li>Nome</li>
					<li>Cognome</li>
					<li>Username</li>
					<li>Password</li>
				</ul></br>
				ogni utente &egrave in grado di poter accedere mediante login
				alla propria pagina personale per visualizzare:
				
				<ul>
					<li>La propria anagrafica</li>
					<li>Adottare (non implementato)</li>
					<li>Donazioni (creato form ma non inserito nel sito)</li>
				</ul></br>
				
				L'amministratore &egrave in grado di accedere mediante login 
				alla propria pagina personale per:
				<ul>
				<li>Modificare le "news" nell'index.</li>
				</ul>
				
				L'applicazione mantiene l'anagrafica di ogni utente e dell'amministratore.

		</div>
		
		
	<button id="button_req">Requisiti del progetto</button></br>
	
		<div id="content_requisiti">
		
	
				<ul>
					<li>Utilizzo di HTML e CSS</li>
					<li>Utilizzo di PHP e MYSQL</li>
					<li>Utilizzo JQUERY</li>
					<li>Due ruoli (utente, amministratore)</li>
					<li>Registrazione Utenti mediante apposito form</li>
					<li>Utilizzo di JAVASCRIPT (countdown caratteri txtBox, funzione: pagAdmin riga: 25)</li>
				</ul>
		</div>
		
		
	<button id="button_acc">Accesso al progetto</button></br>
	
		<div id="content_accesso">
				
				La homepage del progetto si trova alla URL: <a href="http://spano.sc.unica.it/amm2015/poddaAndrea/progettoAmm2015/index.php" target="_blank"> 
				http://spano.sc.unica.it/amm2015/poddaAndrea/progettoAmm2015/index.php</a>.</br>
				</br>
				Si pu&ograve accedere al login con le seguenti credenziali:
				<ul>
				<li>Ruolo amministratore</li>
					<ul>
						<li>Username: Admin</li>
						<li>Password: 1234</li>
					</ul>
				<li>Ruolo Utente</li>
					<ul>
						<li>A discrezione dell'Utente.</li>
					</ul>
				</ul>
		</div>
</div>
	
</body>
</html>
