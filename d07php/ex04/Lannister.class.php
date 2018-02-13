<?php
	class Lannister
	{
		protected $inceste = FALSE;

		public function sleepWith($perso)
		{
			if ( $perso INSTANCEOF Cersei AND $this->inceste === TRUE )
				print( "With pleasure, but only in a tower in Winterfell, then." . PHP_EOL );
			elseif ( $perso INSTANCEOF Lannister )
				print( "Not even if I'm drunk !" . PHP_EOL );
			else
				print( "Let's do this." . PHP_EOL );
		}

	}
	/*
	jt Not even if I'm drunk !
	js Let's do this.
	jc With pleasure, but only in a tower in Winterfell, then.

	tj Not even if I'm drunk !
	ts Let's do this.
	tc Not even if I'm drunk !

	AND $perso INSTANCEOF Tyrion
	*/

?>