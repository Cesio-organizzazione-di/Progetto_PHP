<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	require_once("./stile_interno.php");
	$msg = "";

	//inserire uno stile interno
	
	//connessione db
	require_once("./connessione1.php");
	
	session_start();
	if (!isset($_SESSION['accessoPermesso'])) 
		header('Location: login.php');

	echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>
		<title>Cesiogram</title>
		<?php echo $stileInterno; ?>
	</head>

	<body>
		
		<?php
			require_once("menu_home.php");
		?>
		<h1> Home </h1>
		<?php 
			require_once("carica_post.php");	
			require_once("elimina_post.php");
		?>
		
		<div class="pubblica">
			<form action="carica_post.php" method="post">
				<textarea rows="5" cols="42" name="testo">Cosa hai fatto oggi?</textarea><br />
				<input type="submit" name="invio" value="Pubblica">
			</form>
		</div>
		
		<div class="post">
			<?php
				//query per accedere a tutti i post
				$sql = "SELECT * FROM $post_table_name ORDER BY postId DESC";
	
				if(!$resultQ = mysqli_query($connection, $sql)){
					$msg = "<p>Si è verificato un errore!</p>";
					exit();
				}
				
				while($row = mysqli_fetch_array($resultQ)){
					$post = "<div class=\"ogniPost\">\n<strong><p>";
					if($row['user'] == $_SESSION['userName']){
						$post .= $row['user'];
						$post .= "\n</strong></p><hr /><form action=\"elimina_post.php\" method=\"post\"><input class=\"elimina\" type=\"submit\" name=\"eliminando\" value=".$row['postId']." /></form>\n";
					}else{
						$post .= $row['user'];
						$post .= "\n</strong><hr />\n";
					}
					$post .= "\n<div class=\"wrap\">\n";
					$post .= $row['testo']."</div></div>";
					echo $post;
				}
			
			?>
		</div>
		
		<div class="destra">
			<h3> Il tuo profilo: </h3>
			<p> <strong>Username:</strong> <?php echo $_SESSION['userName'] ?> </p>
			<p> <strong>Nome:</strong> <?php echo $_SESSION['nome'] ?> </p>
			<p> <strong>Cognome:</strong> <?php echo $_SESSION['cognome'] ?> </p>
			<p> <strong>Data di nascita:</strong> <?php echo $_SESSION['dataNascita'] ?> </p>
			<p> <strong>Professione:</strong> <?php echo $_SESSION['professione'] ?> </p>
			<p> <strong>Biografia:</strong> <?php echo $_SESSION['bio'] ?> </p>
			<p> <strong>Ti sei collegato alle:</strong> <?php echo date('g:i a', $_SESSION['dataLogin']); ?> </p>
			<p> <strong>Finora su Cesiogram hai speso:</strong> <?php echo $_SESSION['spesaFinora']." &euro;"; ?> </p>
		</div>

	</body>
</html>