#!/usr/bin/php
<?php

/* Affiche les differents parametres de la ligne de commande, dans l'ordre recu. Le nom du programme ne s'affiche pas.*/
/*var_dump($argv);*/

if ($argc > 1) {
	$i = 1;
	while ($i < $argc) {
		echo $argv[$i] . "\n";
		$i++;
	}
}

?>