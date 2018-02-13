#!/usr/bin/php
<?php

date_default_timezone_set("Europe/Paris");

// Declaration des tableaux associatifs
$nbr_mois = array(
    1 => "janvier",
    2 => "février",
    3 => "mars",
    4 => "avril",
    5 => "mai",
    6 => "juin",
    7 => "juillet",
    8 => "août",
    9 => "septembre",
    10 => "octobre",
    11 => "novembre",
    12 => "décembre");

$nbr_week = array(
    1 => "lundi",
    2 => "mardi",
    3 => "mercredi",
    4 => "jeudi",
    5 => "vendredi",
    6 => "samedi",
    7 => "dimanche");

if ($argc < 2)
	exit();

$tab_date = explode(" ", $argv[1]);

// echo ">> apres explode\n";
// print_r($tab_date);

// TESTS VALIDATION DU TEXTE DE LA DATE
if (count($tab_date) != 5 ||
	preg_match("#^[1-9]$|^0[1-9]$|^[1-2][0-9]$|^3[0-1]$#", $tab_date[1]) === 0 ||
	preg_match("#^[0-9]{4}$#", $tab_date[3]) === 0 ||
	preg_match("#^([0-1][0-9]|2[0-3]):([0-5][0-9]):([0-5][0-9])$#", $tab_date[4]) === 0)
{
	echo "Wrong Format\n";
	exit();
}

// CONVERTIT LE TEXTE 'jour' PUIS 'mois' EN CHIFFRE, False si pas trouve
// array_search : retourne la cle de la premiere valeur qui matche
// lcfirst.     : mets le premier caractere en minuscules (lc=lowcase)  
$tab_date[0] = array_search(lcfirst($tab_date[0]), $nbr_week);
$tab_date[2] = array_search(lcfirst($tab_date[2]), $nbr_mois);

// Verifie que 'Jour' et 'Mois' sont valides
if ($tab_date[0] === False || $tab_date[2] === False)
{
	echo "Wrong Format\n";
	exit();
}

// Recomposition du string de la date au format YY/mm/dd/HH:MM:II
$str_date = $tab_date[3] . "-" . $tab_date[2] . "-" . $tab_date[1] . " " . $tab_date[4];

// Erreur si ce n'est pas une date valide
if (($epock = strtotime($str_date)) === False )
	echo "Wrong Format\n";
else
	echo $epock . "\n";



/*  EXEMPLES. */
// ./one_more_time.php "Mardi 12 Décembre 2013 12:02:21"
// ./one_more_time.php "Jeudi 01 Février 1961 00:00:00"
// ./one_more_time.php "Jeudi 31 Février 1961 00:00:00"
// ./one_more_time.php "AAAAA 31 Février 1961 00:00:00"
// ./one_more_time.php "Jeudi 00 Février 1961 00:00:00"
// ./one_more_time.php "Jeudi 32 Février 1961 00:00:00"
// ./one_more_time.php "Jeudi 31 Fevrier 1961 00:00:00"
// ./one_more_time.php "Jeudi 31 Février 200 00:00:00"
// ./one_more_time.php "Jeudi 31 Février 20009 00:00:00"
// ./one_more_time.php "Jeudi 31 Février 1961 0000:00"
// ./one_more_time.php "Jeudi 31 Février 1961 24:00:00"
// ./one_more_time.php "Jeudi 31 Février 1961 23:60:00"
// ./one_more_time.php "Jeudi 31 Février 1961 23:59:60"
// ./one_more_time.php "Jeudi 31 Février 1961 23:59:59"
// ./one_more_time.php "Jeudi 31 Decembre 1961 00:00:00"
// ./one_more_time.php "Jeudi 31 Mécembre 1961 00:00:00"
?>