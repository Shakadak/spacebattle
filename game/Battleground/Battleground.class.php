<?php
require_once('SpaceShips/BattleShip.class.php');

Final Class Battleground
{
	const WIDTH = 150;
	const HEIGHT = 100;
	private $_newturn = True;

	public function __construct()
	{
		$bg = [];
		for ($i = 0; $i < self::HEIGHT; $i++)
		{
			for ($j = 0; $j < self::WIDTH; $j++)
				$bg[$i][$j] = NULL;
		}
		file_put_contents(".bg", serialize($bg));
	}

	public function newturn()
	{
		if ($this->_newturn)
		{
			$this->_newturn = False;
			return (True);
		}
		return ($this->_newturn);
	}

	public function endturn()
	{
		$this->_newturn = True;
	}

	public static function display()
	{
		$bg = unserialize(file_get_contents(".bg"));
		print("<table>");
		$i = 0;
		foreach ($bg as $row)
		{
			$j = 0;
			print("<tr>");
			foreach ($row as $block)
			{
				if ($block instanceof BattleShip)
					print($block->getCell($i, $j));
				else
					print("<td></td>");
				$j++;
			}
			$i++;
			print("</tr>");
			print(PHP_EOL);
		}
		print("</table>");
	}

	public static function doc()
	{
		return (file_get_contents("Battleground.doc.txt"));
	}
}
?>
