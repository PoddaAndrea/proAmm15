

<?php
	//logout utente o admin
	session_start();
	unset($_SESSION['sess_user']); //viene "inserita" la sessione che successivamente verrà "distrutta" 
	session_destroy();// distrugge la sessione
	header("location: index.php");//riporta alla pagina index
?>