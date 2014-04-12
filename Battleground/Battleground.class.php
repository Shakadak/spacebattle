<?php
require_once('SpaceShips/BattleShip.class.php');

Final Class Battleground
{
	const WIDTH = 150;
	const HEIGHT = 100;
	private $_battlefield;
	private $_newturn = True;

	public function __construct()
	{
		for ($i = 0; $i < self::HEIGHT; $i++)
		{
			for ($j = 0; $j < self::WIDTH; $j++)
				$this->battlefield[$i][$j] = NULL;
		}
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

	public function enturn()
	{
		$this->_newturn = True;
	}

	public function display()
	{
		print("<table>");
		foreach ($this->battlefield as $row)
		{
			print("<tr>");
			foreach ($row as $block)
			{
				print_r($block);
				if ($block instanceof Battleship)
				{
					print("<td style='background-color:");
					print($block->getColor());
					print("OMG");
					print("'></td>");
				}
				else
					print("<td></td>");
			}
			print("</tr>");
			print(PHP_EOL);
		}
		print("</table>");
	}

	private function checkship(array $ships, $i, $j)
	{
		foreach ($ships as $ship)
		{
			$hull = $ship->getPos();
			$head = True;
			foreach ($hull as $block)
			{
				if (((int)($block / self::WIDTH) == $i) && ((int)($block % self::WIDTH) == $j))
				{
					print("<td style='background-color:");
					if ($head)
						print("black");
					else
						print($ship->getSprite());
					print("'></td>");
					return ;
				}
				$head = False;
			}
		}
		echo "<td></td>";
	}

	public static function doc()
	{
		return (file_get_contents("Battleground.doc.txt"));
	}
}
?>
