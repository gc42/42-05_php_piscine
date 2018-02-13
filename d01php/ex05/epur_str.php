#!/usr/bin/php
<?php

/* Seulement le premier argument et reduit les espaces a un seul entre chaque mot, et aucun en debut ou fin de chaine.
** Il n'y a que des espaces, pas de tabulations ou autre.*/
/* Fonctions : trim, ltrim, rtrim */

function trimUltime($str) {
	//$str = str_replace('\t', " ", $str);	// Supprime les \t ecrits en dur dans sh
	$str = trim($str);						// Supprime les espaces avant et apres
	$str = preg_replace("#[ ]+#", " ", $str);	// Concatene les espaces multiples
	return $str;
}

if ($argc == 2) {
	echo trimUltime($argv[1]) . "\n";
}

?>