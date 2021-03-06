<?php
error_reporting (E_ALL &~E_NOTICE);
session_start();                // sempre prima di qualunque contenuto html ...

if (!isset($_SESSION['accessoPermesso'])) header('Location: mysql.ST.login.php');

require_once("./connessione.php");
require_once("stile_interno.php");
require_once("menu_home.php");
//ELIMINAZIONE DAL CARRELLO
$msg = "";
	if(empty($_POST['eliminandi'])) {
		if(isset($_POST['elimina']) && $_SESSION['carrello']) 
			$msg = "<em> Se vuoi elimanare qualcosa, prima selezionala!</em>";
	}
	else {
		foreach($_POST['eliminandi'] as $k =>$indiceElimina)
			unset($_SESSION['carrello'][$indiceElimina]);
	}
?>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head> 
		<title> Il tuo carrello - Cesiogram </title>
		<?php echo $stileInterno ?>
	</head>
	
	<body>
		
		<h1> Il tuo carrello </h1>
		<table class = "carrello";>
			<tr>
				<td width = "75%">
				  <form action = "<?php $_SERVER['PHP_SELF']?>" method = "post"> 
					<?php if(empty($_SESSION['carrello']) || isset($_POST['svuota'])) {
						  $_SESSION['carrello'] = array();
						  echo "<em> Il tuo carrello è vuoto </em>";
						  }
						  else {
							foreach($_SESSION['carrello'] as $k=>$v) {
								$sql = "SELECT * 
								FROM $prodotti_table_name
								WHERE nome = \"$v\"
								";
								
								if(!$resultQ = mysqli_query($connection, $sql)) {
									echo "<em> Si è verificato un errore </em>";
									exit();
								}
		
								$row = mysqli_fetch_array($resultQ); 
								echo "<p class = \"prodotti\"><input type = \"checkbox\" name = \"eliminandi[]\" value = \"$k\" > $v  <span class = \"prezzi\">(".$row['costo']." &euro;)</span></p>";
						    }
						  }
					?>
				</td>
				<td>
					<p><input class = "bottone" type = "submit" name = "elimina" value = "Elimina dal carrello"> </p>
					<p><input class = "bottone" type = "submit" name = "svuota" value = "Svuota il carrello"></p>
		</form>
					<p><a href = "shop.php"><button class = "bottone"> Continua gli acquisti </button></a> </p>
					<p><a href = "riepilogo.php"><button class = "bottone"> Vai  al pagamento </button></a> </p>
					
				</td>
			</tr>
		  </table>
		  <?php echo $msg ?>
	</body>
</html>