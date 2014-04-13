<?php
require_once('BattleShip.class.php');
require_once('Battleground/Battleground.class.php');
require_once('Battleground/EnumDirection.class.php');

Class ImpCuirasse extends BattleShip
{
	protected $_name = "Imperator Deus";
	protected $_x;
	protected $_y;
	protected $_z = EnumDirection::NORTH;
	protected $_center = 3;
	protected $_pp = 10;
	protected $_hp = 4;
	protected $_shield = 2;
	protected $_baseshield = 0;
	protected $_speed = 19;
	protected $_remainingspeed = 19;
	protected $_lastspeed = 0;
	protected $_handling = 3;
	protected $_size = ['width' => 2, 'length' => 7];
	protected $_sprite = "red";
	protected $_weapons = ['laser_battery'];
	protected $_player = "none";

	public static function doc()
	{
		return (file_get_contents("ImpCuirasse.doc.txt"));
	}
}
