<html><head>
<meta http-equiv="refresh" content="0; url=battlefield.php">
</head>
<body>
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
$_SESSION['ships'][] = new OrkExplozeur(['x' => 10, 'y' => 10, 'z' => EnumDirection::SOUTH, 'name' => "Ork'n'Roll", 'width' => 1, 'length' => 5, 'sprite' => "green", 'player' => '1']);
$_SESSION['ships'][] = new ImpCuirasse(['x' => 130, 'y' => 90, 'z' => EnumDirection::NORTH, 'name' => "Imperator Deus", 'width' => 2, 'length' => 6, 'sprite' => "red", 'player' => '2']);
$_SESSION['ships'][] = new Asteroid(['x' => 60, 'y' => 70, 'z' => EnumDirection::NORTH, 'name' => "Eroded Cube", 'width' => 7, 'length' => 5, 'sprite' => "brown", 'player' => 'none']);
$_SESSION['ships'][] = new Asteroid(['x' => 20, 'y' => 90, 'z' => EnumDirection::SOUTH, 'name' => "Lifeless Field", 'width' => 10, 'length' => 10, 'sprite' => "brown", 'player' => 'none']);
$_SESSION['ships'][] = new Asteroid(['x' => 35, 'y' => 27, 'z' => EnumDirection::NORTH, 'name' => "Hot as Hadess Mass", 'width' => 10, 'length' => 4, 'sprite' => "brown", 'player' => 'none']);
$_SESSION['ships'][] = new Asteroid(['x' => 135, 'y' => 87, 'z' => EnumDirection::NORTH, 'name' => "Merciless Meteor", 'width' => 12, 'length' => 5, 'sprite' => "brown", 'player' => 'none']);
$_SESSION['ships'][] = new Asteroid(['x' => 88, 'y' => 42, 'z' => EnumDirection::NORTH, 'name' => "Ashen Boulder", 'width' => 8, 'length' => 9, 'sprite' => "brown", 'player' => 'none']);
$_SESSION['ships'][] = new Asteroid(['x' => 124, 'y' => 12, 'z' => EnumDirection::NORTH, 'name' => "Ice Continent", 'width' => 10, 'length' => 10, 'sprite' => "brown", 'player' => 'none']);
?>
<<<<<<< HEAD
</body></html>
=======
</html></html>
>>>>>>> 84a2dc9b00d5893ba709f46397662e315b2b3d1c
