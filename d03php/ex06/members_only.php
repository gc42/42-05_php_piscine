<?php

	if (($_SERVER['PHP_AUTH_USER'] != "zaz") || ($_SERVER['PHP_AUTH_PW'] != "jaimelespetitsponeys")){
		header('HTTP/1.0 401 Unauthorized');
		header('WWW-Authenticate: Basic realm=\'\'Espace membres\'\'');
		echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
	} else {
		$file = file_get_contents('../img/42.png');
		echo "<html><body>\nBonjour Zaz<br />\n<img src='data:image/png;base64,".base64_encode($file)."'>\n</body></html>\n";
	}

/*	TESTS */
/*
curl --user zaz:jaimelespetitsponeys http://d03.local.42.fr:8100/ex06/members_only.php
curl -v --user root:root http://d03.local.42.fr:8100/ex06/members_only.php
*/

/*	EXPLICATIONS */
/*
	$_SERVEUR      : tableau cree par le serveur web.
	PHP_AUTH_USER  : champ de $_SERVER, contient le login
	PHP_AUTH_PW    : champ de $_SERVER, contient le pwd
	login+pwd !=   : serveur envoie 401 et WWW-Authentificate: qui liste les methodes qu'il supporte (defaut : Basic)
	curl           : --user login:pwd => demande a curl de faire une authentification HTML
	securite       : login+pwd sont envoyes en 'clair' sur le reseau (base64 encoded)
	base64_encode  : retourne une chaine de caracteres. Permet de ne pas alterer les binaires, dans mails notamment

*/
/*	VALEURS DE $_SERVER */
/*
	echo "\n\n>>>>>>\n";
	echo ">1 ".$_SERVER['HTTP_HOST']."\n";
	echo ">2 ".$_SERVER['DOCUMENT_ROOT']."\n";
	echo ">3 ".$_SERVER['SERVER_PORT']."\n";
	echo ">4 ".$_SERVER['SCRIPT_NAME']."\n";
	echo ">5 ".$_SERVER['PHP_AUTH_USER']."\n";
	echo ">6 ".$_SERVER['PHP_AUTH_PW']."\n";
	echo ">7 ".$_SERVER['SERVER_ADMIN']."\n";
	echo ">8 ".$_SERVER['SCRIPT_FILENAME']."\n";
	echo ">9 ".$_SERVER['HTTP_USER_AGENT']."\n";
	echo ">0 ".$_SERVER['SERVER_ADMIN']."\n";
*/
 ?>