<?php

/*
** -Ne prends aucun parametre
** -Se sert du cookie de session pour afficher le login contenu
**  dans la variable 'loged_on_user' suivi d'un "\n".
** -Si la variable n'existe pas, ou contient chaine vide, => "ERROR\n"
*/
	session_start();
	#echo "yes\n";
	#print_r($SESSION['logged_on_user']);

	if (!$_SESSION['logged_on_user'])
	{
		echo "ERROR\n";
		// echo "no\n";
	}
	else
	{
		echo $_SESSION['logged_on_user'] . "\n";
		// echo "yes\n";
	}

    /* TESTS */
/*
rm ~/http/MyWebSite/d04/private/passwd
curl -d login=toto -d passwd=titi -d submit=OK              'http://d04.local.42.fr:8100/d04/ex01/create.php'		// New valid user
OK
curl -d login=toto -d oldpw=titi  -d newpw=toto -d submit=OK  'http://d04.local.42.fr:8100/d04/ex02/modif.php'		// Valid modif
OK
curl -c cook.txt 'http://d04.local.42.fr:8100/d04/ex03/login.php?login=toto&passwd=toto'
OK
curl -b cook.txt 'http://d04.local.42.fr:8100/d04/ex03/whoami.php'
toto
curl -b cook.txt 'http://d04.local.42.fr:8100/d04/ex03/logout.php'
curl -b cook.txt 'http://d04.local.42.fr:8100/d04/ex03/whoami.php'
ERROR



*/
?>