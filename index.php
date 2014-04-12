<?php
require_once('Battleground/Battleground.class.php');
require_once('SpaceShips/OrkRavajeur.class.php');
require_once('SpaceShips/OrkExplozeur.class.php');
require_once('SpaceShips/ImpCuirasse.class.php');
require_once('SpaceShips/Asteroid.class.php');
require_once('Battleground/EnumDirection.class.php');

session_start();

$_SESSION['turn'] = -1;
$_SESSION['bg'] = new Battleground();
$_SESSION['ships'][] = new OrkExplozeur(['x' => 10, 'y' => 10, 'name' => "Ork'n'Roll", 'width' => 1, 'length' => 5, 'sprite' => "green"]);
$_SESSION['ships'][] = new ImpCuirasse(['x' => 130, 'y' => 90, 'name' => "Imperator Deus", 'width' => 2, 'length' => 6, 'sprite' => "red"]);
$_SESSION['ships'][] = new Asteroid(['x' => 60, 'y' => 70, 'name' => "Eroded Cube", 'width' => 7, 'length' => 5, 'sprite' => "brown"]);
$_SESSION['ships'][] = new Asteroid(['x' => 20, 'y' => 90, 'name' => "Lifeless Field", 'width' => 10, 'length' => 10, 'sprite' => "brown"]);
$_SESSION['ships'][] = new Asteroid(['x' => 35, 'y' => 27, 'name' => "Hot as Hadess Mass", 'width' => 10, 'length' => 4, 'sprite' => "brown"]);
$_SESSION['ships'][] = new Asteroid(['x' => 140, 'y' => 90, 'name' => "Merciless Meteor", 'width' => 12, 'length' => 5, 'sprite' => "brown"]);
$_SESSION['ships'][] = new Asteroid(['x' => 88, 'y' => 42, 'name' => "Ashen Boulder", 'width' => 8, 'length' => 9, 'sprite' => "brown"]);
$_SESSION['ships'][] = new Asteroid(['x' => 124, 'y' => 12, 'name' => "Ice Continent", 'width' => 10, 'length' => 10, 'sprite' => "brown"]);
?>
<html><head>
<meta http-equiv="refresh" content="10; url=battlefield.php">
</head></html>
