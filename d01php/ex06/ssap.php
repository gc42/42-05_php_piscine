#!/usr/bin/php
<?php

function trimUltime($str) {
	$str = str_replace('\t', " ", $str);
	$str = trim($str);
	$str = preg_replace("#[ ]+#", " ", $str);
	return $str;
}

if ($argc > 1)
{
	$tab = $argv;
	// Supprimer le premier element et decaler les values
	unset($tab[0]);
	$tab = array_values($tab);

	// Concatener les arguments
	$str = implode(" ", $tab);	// Concatener arguments, separe par espace

	// Supprimer les espaces
	$str = trimUltime($str);

	// Separation en mots
	$tab = explode(" ", $str);

	// Suppression des valeurs vides, mais ni '0' ni False
	$tab = array_filter($tab, function($var) {
		return (!($var == '' || is_null($var)));
		});

	// Tri de la table
	sort($tab);

	foreach ($tab as $value) {
		echo $value . "\n";
	}
}
else
	exit();

?>