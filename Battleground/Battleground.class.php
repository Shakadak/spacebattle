<?php
require_once('SpaceShips/BattleShip.class.php');

Final Class Battleground
{
	const WIDTH = 150;
	const HEIGHT = 100;
	private $battlefield;

	public function __construct()
	{
		for ($i = 0; $i < self::HEIGHT; $i++)
		{
			for ($j = 0; $j < self::WIDTH; $j++)
				$this->battlefield[$i][$j] = 1;
		}
	}

	public function display()
	{
		print("<table>");
		foreach ($this->battlefield as $row)
		{
			print("<tr>");
			foreach ($row as $block)
			{
				if ($block instanceof Battleship)
				{
					print("<td style='background-color:");
					print($block->getColor());
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