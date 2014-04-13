<?php
require_once('Battleground/Battleground.class.php');
require_once('Battleground/EnumDirection.class.php');

Class BattleShip
{
	final public function __construct(array $kwargs)
	{
		$this->_x = $kwargs['x'];
		$this->_y = $kwargs['y'];
		$this->_name = $kwargs['name'];
		$this->_z = $kwargs['z'];
		$this->_sprite = $kwargs['sprite'];
		$this->_player = $kwargs['player'];
		self::setPos(0);
	}

<<<<<<< HEAD
	public function getCell($y, $x, $player)
	{
		$str = "<td class='boardcell' style='background-color:";
=======
	public function getCell($y, $x)
	{
		$str = "<td style='background-color:";
>>>>>>> 84a2dc9b00d5893ba709f46397662e315b2b3d1c
		if ($x == $this->_x && $y == $this->_y && $this->_player != "none")
			$str .= "black";
		else
			$str .= $this->_sprite;
<<<<<<< HEAD
		if ($player == $this->_player)
		{
		}
		$str .= ";cursor:hand' onclick=\"window.location.href = 'battlefield.php?action=pp'\"></td>";
=======
		$str .= "'></td>";
>>>>>>> 84a2dc9b00d5893ba709f46397662e315b2b3d1c
		return ($str);
	}

	public function checkPlayer($player)
	{
<<<<<<< HEAD
		return ($this->_player == $player);
=======
		return ($this->player == $player);
>>>>>>> 84a2dc9b00d5893ba709f46397662e315b2b3d1c
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

	final public function setPos($dist)
	{
		switch($this->_z)
		{
		case EnumDirection::NORTH:
			self::_removeV(1, 1);
			$this->_y -= $dist;
			self::_moveV(1, 1);
			break;
		case EnumDirection::SOUTH:
			self::_removeV(-1, -1);
			$this->_y += $dist;
			self::_moveV(-1, -1);
			break;
		case EnumDirection::EAST:
			self::_removeH(-1, -1);
			$this->_x += $dist;
			self::_moveH(-1, -1);
			break;
		case EnumDirection::WEST:
			self::_removeH(1, 1);
			$this->_x -= $dist;
			self::_moveH(1, 1);
			break;
		}
	}



	final public function getZ()
	{
		return ($this->_z);
	}

	final public function setZ($turn)
	{
		switch($this->_z)
		{
		case EnumDirection::NORTH:
			self::_removeV(1, 1);
			$this->_x += $this->_center * $turn;
			$this->_y += $this->_center;
			$this->_z = -2 * $turn;
			break;
		case EnumDirection::SOUTH:
			self::_removeV(-1, -1);
			$this->_x -= $this->_center * $turn;
			$this->_y -= $this->_center;
			$this->_z = 2 * $turn;
			break;
		case EnumDirection::EAST:
			self::_removeH(-1, -1);
			$this->_x -= $this->_center;
			$this->_y += $this->_center * $turn;
			$this->_z = -$turn;
			break;
		case EnumDirection::WEST:
			self::_removeH(1, 1);
			$this->_x += $this->_center;
			$this->_y -= $this->_center * $turn;
			$this->_z = $turn;
			break;
		}
		self::setPos(0);
	}

	final protected function _removeH($modx, $mody)
	{
		$bg = unserialize(file_get_contents(".bg"));
		for ($i = 0; $i < $this->_size['width']; $i++)
		{
			for ($j = 0; $j < $this->_size['length']; $j++)
				$bg[$this->_y + $i * $mody][$this->_x + $j * $modx] = NULL;
		}
		file_put_contents(".bg", serialize($bg));
	}

	final protected function _removeV($modx, $mody)
	{
		$bg = unserialize(file_get_contents(".bg"));
		for ($i = 0; $i < $this->_size['width']; $i++)
		{
			for ($j = 0; $j < $this->_size['length']; $j++)
				$bg[$this->_y + $j * $mody][$this->_x + $i * $modx] = NULL;
		}
		file_put_contents(".bg", serialize($bg));
	}

	final protected function _moveH($modx, $mody)
	{
		$bg = unserialize(file_get_contents(".bg"));
		for ($i = 0; $i < $this->_size['width']; $i++)
		{
			for ($j = 0; $j < $this->_size['length']; $j++)
				$bg[$this->_y + $i * $mody][$this->_x + $j * $modx] = $this;
		}
		file_put_contents(".bg", serialize($bg));
	}

	final protected function _moveV($modx, $mody)
	{
		$bg = unserialize(file_get_contents(".bg"));
		for ($i = 0; $i < $this->_size['width']; $i++)
		{
			for ($j = 0; $j < $this->_size['length']; $j++)
				$bg[$this->_y + $j * $mody][$this->_x + $i * $modx] = $this;
		}
		file_put_contents(".bg", serialize($bg));
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
