<html>
<head>
<<<<<<< HEAD
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="panel.css">
	</head>
=======
	<link rel="stylesheet" type="text/css" href="panel.css">
>>>>>>> 84a2dc9b00d5893ba709f46397662e315b2b3d1c
</head>
<style></style>
<body style="background-image: url(bg.jpg);">
<?php
require_once('Battleground/Battleground.class.php');
require_once('SpaceShips/OrkRavajeur.class.php');
require_once('SpaceShips/OrkExplozeur.class.php');
require_once('SpaceShips/ImpCuirasse.class.php');
require_once('Battleground/EnumDirection.class.php');
require_once('SpaceShips/Asteroid.class.php');
<<<<<<< HEAD
session_start();
include('board.php');
if (!isset($_GET['action']))
	include('panel-ship.php');
else
{
	switch ($_GET['action'])
	{
	case "pp":
		include('panel-points.php');
		break;
	case "move":
		include('panel-move.php');
		break;
	}
}
?>
=======
session_start();?>
<iframe style="width:70%;height:95%;float:left" src="board.php" name="board" frameborder=0></iframe>
<iframe style="width:30%;height:95%;float:left" src="panel-ship.php" name="panel-ship" frameborder=0></iframe>
<iframe style="width:30%;height:0%;float:left" src="panel-points.php" name="panel-point" frameborder=0></iframe>
<iframe style="display:none;width:30%;height:95%;float:left" src="panel-move.php" name="panel-move" frameborder=0></iframe>
<iframe style="width:30%;height:0%;float:left" src="panel-ship.php" name="panel-ship" frameborder=0></iframe>
<iframe style="width:30%;height:0%;float:left" src="panel-ship.php" name="panel-ship" frameborder=0></iframe>
>>>>>>> 84a2dc9b00d5893ba709f46397662e315b2b3d1c
</body></html>
