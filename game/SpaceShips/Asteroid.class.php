<?php
require_once('BattleShip.class.php');
require_once('Battleground/Battleground.class.php');
require_once('Battleground/EnumDirection.class.php');

Class Asteroid extends Battleship
{
	protected $_name = "Big Ass Meteor in your Face";
<<<<<<< HEAD
	protected $_z = EnumDirection::NORTH;
	protected $_x;
	protected $_y;
=======
	protected $_pos = [];
	protected $_z = EnumDirection::NORTH;
>>>>>>> 84a2dc9b00d5893ba709f46397662e315b2b3d1c
	protected $_rotate = 42;
	protected $_pp = 42;
	protected $_hp = 42000;
	protected $_shield = 0;
	protected $_speed = 0;
	protected $_handling = 9000;
	protected $_size = ['width' => 10, 'length' => 13];
	protected $_sprite = "brown";
<<<<<<< HEAD
	protected $_player = "none";
=======
>>>>>>> 84a2dc9b00d5893ba709f46397662e315b2b3d1c
	protected $_weapons = ['heavy gravity'];

	public static function doc()
	{
		return (file_get_contents("Asteroid.doc.txt"));
	}
}
?>
