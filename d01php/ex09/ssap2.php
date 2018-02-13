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

	// Suppression des valeurs vides 
	$tab = array_filter($tab, function($var) {
		return (!($var == '' || is_null($var)));
		});


	$tab_alpha = [];
	$tab_digit = [];
	$tab_divers = [];

	foreach ($tab as $value)
	{
		if (ctype_alpha($value))
			$tab_alpha[] = $value;
		elseif (is_numeric($value))
			$tab_digit[] = $value;
		else
			$tab_divers[] = $value;
	}


	// Tri de la table
	natcasesort($tab_alpha);
	sort($tab_digit, SORT_STRING);
	sort($tab_divers);

	foreach ($tab_alpha as $value)
		echo $value . "\n";
	foreach ($tab_digit as $value)
		echo $value . "\n";
	foreach ($tab_divers as $value)
		echo $value . "\n";
	
}
else
	exit();
?>