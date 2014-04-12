<?php
require_once('Battleground/Battleground.class.php');
require_once('Battleground/EnumDirection.class.php');

Class BattleShip
{
	protected $_name = "Big Ass Meteor in your Face";
	protected $_x = 0;
	protected $_y = 0;
	protected $_z = EnumDirection::NORTH;
	protected $_rotate = 42;
	protected $_pp = 42;
	protected $_ppused = 42;
	protected $_hp = 42000;
	protected $_shield = 0;
	protected $_speed = 0;
	protected $_speedused = 0;
	protected $_handling = 9000;
	protected $_size = ['width' => 10, 'length' => 13];
	protected $_sprite = "brown";

	final public function __construct(array $kwargs, &$bg)
	{
		$this->_x = $kwargs['x'];
		$this->_x = $kwargs['y'];
		$this->_name = $kwargs['name'];
		$this->_z = $kwargs['z'];
		$this->_sprite = $kwargs['sprite'];
		self::setPos(0, $bg);
	}

	public static function doc()
	{
		return (file_get_contents("BattleShip.doc.txt"));
	}

	final public function getName()
	{
		return ($this->_name);
	}

	final public function getPos()
	{
		return ($this->_pos);
	}

	final public function getSprite()
	{
		return ($this->_sprite);
	}

	final public function setPos($dist, &$bg)
	{
		switch($this->_z)
		{
		case EnumDirection::NORTH:
			$this->_y -= $dist;
			self::_removeV($bg, 1, 1);
			self::_moveV($bg, 1, 1);
			break;
		case EnumDirection::SOUTH:
			$this->_y += $dist;
			self::_removeV($bg, -1, -1);
			self::_moveV($bg, -1, -1);
			break;
		case EnumDirection::EAST:
			$this->_x += $dist;
			self::_removeH($bg, -1, -1);
			self::_moveH($bg, -1, -1);
			break;
		case EnumDirection::WEST:
			$this->_x -= $dist;
			self::_removeH($bg, 1, 1);
			self::_moveH($bg, 1, 1);
			break;
		}
	}



	final public function getZ()
	{
		return ($this->_z);
	}

	final public function setZ(array $turn)
	{
		switch($this->_z)
		{
		case EnumDirection::NORTH:
			self::setNorth($turn);
			break;
		case EnumDirection::SOUTH:
			self::setSouth($turn);
			break;
		case EnumDirection::EAST:
			self::setEast($turn);
			break;
		case EnumDirection::WEST:
			self::setWest($turn);
			break;
		}
	}

	final protected function _removeV(&$bg, $modx, $mody)
	{
		for ($i = 0; $i < $this->_size['width']; $i++)
		{
			for ($j = 0; $j < $this->_size['length']; $j++)
				$bg->battlefield[$this->_y + $i * $mody][$this->_x + $j * $modx] = NULL;
		}
	}

	final protected function _removeH(&$bg, $modx, $mody)
	{
		for ($i = 0; $i < $this->_size['width']; $i++)
		{
			for ($j = 0; $j < $this->_size['length']; $j++)
				$bg->battlefield[$this->_y + $j * $mody][$this->_x + $i * $modx] = NULL;
		}
	}

	final protected function _moveV(&$bg, $modx, $mody)
	{
		for ($i = 0; $i < $this->_size['width']; $i++)
		{
			for ($j = 0; $j < $this->_size['length']; $j++)
				$bg->battlefield[$this->_y + $i * $mody][$this->_x + $j * $modx] = $this;
		}
		print_r($bg->battlefield);
	}

	final protected function _moveH(&$bg, $modx, $mody)
	{
		for ($i = 0; $i < $this->_size['width']; $i++)
		{
			for ($j = 0; $j < $this->_size['length']; $j++)
				$bg->battlefield[$this->_y + $j * $mody][$this->_x + $i * $modx] = $this;
		}
	}

	final public function getSpeed()
	{
		return ($this->_speed - $this->_speedused);
	}

/*	public function getHP(
	{
		return ($this->_hp);
	})
	public function setHP($malus)
	{
		$this->_hp -= $malus;
	}
	public function getPP()
	{
		return ($this->_pp);
	}
	public function getShield()
	{
		return ($this->_shield);
	}
	public function setShield($bonus)
	{
		$this->_shield += $bonus;
	}
	public function getHandling()
	{
		return ($this->_handling);
	}
	public function getSize()
	{
		return ($this->_size);
	}
	public function getWeapons()
	{
		return ($this->_weapons);
	}
 */}
