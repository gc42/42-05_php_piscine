<?php

function ft_is_sort($tab)
{
	$temp = $tab;
	sort($temp);

	return ($temp === $tab);

	// $taille = count($tab);

	// $i = 0;
	// while ($i < $taille)
	// {
	// 	if ($temp[$i] === $tab[$i])
	// 		$i++;
	// 	else
	// 		return False;
	// }
	// return True;
}
?>