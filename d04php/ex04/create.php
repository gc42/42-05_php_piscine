<?php
	// Verif champs pas vides et submit = OK
	if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "OK")
	{
		header("Location: index.php");
		// Si le dossier n'existe pas, le creer
		if (!file_exists('../private'))
			mkdir("../private");
		// Si le fichier n'existe pas, le creer
		if (!file_exists('../private/passwd'))
			file_put_contents('../private/passwd', null);		// Nouveau fichier, contenu = tableau vide $account = array();

		$account = unserialize(file_get_contents('../private/passwd'));	//Fichier binaire transforme en tableau des users

		// Verifier si le login existe deja
		if ($account)
		{
			$exist = 0;
			foreach ($account as $k => $v)
			{
				if ($v['login'] === $_POST['login'])
					$exist = 1;
			}
		}
		if ($exist)
			echo "ERROR\n";

		// Si le login n'existe pas, ajout le nouveau user
		else
		{
			$tmp['login'] = $_POST['login'];
			$tmp['passwd'] = hash('whirlpool', $_POST['passwd']);		 // Hachage du mot de passe
			$account[] = $tmp; 											 // Ajout dans tableau des users
			file_put_contents('../private/passwd', serialize($account)); // Tableau transforme en fichier binaire
			echo "OK\n";
		}
	}
	else
		echo "ERROR\n";


/* TESTS */
/*
rm ~/http/MyWebSite/d04/private/passwd 																//Reinit /passwd
curl -d login=toto1 -d passwd=titi1 -d submit=OK 'http://d04.local.42.fr:8100/d04/ex01/create.php'  //New valid user
OK
curl -d login=toto2 -d passwd=titi2 -d submit=OK 'http://d04.local.42.fr:8100/d04/ex01/create.php'  //New valid user
OK
more ~/http/MyWebSite/d04/private/passwd 	 														//Read /passwd
curl -d login=toto1 -d passwd=titi1 -d submit=OK 'http://d04.local.42.fr:8100/d04/ex01/create.php'  //ERROR Existing user(login+pwd)
ERROR
curl -d login=toto1 -d passwd=toto  -d submit=OK 'http://d04.local.42.fr:8100/d04/ex01/create.php'  //ERROR Existing login
ERROR
curl -d login=toto2 -d passwd=      -d submit=OK 'http://d04.local.42.fr:8100/d04/ex01/create.php'  //ERROR Missing pwd
ERROR
curl -d login=      -d passwd=titi2 -d submit=OK 'http://d04.local.42.fr:8100/d04/ex01/create.php'  //ERROR Missing login
ERROR

*/
?>