#!/usr/bin/php
<?php

include "../d01php/ex08/ft_is_sort.php";

$tab1 = array("!/@#;^", "42", "zHello World", "salut", "azZzZzZz");
$tab1[] = "Et qu’est-ce qu’on fait maintenant ?";

print_r($tab1);
if (ft_is_sort($tab1))
	echo "Le tableau est trie\n";
else
	echo "Le tableau n’est pas trie\n";


echo "###################################\n";


$tab2 = array("a!/@#;^", "b42", "cHello World", "dsalut", "ezZzZzZz");
$tab2[] = "f c'est trié ?";

print_r($tab2);
if (ft_is_sort($tab2))
	echo "Le tableau est trie\n";
else
	echo "Le tableau n’est pas trie\n";
	

	echo "###################################\n";


$tab3 = array("a", "b", "c", "d", "e");

print_r($tab3);
if (ft_is_sort($tab3))
	echo "Le tableau est trie\n";
else
	echo "Le tableau n’est pas trie\n";
	
?>
