<!DOCTYPE html>
<html>
<head>
	<title>Rush 42</title>
	<meta charset ="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id ="header">
		<div id ="logo">
			<a href ="index.php">Warhammer 42K</a>
		</div>
		<div id ="banniere-slide">
		</div>
	</div>
	<div id ="body">
		<body width="100%">
		<div id ="body-body">
			<div id ="body-result">
			<?php
				include("result.php");
			?>
			</div>
		</div>
		<div id ="check-connexion">
			<?php
				session_start();
				if (isset($_POST['logout']))
				{
					$_SESSION['login'] = NULL;
					$_SESSION['passwd'] = NULL;
				}
				if (isset($_POST['login']))
				{
					if (isset($_POST['username']) && $passwd = isset($_POST['passwd']))
					{
						include("config.php");
						$mysqli = mysqli_connect($ip, $login, $passwd, 'rush');
						$check1 = mysqli_prepare($mysqli, "SELECT id FROM account WHERE login='".$_POST['username']."'");
						mysqli_stmt_execute($check1);
						mysqli_stmt_store_result($check1);
						mysqli_stmt_num_rows($check1);
						$check2 = mysqli_prepare($mysqli, "SELECT id FROM account WHERE passwd='".hash("whirlpool", $_POST['passwd'])."'");
						mysqli_stmt_execute($check2);
						mysqli_stmt_store_result($check2);
						mysqli_stmt_num_rows($check2);
						$usr = mysqli_stmt_num_rows($check2);
						$pwd = mysqli_stmt_num_rows($check2);
						if ($usr == 1 && $pwd == 1)
						{
							$_SESSION['login'] = $_POST['username'];
							$_SESSION['passwd'] = hash("whirlpool", $_POST['passwd']);
							$usr = $_SESSION['login'];
							$pwd = $_SESSION['passwd'];
							include("connected.php");
						}
						else
							include("notconnected.php");
					}
				}
				else if (isset($_SESSION['login']))
				{
					include("connected.php");
				}
				else
				{
					$_SESSION['login'] = NULL;
					include("notconnected.php");
				}
			?>
		</div>
		<div id ="bottom">
			<span>&copy; 2014 npineau, ivannere &amp; tbourgeo</span>
		</div>
	</div>
</body>
</html>

