<?php
/*
** TRUE si login/passwd correspond a un compte dans ../private/passwd
** FALSE si n'existe pas.
** $passwd contient le mot de passe en clair, avant hashage
*/

	function auth($login, $passwd)
	{
		if (!$login || !$passwd || !file_exists('../private/passwd'))
			return False;

		$account = unserialize(file_get_contents('../private/passwd'));

		if ($account)
		{
			foreach ($account as $k => $v)
			{
				if ($v['login'] === $login && $v['passwd'] === hash('whirlpool', $passwd))
					return True;
			}
		}
		return False;
	}

?>