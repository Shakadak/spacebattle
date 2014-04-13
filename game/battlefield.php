<html>
<head>
	<link rel="stylesheet" type="text/css" href="panel.css">
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
session_start();?>
<iframe style="width:70%;height:95%;float:left" src="board.php" name="board" frameborder=0></iframe>
<iframe style="width:30%;height:95%;float:left" src="panel-ship.php" name="panel-ship" frameborder=0></iframe>
<iframe style="width:30%;height:0%;float:left" src="panel-points.php" name="panel-point" frameborder=0></iframe>
<iframe style="display:none;width:30%;height:95%;float:left" src="panel-move.php" name="panel-move" frameborder=0></iframe>
<iframe style="width:30%;height:0%;float:left" src="panel-ship.php" name="panel-ship" frameborder=0></iframe>
<iframe style="width:30%;height:0%;float:left" src="panel-ship.php" name="panel-ship" frameborder=0></iframe>
</body></html>
