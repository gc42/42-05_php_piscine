<?php
	// Verif champs pas vides et submit = OK
	if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] === "OK" && file_exists('../private/passwd'))
	{
		$account = unserialize(file_get_contents('../private/passwd'));
		if ($account)
		{
			$exist = 0;
			foreach ($account as $k => $v)
			{
				if ($v['login'] === $_POST['login'] && $v['passwd'] === hash('whirlpool', $_POST['oldpw']))
				{
					$exist = 1;
					$account[$k]['passwd'] =  hash('whirlpool', $_POST['newpw']);
				}
			}
			if ($exist)
			{
				file_put_contents('../private/passwd', serialize($account));
				echo "OK\n";
			} else
				echo "ERROR\n";
		} else
			echo "ERROR\n";

	} else
		echo "ERROR\n";

/* TESTS */
/*
rm ~/http/MyWebSite/d04/private/passwd 																		// RAZ
curl -d login=Y -d passwd=11 -d submit=OK              'http://d04.local.42.fr:8100/d04/ex01/create.php'	// New valid user 	OK
curl -d login=x -d passwd=21 -d submit=OK              'http://d04.local.42.fr:8100/d04/ex01/create.php'	// New valid user 	OK
curl -d login=x -d oldpw=21  -d newpw=42 -d submit=OK  'http://d04.local.42.fr:8100/d04/ex02/modif.php'		// Valid modif 		OK
more ~/http/MyWebSite/d04/private/passwd 																	// Read file
curl -d login=x -d oldpw=21  -d newpw=42 -d submit=OK  'http://d04.local.42.fr:8100/d04/ex02/modif.php'		// False old pwd 	ERROR
curl -d login=x -d oldpw=42  -d newpw=   -d submit=OK  'http://d04.local.42.fr:8100/d04/ex02/modif.php'		// Empty new pwd 	ERROR
*/
?>