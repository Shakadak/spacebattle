<meta charset ="utf-8">
<link rel="stylesheet" type="text/css" href="styles.css">
<div id = "connected">
	<h2>Bonjour</h2>
	<?php
		echo("<span class ='connected-user'>".$_SESSION['login']."</span><br>");
	?>
	<form method="POST" action="index.php">
		<input class ="connected-logout" type="submit" name="logout" value="Déconnection" />
	</form>
</div>
