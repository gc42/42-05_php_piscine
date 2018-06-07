<?php

	require_once('conn.php');
	session_start();

	function hash_thing($pwd)
	{
		return hash('ripemd256', hash('ripemd128', hash('sha256', $pwd)));
	}

	$deleted_account = 'deleted_account';

	function user_update2($email, string $prenom, string $nom, string $pwd, string $address)
	{
		$err = null;
		$db = conn_db();

		if (strlen($prenom) < 3 || strlen($prenom) > 45)
			$err[] = 'prenom';
		if (strlen($nom) < 3 || strlen($nom) > 45)
			$err[] = 'nom';
		if (strlen($address) < 12 || strlen($address) > 100)
			$err[] = 'address';
		if (strlen($pwd) < 7)
			$err[] = 'pwd';
		else
			$pwd = hash_thing($pwd);

		if (!empty($err))
			return ($err);

		$email = mysqli_real_escape_string($db, $email);
		$prenom = mysqli_real_escape_string($db, $prenom);
		$nom = mysqli_real_escape_string($db, $nom);
		$pwd = mysqli_real_escape_string($db, $pwd);
		$address = mysqli_real_escape_string($db, $address);
		$req = "UPDATE users SET prenom='$prenom', nom='$nom', pwd='$pwd', address='$address' WHERE email = '$email'";
		$req = mysqli_query($db, $req);
		if ($req)
			return true;
		return array('error');
	}

	function user_create(string $email, string $pwd, string $prenom, string $nom, string $address, bool $is_admin = false)
	{
		$db = conn_db();
		$err = array();
		if (strlen($email) > 45 || strlen($email) < 5)
			$err[] = 'email';
		if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE)
			$err[] = 'email';
		if (strlen($pwd) < 7)
			$err[] = 'pwd';
		else
		{
			if ($is_admin)
				$pwd = hash_thing($pwd);
			else
				$pwd = hash_thing($pwd);
		}
		if (strlen($prenom) < 3 || strlen($prenom) > 45)
			$err[] = 'prenom';
		if (strlen($nom) < 3 || strlen($nom) > 45)
			$err[] = 'nom';
		if (strlen($address) < 12 || strlen($address) > 100)
			$err[] = 'address';
		if (!empty($err))
			return ($err);
		$email = mysqli_real_escape_string($db, $email);
		$email = mysqli_real_escape_string($db, $email);
		$pwd = mysqli_real_escape_string($db, $pwd);
		$prenom = mysqli_real_escape_string($db, $prenom);
		$nom = mysqli_real_escape_string($db, $nom);
		$address = mysqli_real_escape_string($db, $email);
		$req = "INSERT INTO users (email, pwd, is_admin, prenom, nom, address)
			VALUES ('$email', '$pwd', '$is_admin', '$prenom', '$nom', '$address')";
		if (mysqli_query($db, $req) === TRUE)
			return TRUE;
		return (array('general'));
	}


	function user_update(array $datas, string $old_email, bool $noError = false)
	{
		$db = conn_db(); /* Could control if connection worked or not (NULL or NOT) */
		$err = NULL;

		if ($datas['pwd'])
		{
			if (strlen($datas['pwd']) < 7)
				$err[] = 'pwd';
			else
			{
				if ($datas['is_admin'])
					$pwd = hash_thing($datas['pwd']);
				else
					$pwd = hash_thing($datas['pwd']);
				$req['pwd'] = $pwd;
			}
		}
		if ($datas['prenom'])
		{
			if (strlen($datas['prenom']) < 3 || strlen($datas['prenom']) > 45)
				$err[] = 'prenom';
			else
				$req['prenom'] = mysqli_real_escape_string($db, $datas['prenom']);
		}
		if ($datas['nom'])
		{
			if (strlen($datas['nom']) < 3 || strlen($datas['nom']) > 45)
				$err[] = 'nom';
			else
				$req['nom'] = mysqli_real_escape_string($db, $datas['nom']);
		}
		if ($datas['address'])
		{
			if (strlen($datas['address']) < 3 || strlen($datas['address']) > 45)
				$err[] = 'address';
			else
				$req['address'] = mysqli_real_escape_string($db, $datas['address']);
		}
		if ($datas['is_admin'])
			$req['is_admin'] = $datas['is_admin'];
		if ($datas['email'])
		{
			if (strlen($datas['email']) > 45 || strlen($datas['email']) < 5)
				$err[] = 'email';
			else
				$req['email'] = mysqli_real_escape_string($db, $datas['email']);
		}
		if ($err == NULL || $noError == 1)
		{
			$old_email = mysqli_real_escape_string($db, $old_email);
			$err = NULL;
			foreach($req as $k => $v)
			{
				$req = "UPDATE users set '$k' as '$v' WHERE email = '$old_email'";
				if (mysqli_query($db, $req) === FALSE)
					$err[] = $k;
			}
			return $err;
		}
		else
			return $err;
	}

	function user_clear($email, $pwd)
	{
		global $deleted_account;
		$email = mysqli_real_escape_string($db, $email);
		$pwd = hash_thing($pwd);
		$req = "UPDATE users set (email, pwd, is_admin, prenom, nom, address) VALUES
			('$deteted_account', '', 0, '', '', '') WHERE email = '$email' AND pwd = '$pwd'";
	}

	function admin_clear($email, $pwd)
	{
		global $deleted_account;
		$email = mysqli_real_escape_string($db, $email);
		$pwd = hash_thing($pwd);
		$req = "UPDATE users set (email, pwd, is_admin, prenom, nom, address) VALUES
			('$deteted_account', '', 0, '', '', '') WHERE email = '$email' AND pwd = '$pwd'";
	}

	function user_delete($email)
	{
		$db = conn_db();
		
		$email = mysqli_real_escape_string($db, $email);
		$req = "DELETE FROM users WHERE email = '$email'";
		$req = mysqli_query($db, $req);
		return ($req);
	}

	function admin_delete($email, $pwd)
	{
		$email = mysqli_real_escape_string($db, $email);
		$pwd = hash_thing($pwd);
		$req = "DELETE FROM users WHERE email = '$email' AND pwd = '$pwd' AND is_admin = 0";
		$req = mysqli_query($db, $req);
		return ($req);
	}

	function user_get($email, $pwd)
	{
		$db = conn_db();

		$pwd = hash_thing($pwd);
		$email = mysqli_real_escape_string($db, $email);
		$req = mysqli_query($db, "SELECT * FROM users WHERE email = '$email' AND pwd = '$pwd' AND is_admin = 0");
		if (!$req)
			return null;
		return mysqli_fetch_assoc($req);
	}

	function user_exist($email)
	{
		$db = conn_db();

		$email = mysqli_real_escape_string($db, $email);
		$req = "SELECT * FROM users WHERE email = '$email'";
		$req = mysqli_query($db, $req);
		if (!$req)
			return null;
		return mysqli_fetch_assoc($req);
	}

	function admin_exist($email)
	{
		$db = conn_db();

		$email = mysqli_real_escape_string($db, $email);
		$req = "SELECT * FROM users WHERE email = '$email' AND is_admin = 1";
		$req = mysqli_query($db, $req);
		if (!$req)
			return null;
		return mysqli_fetch_assoc($req);
	}

	function user_get_all()
	{
		$db = conn_db();

		$req = mysqli_query($db, "SELECT * FROM users WHERE is_admin = 0");
		if (!$req)
			return null;
		return mysqli_fetch_all($req, MYSQLI_ASSOC);
	}

	function mail_exist($email)
	{
		$db = conn_db();

		$mail = mysqli_real_escape_string($db, $mail);
		$req = "SELECT * FROM users WHERE mail = '$mail'";
		$req = mysqli_query($db, $req);
		return mysqli_fetch_assoc($req);
	}


	function admin_get($email, $pwd)
	{
		$db = conn_db();

		$pwd = hash_thing($pwd);
		$email = mysqli_real_escape_string($db, $email);
		$req = "SELECT * FROM users WHERE email = '$email' AND pwd = '$pwd' AND is_admin = 1";
		$req = mysqli_query($db, $req);
		return mysqli_fetch_assoc($req);
	}

	$functions = array('login', 'register', 'update', 'validmail', 'unregister');

	function register(array $datas)
	{
		$err = NULL;

		if (!isset($datas['email']))
			$err[] = 'email';
		if (!isset($datas['pwd']))
			$err[] = 'pwd';
		if (!isset($datas['prenom']))
			$err[] = 'prenom';
		if (!isset($datas['nom']))
			$err[] = 'nom';
		if ($err === NULL)
		{
			if (user_exist($datas['email']) === NULL)
			{
				$key = get_valid_key();
				return (user_create($datas['email'],  $datas['pwd'], $datas['prenom'], $datas['nom'], $key, 0));
			}
			else
				return (array('exist'));
		}
		else
			return $err;
	}

	function unregister(array $datas)
	{
		$err = NULL;
		if (!$datas['email'])
			$err[] = 'email';
		if ($err === NULL)
		{
			if (user_delete($datas['email']) === TRUE)
				return NULL;
			else
				return (array('accountnotfound'));
		}
		else
			return ($err);
	}

	function update(array $datas)
	{
		if ($_SESSION['admin']) {
			if (user_exist($datas['email']))
				return (user_update2($datas['email'], $datas['prenom'], $datas['nom'], $datas['pwd'], $datas['address']));
			else
				return (array('no exist'));
		} else {
			if (user_exist($_SESSION['email']))
				return (user_update2($_SESSION['email'], $datas['prenom'], $datas['nom'], $datas['pwd'], $datas['address']));
			else
				return (array('no exist'));
		}
	}

	function validmail(array $datas)
	{
		if ($datas['$key'])
		{
			if ($_SESSION['email'])
			{
				$email = $_SESSION['email'];
				$user = user_exist($email);
				if ($datas['key'])
				{
					if ($user['key'] == $datas['$key'])
					{
						$tab['key'] = "";
					}
				}
				else
					return array("alreadyvalid");
			}
			else
				return array("notlogin");
		}
	}

	function login_bycookie(array $datas)
	{
		$err = NULL;

		if (!$datas['email'])
			$err[] = 'email';
		if ($err !== NULL)
		{
			$datas = user_get($datas['email'], $datas['pasrd']);
			if ($datas === NULL)
				return (array('notfound'));
			$_SESSION['email'] = $datas['email'];
			return NULL;
		}
		else
			return ($err);
	}

	function login(array $datas)
	{
		$err = NULL;
		if (!isset($datas['email']))
			$err[] = 'email';
		if (!isset($datas['pwd']))
			$err[] = 'pwd';
		if ($err === NULL)
		{
			$datas = user_get($datas['email'], $datas['pwd']);
			if ($datas === NULL)
				return (array('notfound'));
			$_SESSION['email'] = $datas['email'];
			return NULL;
		}
		else
			return ($err);
	}

	if ($_POST['from'] && in_array($_POST['from'], $functions)) {
		$err = $_POST['from']($_POST);
		if (!($err === TRUE || $err === null)) {
			$str_error = implode('&', $err);
			if ($_POST['error']){
				header('Location: ../' . $_POST['error'] . '.php?' . $str_error);
				exit();
			}
			header('Location: ../' . $_POST['from'] . '.php?' . $str_error);
			exit();
		}
		header('Location: ../' . $_POST['success'] . '.php');
		exit();
	}
?>