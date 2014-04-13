<html>
	<head>
		<link href="style.css" rel="stylesheet" type="text/css" />
		<script langage="javascript">top.frames['panel'].location = 'panel.php';</script>
	</head>
<style></style>
<body>
	<div id="board">
	<?php
	require_once('Battleground/Battleground.class.php');
	require_once('SpaceShips/OrkRavajeur.class.php');
	require_once('SpaceShips/OrkExplozeur.class.php');
	require_once('SpaceShips/ImpCuirasse.class.php');
	require_once('Battleground/EnumDirection.class.php');
	require_once('SpaceShips/Asteroid.class.php');
	session_start();
	$bg = $_SESSION['bg'];
	if ($bg->newturn())
	{
		$_SESSION['turn']++;
	}
	if (!isset($_POST['sent']))
		$_POST['sent'] = "NOK";
	if ($_POST['sent'] == "OK")
	{
		$ship = $_SESSION['ships'][$_SESSION['turn'] % 2];
		if (isset($_POST['steering']))
		{
			switch ($_POST['steering'])
			{
			case 1:
				$ship->setZ(EnumDirection::LEFT);
				break;
			case 2:
				$ship->setZ(EnumDirection::RIGHT);
				break;
			}
		}
		if (isset($_POST['movement']))
			$ship->setPos($_POST['movement']);
	}
	$_SESSION['bg']->display();
	?>
	</div>
</body></html>
