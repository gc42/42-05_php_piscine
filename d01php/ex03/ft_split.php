<?php

// La fonction ft_split() prends une chaine en parametre (mots separes par un ou plusieurs espaces), et renvoie un tableau trié des différents mots. Votre rendu ft_split.php sera inclus dans un fichier php de test.

function ft_split($s)
{
	$tab = explode(" ", $s);

	// Suppression des valeurs empty,
	// mais les valeurs False et '0' sont conserves.
	if ($s != NULL) {
		$tab = array_filter($tab, function($var) {
		return (!($var == '' || is_null($var)));
		});
		sort($tab);
	}
	return ($tab);
}

?>
