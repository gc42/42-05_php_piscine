#!/usr/bin/php
<?php

while (1) {
	echo "Entrez un nombre: ";
	$line = trim(fgets(STDIN)); //lit une ligne depuis STDIN
	if (feof(STDIN) == TRUE)
			exit("\n");

	if (is_numeric($line))
	{
		if ($line % 2 == 0) 
			echo "Le chiffre $line est Pair\n";
		else
			echo "Le chiffre $line est Impair\n";
	}
	else
		echo "'" . $line . "' n'est pas un chiffre\n";
}

?>