<?php
	$user_table_name = "Users";
	$prodotti_table_name = "Prodotti";
	
	//TENTATIVO DI CONNESSIONE
	$connection = new mysqli("localhost", "lweb18", "lweb18", $db_name);
	
	//CONTROLLO CONNESSIONE
	if(mysqli_connect_errno()) {
		printf("Errore di connessione al db: %s\n", mysqli_connect_error($connection));
		exit();
	}
?>