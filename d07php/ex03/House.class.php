<?php
	abstract class House
	{
		// FORCE LES CLASSES FILLES A DEFINIR CES METHODES
		abstract public function getHouseName();
		abstract public function getHouseMotto();
		abstract public function getHouseSeat();

		// METHODE COMMUNE QUI SERA HERITEE PAR LES FILLES
		public function introduce()
		{
			//      House ## of ## :  "##"
			printf("House %s of %s : \"%s\"\n", $this->getHouseName(), $this->getHouseSeat(), $this->getHouseMotto());
		}
	}
//House Stark of Winterfell : "Winter is coming"
//House Martell of Sunspear : "Unbowed, Unbent, Unbroken"
?>
