<?php
require_once('BattleShip.class.php');
require_once('Battleground/Battleground.class.php');
require_once('Battleground/EnumDirection.class.php');

Class OrkExplozeur extends BattleShip
{
	protected $_name = "Ork'n'Roll";
	protected $_x;
	protected $_y;
	protected $_z = EnumDirection::SOUTH;
	protected $_pp = 10;
	protected $_hp = 4;
	protected $_shield = 0;
	protected $_baseshield = 0;
	protected $_speed = 19;
	protected $_remainingspeed = 19;
	protected $_lastspeed = 0;
	protected $_handling = 3;
	protected $_size = ['width' => 1, 'length' => 5];
	protected $_center = 2;
	protected $_sprite = "lightgreen";
	protected $_player = "none";
	protected $_weapons = ['laser_battery'];

	public static function doc()
	{
		return (file_get_contents("OrkExplozeur.doc.txt"));
	}
}
