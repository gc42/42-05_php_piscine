<?php

/*
** -Prends en parametre dans l'URL les variables $login et $passwd.
** -Demarre une session
** -Verifie la validite du couple login/passwd
** -Stocke dans la session la variable 'logged_on_user' qui contient :
**		-soit login du couple login/passwd correct
**		-soit chaine vide dans le cas contraire
** -Si login/passwd est correct, la page affiche OK\n
** -Sinon ERROR\n
** -Utilise auth.php via un include
*/
	require_once('./auth.php');

	session_start();

	if ($_GET['login'] && $_GET['passwd'] && auth($_GET['login'], $_GET['passwd']))
	{
		$_SESSION['logged_on_user'] = $_GET['login'];
		// print_r($_SESSION['logged_on_user']);
		echo "OK\n";
	} else
	{
		$_SESSION['logged_on_user'] = "";
		// print_r($_SESSION['logged_on_user']);
		echo "ERROR\n";
	}

	/* TESTS */
/*
rm ~/http/MyWebSite/d04/private/passwd
curl -d login=toto -d passwd=titi -d submit=OK 'http://d04.local.42.fr:8100/d04/ex01/create.php'	// New valid user
OK
curl 'http://d04.local.42.fr:8100/d04/ex03/login.php?login=toto&passwd=titi'
OK
*/



?>