<?php
	class NightsWatch implements IFighter
	{
		private $combattant = array();

		public function recruit($perso)
		{
			$this->combattant[] = $perso;
		}

		public function fight()
		{
			print("* looses his wolf on the enemy, and charges with courage *" . PHP_EOL) ;
			print("* flees, finds a girl, grows a spine, and defends her to the bitter end *" . PHP_EOL) ;
		}
	}
/*
     * looses his wolf on the enemy, and charges with courage *
     * flees, finds a girl, grows a spine, and defends her to the bitter end *
*/
?>