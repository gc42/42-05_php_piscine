#!/usr/bin/php
<?php

/* Seul le premier argument est traite.
** Reduit tous les espaces [space, tab, \r...] a un seul entre chaque mot,
** aucun espace en debut ou fin de chaine.
** >>> Fonctions similaires utiles : trim, ltrim, rtrim*/


// Supprime les \t pour les '\t' tapes sur sh
// Remplace multiples espaces, tabulations et '\t' par espace.
function trimUltime($str)
{
	$str = str_replace('\t', " ", $str);
	$str = trim(preg_replace('/([ \t]+)|(\\t+)/', " ", $str));	
	return $str;
}

if ($argc > 1)
	echo trimUltime($argv[1]) . "\n";



/* EXEMPLES */

// echo ">> phrase initiale : ";
// echo '\t	phrase\t  \tavec 	\t\t	plein de tab   \tau debut et a la fin	\t' . "\n";

// echo ">> phrase double cotes : ";
// echo trimUltime("	phrase\t  \tavec 	\t\t	plein de tab   \tau debut et a la fin	") . "\n";

// echo ">> phrase simples cotes : ";
// echo trimUltime('	phrase\t  \tavec 	\t\t	plein de tab   \tau debut et a la fin	') . "\n";


#./another_world.php '\t AAAAAA   \t   BBBBBB\t'
#./another_world.php "\t AAAAAA   \t   BBBBBB\t"
?>
