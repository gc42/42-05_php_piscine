<?php

	if ($_GET['action'] == 'set' && $_GET['name'] && $_GET['value'])
		setcookie($_GET['name'], $_GET['value'], time()+60*60*24*30);	// valable 30 jours

	elseif ($_GET['action'] == 'get' && $_GET['name'] && $_COOKIE[$_GET['name']])
		echo $_COOKIE[$_GET['name']]."\n";

	elseif ($_GET['action'] == 'del' && $_GET['name'] && !$_GET['value'])
		setcookie($_GET['name'], '', time()-1);

/* TESTS */
/*
curl -c cook.txt 'http://localhost:8100/d03/ex03/cookie_crisp.php?action=set&name=plat&value=choucroute'
curl -b cook.txt 'http://localhost:8100/d03/ex03/cookie_crisp.php?action=get&name=plat'
curl -c cook.txt 'http://localhost:8100/d03/ex03/cookie_crisp.php?action=del&name=plat'
curl -b cook.txt 'http://localhost:8100/d03/ex03/cookie_crisp.php?action=get&name=plat'
*/

// EXPLICATIONS :
// OPTIONS DE curl
// -c <nom-fichier>: vers quel fichier curl ecrit/lit/suppr les cookies
// -b : Passe the data in $_COOKIE[<key>]to the HTTP server in the Cookie header.
// print_r($_COOKIE);
// print_r($_GET);

?>