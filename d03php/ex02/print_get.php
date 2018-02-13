<?php

	// $_GET : Un tableau associatif des valeurs passées au script courant via les paramètres d'URL. $_GET est superglobale.

	// Si $_GET["name"] va chercher, dans l'URL, l'argument nomme 'name'
	// et retourne sa valeur: ...?name=Guillaume

	foreach ($_GET as $key => $value)
		echo $key.": ".$value."\n";

	/* TESTS */
	/*
	curl 'http://localhost:8100/d03/ex02/print_get.php?login=mmontinet'
	curl 'http://localhost:8100/d03/ex02/print_get.php?gdb=pied2biche&barry=barreamine'
	curl 'http://localhost:8100/d03/ex02/print_get.php?gdb=pied2biche&barry=barreamine&toto=tarte&voiture=audi'
	*/

?>