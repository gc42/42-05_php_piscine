#!/usr/bin/php
<?php

function trimUltime($str) {
	$str = str_replace('\t', " ", $str);
	$str = trim($str);
	$str = preg_replace("#[ ]+#", " ", $str);
	return $str;
}

if ($argc < 2 || $argv[1] === "") {
	exit();
}

$str = $argv[1];

// Supprimer les espaces
$str = trimUltime($str);

// Verifie que chaine resultante pas vide
if ($str === "")
	exit();				

// Separation str => tab de mots
$tab = explode(" ", $str);

// Suppression des valeurs vides
$tab = array_filter($tab, function($var) {
	return (!($var == '' || is_null($var)));
	});

$temp = $tab[0];
// Supprimer le premier element et decaler les values
unset($tab[0]);
$tab = array_values($tab);

// Ajouter le premier element a la fin du tableau
$tab[] = $temp;

// Concatener les arguments
$str = implode(" ", $tab);	// Concatener arguments, separe par espace

//Imprimer la str
echo $str . "\n";

?>